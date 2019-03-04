<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mystyle.css" type="text/css" />
        <link rel="stylesheet" href="OrangeButton.css" type="text/css" />
        
        <style>
            div{
              border: 5px solid white;
              width: 600px;
              padding: 10px;
              border-radius: 10px;
              font-size: 20px;
              text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1> Purchase Successful </h1>
            <button type="button" onclick= "window.location.href='HomePage.html'" class='button'>Homepage</button>
        </header>
        <div>
        <?php
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $phoneNumber = $_POST['txtNum'];
        echo "Name: ".$fullNameValue.".";
        echo "<br>";
        echo "Phone Number:".$phoneNumber.".";
        echo "<br>";
        echo "Total Value: ".$totalValue2.".";
        ?>
        </div>
    </body>
</html>