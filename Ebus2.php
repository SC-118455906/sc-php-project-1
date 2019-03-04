<?php
session_start(); 
$fullNameValue = "";
$phoneNumber = "";
$totalValue2 = ""; 
/* 
 *Create a sesion variable for the mobile number
 */
$totalValue2 = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum'] = $phoneNumber;
$_SESSION['txtTotal'] = $totalValue2;

/** 
 * Allocate the mobile number session variable to a text box
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        <link rel="stylesheet" href="mystyle.css" type="text/css" />
        <link rel="stylesheet" href="OrangeButton.css" type="text/css" />
        <style>
            .Enter{
                color:white;
            }
            
            #btnContinue {
                background-color: #e1811f;
                color: snow;
                text-align: center ;
                font-size: 20px;
                cursor: pointer;
                border-collapse:collapse;
                border:none;
                float: center;
                padding:14px 40px;
                border-radius: 4px;
            }   
            
        </style>
    </head>
    <body>
        <header>
            <h1>Personal Details</h1>
            <button type="button" onclick= "window.location.href='Ebus1.php'" class='button'>Back</button>
        </header>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td class="Enter"><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" required id="extra7" name="extra7" onkeypress="return isNumber(event)"/></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value="" maxlength="4" required/></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue2;?>"/></td>
                        </tr>
                    </table>
                </center>
                <center>
                    <input type="submit" id="btnContinue" onclick="" value="Continue"/>
                </center>
            </form>
        </div>
        <script> // This code was adapted from: https://stackoverflow.com/questions/7295843/allow-only-numbers-to-be-typed-in-a-textbox */
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>
        
                            
</html>


