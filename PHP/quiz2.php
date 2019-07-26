<?php

class CustomerMapper    {

    private static $db;

    static function initialize(string $className)    {
        self::$db = new PDOAgent($className);
    }

    static function createCustomer(Customer $newCustomer): int   {
        $sqlInsert = "INSERT INTO Customers (Name, Address, City) VALUES (:name, :address, :city);";
        self::$db->query($sqlInsert);
        self::$db->bind(':name',$newCustomer->getName());
        self::$db->bind(':address', $newCustomer->getAddress());
        self::$db->bind(':city', $newCustomer->getCity());
        self::$db->execute();
       return  self::$db->lastInsertId();
    }
    static function getCustomer(int $id) : Customer   {   
        $singleSelect = "SELECT * FROM Customers WHERE CustomerID = :customerid";
        self::$db->query($singleSelect);
        self::$db->bind(':customerid', $id);
        self::$db->execute();
        return self::$db->singleResult();
    }
    static function getCustomers(): Array   {
        $selectAll = "SELECT * FROM Customers;";
        self::$db->query($selectAll);
        self::$db->execute();
        return self::$db->resultset();
    }

    static function updateCustomer(Customer $updatedCustomer): int   {
        try {
            $updateQuery = "UPDATE Customers SET Name = :name, City = :city, Address = :address WHERE CustomerId = :id;";
            self::$db->query($updateQuery);
            $data = [
                ':city' => $updatedCustomer->getCity(),
                ':address' => $updatedCustomer->getAddress(),
                ':name' => $updatedCustomer->getName(),
                ':id' => $updatedCustomer->getCustomerID()
            ];
            self::$db->execute($data);
            if (self::$db->rowCount() !=1)    {
                throw new Exception("There was an error updating the database!");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
            self::$db->debugDumpParams();
        }    
        return self::$db->rowCount();
    }

    
    static function deleteCustomer(int $id): bool {
        try {
            //Create the delete query
            $deleteQuery = "DELETE FROM Customers WHERE CustomerId = :customerid";
            self::$db->query($deleteQuery);
            self::$db->bind(':customerid', $id);
            //Execute the query
            self::$db->execute();
            if (self::$db->rowCount() != 1) {
                throw new Exception("There was an error deleting customer $id");
            } 
        } catch (Exception $ex) {
            echo $ex->getMessage();
            self::$db->debugDumpParams();
            return false;
        }
        return true;
    }
}

?>