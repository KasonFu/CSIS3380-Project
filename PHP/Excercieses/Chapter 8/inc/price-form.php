<form method="POST" action="<?php $form->encode($_SERVER['PHP_SELF']) ?>">
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
            <?php 
        } ?>
        <tr>
            <td>Minimum Price:</td>
            <td>
                <?php $form->input('text', ['name' => 'min_price']) ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <?php $form->input('submit', ['name' => 'search', 'value' => 'Search']) ?>
            </td>
        </tr>
    </table>
</form>