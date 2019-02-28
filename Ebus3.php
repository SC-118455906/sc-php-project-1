<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mystyle.css" type="text/css" />
        <link rel="stylesheet" href="OrangeButton.css" type="text/css" />
    </head>
    <body>
        <header>
            <h1> Purchase Successful </h1>
            <button type="button" onclick= "window.location.href='HomePage.html'" class='button'>Homepage</button>
        </header>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $POST['txtName'];
        echo "The name is: ".$fullNameValue.".";
        echo"<hr></hr>";
        echo "The total value is: ".$totalValue2.".";
        ?>
    </body>
</html>