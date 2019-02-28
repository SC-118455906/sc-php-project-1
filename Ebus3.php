<!DOCTYPE html>
<html>
    <body>
        <?php
        
        session_start();
        $totalValue = $_POST['txtTotal'];
        
        echo "the total value is ".$totalValue.".";
        ?>
    </body>
</html>