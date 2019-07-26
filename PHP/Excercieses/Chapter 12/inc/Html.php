<?php

function html_form()    { 
    global $form;
    global $errors;
    ?>


<form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
    <table>
        <?php if ($errors) { ?>
        <tr>
            <td>You need to correct the following errors:</td>
            <td>
                <ul>
                    <?php foreach ($errors as $error) { ?>
                    <li>
                        <?php $form->encode($error) ?>
                    </li>
                    <?php 
                } ?>
                </ul>
            </td>
            <?php } ?>
        <tr>
            <td>First Number:</td>
            <td>
                <?php $form->input('text', ['name' => 'num1']) ?>
            </td>
        </tr>
        <tr>
            <td>Operation:</td>
            <td>
                <?php $form->select($GLOBALS['ops'], ['name' => 'op']) ?>
            </td>
        </tr>
        <tr>
            <td>Second Number:</td>
            <td>
                <?php $form->input('text', ['name' => 'num2']) ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <?php $form->input('submit', ['value' => 'Calculate']) ?>
            </td>
        </tr>
    </table>
</form>

<?php } ?>