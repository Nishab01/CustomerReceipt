<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Ready - Receipt</title>
    <link rel="stylesheet" href="./receipt.css">
</head>
<body>
    <section id="title" onclick="window.location='./';">
        <img src="./logo.png" alt="ClassicReady" height="100px" width="100px">
        <div>
            <h1>Classic Ready</h1>
            <p>Be Classical</p>
        </div>
    </section>

    <section>
        <?php
            $cName = $_GET['cName'];
            $cPhone = $_GET['cPhone'];
            $cEmail = $_GET['cEmail'];

            $pName1 = $_GET['pName1'];
            $pSL1 = $_GET['pSL1'];
            $pQn1 = $_GET['pQn1'];
            $pPrice1 = $_GET['pPrice1'];
            $p1Total = $pQn1 * $pPrice1;

            $pName2 = $_GET['pName2'];
            if($_GET['pName2'] == NULL){
                $pName2 = "";
                $pSL2 = "";
                $pQn2 = 0;
                $pPrice2 = 0;
            }
            else{
                $pSL2 = $_GET['pSL2'];
                $pQn2 = $_GET['pQn2'];
                $pPrice2 = $_GET['pPrice2'];
            }
            $p2Total = $pQn2 * $pPrice2;

            $pName3 = $_GET['pName3'];
            if($_GET['pName3'] == NULL){
                $pName3 = "";
                $pSL3 = "";
                $pQn3 = 0;
                $pPrice3 = 0;
            }
            else{
                $pSL3 = $_GET['pSL3'];
                $pQn3 = $_GET['pQn3'];
                $pPrice3 = $_GET['pPrice3'];
            }
            $p3Total = $pQn3 * $pPrice3;
            
            $pName4 = $_GET['pName4'];
            if($_GET['pName4'] == NULL){
                $pName4 = "";
                $pSL4 = "";
                $pQn4 = 0;
                $pPrice4 = 0;
            }
            else{
                $pSL4 = $_GET['pSL4'];
                $pQn4 = $_GET['pQn4'];
                $pPrice4 = $_GET['pPrice4'];
            }
            $p4Total = $pQn4 * $pPrice4;

            $pName5 = $_GET['pName5'];
            if($_GET['pName5'] == NULL){
                $pName5 = "";
                $pSL5 = "";
                $pQn5 = 0;
                $pPrice5 = 0;
            }
            else{
                $pSL5 = $_GET['pSL5'];
                $pQn5 = $_GET['pQn5'];
                $pPrice5 = $_GET['pPrice5'];
            }
            $p5Total = $pQn5 * $pPrice5;

            $pDelivery = $_GET['pDelivery'];
            $pOther = $_GET['pOther'];
            $pDiscount = $_GET['pDiscount'];
            $pPaid = $_GET['pPaid'];

            $allTotal = $p1Total + $p2Total + $p3Total + $p4Total + $p5Total + $pDelivery + $pOther - $pDiscount;
            $pUnpaid = $allTotal - $pPaid;

            date_default_timezone_set('Asia/Dhaka');
            $date = date("d M Y, h:i:s A");
        ?>
    </section>

    <section id="main">
        <div class="cInfo">
            <table>
                <tr>
                    <td class="tcH">Name:</td>
                    <td><?php echo $cName; ?></td>
                </tr>
                <tr>
                    <td class="tcH">Phone:</td>
                    <td><?php echo $cPhone; ?></td>
                </tr>
                <tr>
                    <td class="tcH">E-mail:</td>
                    <td><?php echo $cEmail; ?></td>
                </tr>
                <tr>
                    <td class="tcH">Date:</td>
                    <td><?php echo $date." (GMT+6)"; ?></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="tHead"><b>Description(s)</b></td>
                    <td class="tHead"><b>Unit Price</b></td>
                    <td class="tHead"><b>Unit</b></td>
                    <td class="tHead"><b>Amount (BDT)</b></td>
                </tr>
                <tr>
                    <td><?php echo $pName1." (<i>SL: ".$pSL1."</i>)";?></td>
                    <td style="text-align: center;"><?php echo $pPrice1; ?></td>
                    <td style="text-align: center;"><?php echo "x".$pQn1; ?></td>
                    <td class="tAm"><?php echo $p1Total; ?></td>
                </tr>

                <tr>
                    <td><?php 
                        if($_GET['pName2'] != ""){
                            echo $pName2." (<i>SL: ".$pSL2."</i>)";
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName2'] != ""){
                            echo $pPrice2;
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName2'] != ""){
                            echo "x".$pQn2;
                        }
                    ?></td>
                    <td class="tAm"><?php
                        if($_GET['pName2'] != ""){
                            echo $p2Total;
                        }
                    ?></td>
                </tr>

                <tr>
                    <td><?php 
                        if($_GET['pName3'] != ""){
                            echo $pName3." (<i>SL: ".$pSL3."</i>)";
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName3'] != ""){
                            echo $pPrice3;
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName3'] != ""){
                            echo "x".$pQn3;
                        }
                    ?></td>
                    <td class="tAm"><?php
                        if($_GET['pName3'] != ""){
                            echo $p3Total;
                        }
                    ?></td>
                </tr>

                <tr>
                    <td><?php 
                        if($_GET['pName4'] != ""){
                            echo $pName4." (<i>SL: ".$pSL4."</i>)";
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName4'] != ""){
                            echo $pPrice4;
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName4'] != ""){
                            echo "x".$pQn4;
                        }
                    ?></td>
                    <td class="tAm"><?php
                        if($_GET['pName4'] != ""){
                            echo $p4Total;
                        }
                    ?></td>
                </tr>

                <tr>
                    <td><?php 
                        if($_GET['pName5'] != ""){
                            echo $pName5." (<i>SL: ".$pSL5."</i>)";
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName5'] != ""){
                            echo $pPrice5;
                        }
                    ?></td>
                    <td style="text-align: center;"><?php
                        if($_GET['pName5'] != ""){
                            echo "x".$pQn5;
                        }
                    ?></td>
                    <td class="tAm"><?php
                        if($_GET['pName5'] != ""){
                            echo $p5Total;
                        }
                    ?></td>
                </tr>
                <tr>
                    <td><i>Delivery Charge</i></td>
                    <td></td>
                    <td></td>
                    <td class="tAm"><?php echo "(+) ".$pDelivery; ?></td>
                </tr>
                <tr>
                    <td><i>Other Charge(s)</i></td>
                    <td></td>
                    <td></td>
                    <td class="tAm"><?php echo "(+) ".$pOther; ?></td>
                </tr>
                <tr>
                    <td><i>Discount</i></td>
                    <td></td>
                    <td></td>
                    <td class="tAm"><?php echo "(-) ".$pDiscount; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="tTotal"><b>Total</b></td>
                    <td class="tTotalAm"><b><?php echo "BDT ".$allTotal; ?></b></td>
                </tr>
            </table>
            <table class="payment">
                <tr>
                    <td class="tdH"><b>Paid (BDT)</b></td>
                    <td class="tdH"><b>Unpaid (BDT)</b></td>
                </tr>
                <tr>
                    <td class="tdTK"><?php echo $pPaid; ?></td>
                    <td class="tdTK"><?php echo $pUnpaid; ?></td>
                </tr>
            </table>
        </div>
    </section>

    <section id="con">
        <h4>Terms & Conditions</h4>
        <li>Make sure, the transactions amounts are correctly calculated.</li>
        <li>For any issue or any query, please bring the receipt.</li>
        <li>Any over-writing or hand edited values will not be accepted.</li>
    </section>

    <section id="us">
        <h4>Contact Us</h4>
        <p>classicready11@gmail.com</p>
        <p>+8801613830565</p>
        <p onclick="window.location.href='https://facebook.com/classicready0';">https://facebook.com/classicready0</p>
    </section>
</body>
</html>