-- Lab07 Solution
-- DROP the database if it exists
DROP DATABASE if Exists CompanyDatabase_HFu_84085;
-- CREATE THE DATABASE
CREATE DATABASE CompanyDatabase_HFu_84085 ;

-- SHOW DATABASES;
SHOW DATABASES;
-- Use the database
USE CompanyDatabase_HFu_84085;

-- Create the Department Table (pick your own Entities for the next part)
CREATE Table Department_HFu_84085
(
    DepID int AUTO_INCREMENT PRIMARY KEY,
    DepName varchar(255),
    AvgSalary int(10)
);
-- Create the Employee Table 
CREATE Table Employee_HFu_84085
(
    EmpID int AUTO_INCREMENT PRIMARY KEY,
    EmpName varchar(255),
    Gender varchar(1),
    Age int(3)
);


-- Create the Registration Table

CREATE Table Registration_HFu_84085
(
    RegID int AUTO_INCREMENT PRIMARY KEY,
    EmpID int(5) NOT NULL,
    DepID int(3) NOT NULL,
    RegTime Timestamp,
    FOREIGN KEY (EmpID) REFERENCES Employee_HFu_84085(EmpID),
    FOREIGN KEY (DepID) REFERENCES Department_HFu_84085(DepID)
);




SHOW TABLES;


-- INSERT Employees
INSERT INTO Employee_HFu_84085(EmpName,Gender,Age)
VALUES ("Tom","M",22),
       ("Emily","F",25),
       ("Kason","M",45),
       ("Hayden","M",25),
       ("Anny","F",19);

-- INSERT Department
INSERT INTO Department_HFu_84085(DepName,AvgSalary)
VALUES ("Human Resource", 25),
       ("Project Programming",30),
       ("Project Management",35),
       ("Finance",19);

-- INSERT Registration
INSERT INTO Registration_HFu_84085(EmpID,DepID,RegTime)
VALUES (1,3,"2019-6-1"),
       (2,4,"2019-6-2"),
       (3,1,"2019-6-3"),
       (4,2,"2019-6-4"),
       (5,2,"2019-6-5");


-- SELECT (READ)
SELECT  EmpName, Age, DepName, AvgSalary, RegTime
FROM Registration_HFu_84085 
LEFT JOIN Employee_HFu_84085 ON Registration_HFu_84085.EmpID = Employee_HFu_84085.EmpID
LEFT JOIN Department_HFu_84085 ON Registration_HFu_84085.DepID = Department_HFu_84085.DepID;


-- UPDATE (UPDATE)
UPDATE Department_HFu_84085 
SET DepName = "Sales"
WHERE DepName = "Project Programming";


-- DELETE (DELETE)
DELETE FROM Employee_HFu_84085 WHERE EmpName = "Kason";