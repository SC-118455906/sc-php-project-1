<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Purchase Service</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="mystyle.css" type="text/css" />
        <link rel="stylesheet" href="OrangeButton.css" type="text/css" />
        <style>
            .options {
              border: 5px solid white;
              width: 600px;
              padding: 10px;
              border-radius: 10px;
              font-size: 18px;
              text-align: center;
            }
        </style>
    </head>
        <body>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
                <header>
                    <h1>Select Desired Service</h1>
                     <button type="button" onclick= "window.location.href='HomePage.html'" class='button'>Homepage</button>
                </header>
        <hr/>
        <div class="centering">
        <center class="options"> 
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Service</b></td> 
                </tr>
                <tr>
                    <td>Blockchain</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Robotics(Autonomy)</td>
                    <td><input type="radio" id="Autonomy" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="1500" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 40%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
        </div>
        </center>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var Autonomy = parseFloat(document.getElementById('Autonomy').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('Autonomy').checked) {
                        document.intCalc.txtSubTot.value = Autonomy;
                        subAmount = Autonomy;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        subAmount = ImmersiveExperience;
                        calculation(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .30);
                    var vatCalc= parseFloat(subTotal * .40);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html>

