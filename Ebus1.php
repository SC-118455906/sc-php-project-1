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
            
            .calc, .clear, .proceed{
                background-color: #20c997;  
                color: white;
                border: 2px solid snow;
                font-size: 20px;
                border-radius: 5px;
                transition: .5s ease;
            }
            
            br {
                display: block;
                margin: 2px 0;
               }

            .calc:hover, .clear:hover , .proceed:hover {
              background-color: white ;
              color: #20c997;
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
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
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
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
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
                <input class="calc" type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/> </br> </br>
                <input class="clear" type="button" name="btnClear" id="btnClear" onclick="Clear()" value="Clear"/> </br> </br>
            <input class="proceed" type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
        </div>
        </center>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var argSubTotal = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var Autonomy = parseFloat(document.getElementById('Autonomy').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        argSubTotal = Blockchain;
                        calcDisVatTotal(argSubTotal);
                        
                    }
                   else if (document.getElementById('Autonomy').checked) {
                        document.intCalc.txtSubTot.value = Autonomy;
                        argSubTotal = Autonomy;
                        calcDisVatTotal(argSubTotal);
                        
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        argSubTotal = ImmersiveExperience;
                        calcDisVatTotal(argSubTotal);
                    }
                } 
                
                //function for calculationg the values//
                function calcDisVatTotal(parmSubTotal) {
                    var subTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);    
                    var Total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = Total;
                }
                
                function Clear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html>

