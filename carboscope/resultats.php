<?php 

require_once('init.inc.php'); 
$page = 'Résultats';
require_once('header.inc.php'); 
?>
<form class="msform" method="post" action="presentation.php"> 
    <ul id="progressbar">
    <li class="active"><a href="presentation.php">Présentation</a></li>
    <li class="active"><a href="batiment.php">Bâtiment</a></li>
    <li class="active"><a href="transport.php">Transports</a></li>
    <li class="active"><a href="procedesindus.php">Fabrication</a></li>
    <li class="active"><a href="resultats.php">Resultats</a></li>
  </ul>

 <fieldset>  
       
        <h2 class="heading">Résultats</h2>       
        <h3 class="fs-subtitle">Procédés Industriels</h3>
        <?php       
        
        //debug($_POST);
        //debug($_SESSION);

        if(isset($_POST['gaz'][0]) AND isset($_POST['Halocarbures_de_Kyoto'][0]) AND isset($_POST['Gaz_hors_Kyoto'][0]) AND isset($_POST['gazquantity']) AND isset($_POST['kyotoquantity']) AND isset($_POST['hkyotoquantity'])) // Puis on vérifie leur valeur ...
        {
        $_SESSION['gaz'] = $_POST['gaz'][0];
        $_SESSION['kyoto'] = $_POST['Halocarbures_de_Kyoto'][0];
        $_SESSION['hkyoto'] = $_POST['Gaz_hors_Kyoto'][0];
        $_SESSION['gazquantity'] = $_POST['gazquantity'];
        $_SESSION['kyotoquantity'] = $_POST['kyotoquantity'];
        $_SESSION['hkyotoquantity'] = $_POST['hkyotoquantity'];
        $req = $pdo->prepare('SELECT * FROM coefficients WHERE element = ? OR element = ? OR element = ?');
        $req->execute(array($_SESSION['gaz'], $_SESSION['kyoto'], $_SESSION['hkyoto']));

        echo '<h3>Resultats pour les Procédés Industriels :</h3>';
        while ($donnes = $req->fetch())
            {
                $resultatgaz = $donnes['valeur_CO2'] * $_SESSION['gazquantity'];
                $resultatkyoto = $donnes['valeur_CO2'] * $_SESSION['kyotoquantity'];
                $resultathkyoto = $donnes['valeur_CO2'] * $_SESSION['hkyotoquantity'];
                
                echo '<br/><p>' . round($donnes['valeur_CO2']) .' kg de CO<sub>2</sub>e par kg de '. $donnes['element'] . '<br/>';   
                    if ($donnes['element'] == $_SESSION['gaz'])
                    {
                        echo "RESULTAT : " . $resultatgaz . " kg de CO<sub>2</sub>e car on consomme " . $_SESSION['gazquantity'] . " kg de " . $_SESSION['gaz']."</p>";
                    }
                    if ($donnes['element'] == $_SESSION['kyoto'])
                    {
                        echo "RESULTAT : " . $resultatkyoto . " kg de CO<sub>2</sub>e car on consomme " . $_SESSION['kyotoquantity'] . " kg de ".$_SESSION['kyoto']."</p>";
                    }
                    if ($donnes['element'] == $_SESSION['hkyoto'])
                    {
                        echo "RESULTAT : " . $donnes['valeur_CO2'] * $resultathkyoto . " kg de CO<sub>2</sub>e car on consomme " . $_SESSION['hkyotoquantity'] . "kg de ".$_SESSION['hkyoto']."</p>";
                    }

                    
            }

        $req->closeCursor();

        }
        else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
        {
        echo 'Veuillez renseigner tous les champs.';
        } ?><style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:10px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-iwm5{background-color:#8163a0;color:#ffffff;text-align:center;vertical-align:top}
        .tg .tg-k890{background-color:#109998;color:#ffffff;text-align:center;vertical-align:top}
        .tg .tg-zbxn{background-color:#5381bb;color:#ffffff;text-align:center;vertical-align:top}
        .tg .tg-kuxv{background-color:#109998;color:#ffffff;text-align:right;vertical-align:top}
        .tg .tg-wk8r{background-color:#ffffff;border-color:#ffffff;text-align:center;vertical-align:top}
        .tg .tg-lr7l{background-color:#b9cce3;text-align:center;vertical-align:top}
        .tg .tg-fz65{font-weight:bold;background-color:#109998;color:#ffffff;text-align:center;vertical-align:top}
        .tg .tg-45fh{background-color:#d5e8ed;text-align:center;vertical-align:top}
        .tg .tg-zx1g{background-color:#b8dee8;text-align:center;vertical-align:top}
        .tg .tg-j5r0{background-color:#ccc0d9;text-align:center;vertical-align:top}
        .tg .tg-6f5y{background-color:#bfbfbf;text-align:center;vertical-align:top}
        .tg .tg-ksna{background-color:#808080;color:#ffffff;text-align:center;vertical-align:top}
        </style>
            <div id="tableGHGProtocol">
                <table class="tg" style="undefined;table-layout: fixed; centered " width=100%>
                <!-- <colgroup>
                <col style="width: 26.3px">
                <col style="width: 6.1px">
                <col style="width: 7.8px">
                <col style="width: 7.9px">
                <col style="width: 8.0px">
                <col style="width: 8.1px">
                <col style="width: 7.6px">
                <col style="width: 7.7px">
                <col style="width: 8.1px">
                <col style="width: 8.0px">
                <col style="width: 7.7px">
                <col style="width: 8.0px">
                <col style="width: 10.4px">
                </colgroup> -->
                <tr>
                    <th class="tg-wk8r"></th>
                    <th class="tg-wk8r"></th>
                    <th class="tg-fz65" colspan="10">Emissions de GES</th>
                    <th class="tg-fz65">Emissions évitées de GES</th>
                </tr>
                <tr>
                    <td class="tg-k890">Postes d'émissions</td>
                    <td class="tg-k890">Numéro</td>
                    <td class="tg-k890">CO2<br>(kg CO2e)</td>
                    <td class="tg-k890">CH4<br>(kg CO2e)</td>
                    <td class="tg-k890">N2O<br>(kg CO2e)</td>
                    <td class="tg-k890">HFCs<br>(kg CO2e)</td>
                    <td class="tg-k890">PFCs<br>(kg CO2e)</td>
                    <td class="tg-k890">SF6<br>(kg CO2e)</td>
                    <td class="tg-k890">Autres gaz<br>(kg CO2e)</td>
                    <td class="tg-fz65">Total<br>(kg CO2e)</td>
                    <td class="tg-k890">CO2 b<br>(kg CO2e)</td>
                    <td class="tg-k890">Incertitude<br>(kg CO2e)</td>
                    <td class="tg-fz65">Total<br>(kg CO2e)</td>
                </tr>
                <tr>
                    <td class="tg-45fh">Emissions directes des sources fixes de combustion</td>
                    <td class="tg-45fh">1-1</td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-zx1g"></td>
                    <td class="tg-j5r0"></td>
                    <td class="tg-6f5y"></td>
                    <td class="tg-lr7l"></td>
                </tr>
                <tr>
                    <td class="tg-45fh">Emissions directes des sources mobiles de combustion</td>
                    <td class="tg-45fh">1-2</td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-zx1g"></td>
                    <td class="tg-j5r0"></td>
                    <td class="tg-6f5y"></td>
                    <td class="tg-lr7l"></td>
                </tr>
                <tr>
                    <td class="tg-45fh">Emissions directes des procédés</td>
                    <td class="tg-45fh">1-3</td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-zx1g"></td>
                    <td class="tg-j5r0"></td>
                    <td class="tg-6f5y"></td>
                    <td class="tg-lr7l"></td>
                </tr>
                <tr>
                    <td class="tg-45fh">Emissions directes fugitives</td>
                    <td class="tg-45fh">1-4</td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-zx1g"></td>
                    <td class="tg-j5r0"></td>
                    <td class="tg-6f5y"></td>
                    <td class="tg-lr7l"></td>
                </tr>
                <tr>
                    <td class="tg-kuxv" colspan="2">Total Scope 1</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-iwm5">0</td>
                    <td class="tg-ksna">0</td>
                    <td class="tg-zbxn">0</td>
                </tr>
                <tr>
                    <td class="tg-45fh">Emissions indirectes liées à la consommation d'électricité</td>
                    <td class="tg-45fh">2-1</td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-zx1g"></td>
                    <td class="tg-j5r0"></td>
                    <td class="tg-6f5y"></td>
                    <td class="tg-lr7l"></td>
                </tr>
                <tr>
                    <td class="tg-45fh">Emissions indirectes liées à la consommation de vapeur, chaleur ou froid</td>
                    <td class="tg-45fh">2-2</td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-45fh"></td>
                    <td class="tg-zx1g"></td>
                    <td class="tg-j5r0"></td>
                    <td class="tg-6f5y"></td>
                    <td class="tg-lr7l"></td>
                </tr>
                <tr>
                    <td class="tg-kuxv" colspan="2">Total Scope 2</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-k890">0</td>
                    <td class="tg-iwm5">0</td>
                    <td class="tg-ksna">0</td>
                    <td class="tg-zbxn">0</td>
                </tr>
                </table>
    </div>     
 
    <div class="button">
    <input type="button" name="previous" class="previous action-button" onClick="document.location='procedesindus.php'" value="Précédent"/>        
    <input type="submit" name="submit" class="submit action-button" value="Envoyer"/> 
    </div> 
        
    </fieldset> 
    </form>
    
    
    <!-- Excel -->

    
    <?php 
require_once('footer.php'); 
?>