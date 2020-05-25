<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here
$extrapolateData = explode(",",$county_data);
$arrlength = count($extrapolateData);
$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>County_Mix Kenya </title>
        <link rel="stylesheet" type="text/css" href="style.css"/>


        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">

    </head>
    <body>
        <div id="wrapper">
            <h1>Table of Kenyan Governors</h1>

            <table id="keywords" cellspacing="0" cellpadding="0" style="overflow-x:auto;">
                <thead>
                    <tr>
                        <th><span>#</span></th>
                        <th><span>NAME</span></th>
                        <th><span>GOVERNOR</span></th>
                        <th hidden><span>PARTY</span></th>
                        <th><span>WEBSITE</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $j=1;
                for($x = 0; $x < $arrlength; $x++) {
                $getData = explode(" – ",$extrapolateData[$x]);
                $datalength = count($getData);
                ?>
                    <tr>
                        <td class="lalign"><?php echo $j++?></td>
                        <td><?php
                            $unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
                            echo $countyName = str_replace($unwantedCharacters, "",$getData[0]);
                            ?>
                        </td>
                        <td>        <?php
                            if(!empty($getData[2])){
                                echo $getData[1];
                                if($getData[2]=="ODM"){ ?>
                                    <img width="7%" height="30%" src="images/odm.png">
                                <?php }elseif ($getData[2]=="Jubilee"){ ?>
                                    <img width="5%" height="5%" src="images/jubilee.png">
                                <?php }elseif ($getData[2]=="KANU"){ ?>
                                    <img width="8%" height="10%" src="images/kanu.gif">
                                <?php }elseif ($getData[2]=="WDM K"||$getData[2]=="WDM K."){ ?>
                                    <img width="7%" height="10%" src="images/wdm.png">
                                <?php } elseif ($getData[2]=="CCM"){ ?>
                                    <img width="10%" height="10%" src="images/ccm.jpg">
                                <?php } elseif ($getData[2]=="FORD Kenya"){ ?>
                                    <img width="6%" height="7%" src="images/ford.png">
                                <?php } elseif ($getData[2]=="Narc Kenya"){ ?>
                                    <img width="15%" height="10%" src="images/narc.png">
                                <?php }
                            }
                            else {
                                if(strpos($getData[1],"- Jubilee")){
                                    echo str_replace("- Jubilee","",$getData[1]);?>
                                    <img width="5%" height="5%" src="images/jubilee.png">
                                <?php }
                                else if(strpos($getData[1],"- ODM")){
                                    echo str_replace("- ODM","",$getData[1]);?>
                                    <img width="7%" height="30%" src="images/odm.png">
                                <?php }
                            }?>
                        </td>
                        <td hidden><?php
                            if(!empty($getData[2])){
                                if($getData[2] == "WDM K."){
                                    echo "WDM K";
                                }else{
                                    echo $getData[2];
                                }
                            }
                            else {
                                if(strpos($getData[1],"- Jubilee")){
                                    echo "Jubilee";
                                }
                                elseif(strpos($getData[1],"- ODM")){
                                    echo "ODM";
                                }
                            }?></td>
                        <?php
                        $countyName = str_replace($unwantedCharacters, "", $getData[0]);
                        //tanariver
                        $unwantedValuesinlink = array('-'," "," ' ");
                        $link = (str_replace($unwantedValuesinlink, '', $countyName));?>
                        <?php //echo strtolower(str_replace(' ', '', $cleanString));?>
                        <td><a target="_BLANK" href ="https://www.<?php echo strtolower($link);?>.go.ke">https://<?php echo strtolower($link);?>.go.ke</a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>