<!DOCTYPE html>
<html>
    <body>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo"<hr></hr>";
        echo "the total value is ".$totalValue2.".";
        ?>
    </body>
</html>