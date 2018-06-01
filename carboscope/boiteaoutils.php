<?php 

require_once('init.inc.php'); 
$page = 'Boîte à Outils';
require_once('header.inc.php'); 

?>
    <form class="msform" method="post" action="boiteaoutils.php">
    <fieldset> 
    

    <div class="calculator">
    
    <div style="text-align:center;">
        <h2 class="heading">Convertisseur kWh PCS/PCI</h2>
        <form name="formulaire" method="post" action="boiteaoutils.php">
            <p>Quantité à convertir : <input name="nombre1" type="text" ></p>
            
            <label>Sens de la conversion : </label><select name="choix">
                <option value="PCStoPCI">kWh PCS -> kWh PCI</option>
                <option value="PCItoPCS">kWh PCI -> kWh PCS</option>
            </select><br/>

            <label>Type de combustible : </label>
            <select name="choix2">
                <option value="gaznaturel">Gaz Naturel</option>
                <option value="gpl">GPL</option>
                <option value="essence">Essence</option>
                <option value="diesel">Diesel, fioul domestique</option>
                <option value="fioullourd">Fioul lourd</option>
                <option value="charbon">Charbon</option>
            </select><br/>
  
        <input type="submit" value="Calculer">
        <input type="reset" value="Effacer"><br>
 
        </form>
        <b>
            <?php
        if(isset($_POST['nombre1']) AND isset($_POST['choix'])AND isset($_POST['choix2'])) // Si les varaibles existent ...
        {
        $nombre1 =htmlspecialchars($_POST['nombre1']);
        $choix = htmlspecialchars($_POST['choix']);
        $choix2 = htmlspecialchars($_POST['choix2']);

        $pcspcigaz = 1.11;
        $pcspcigpl = 1.09;
        $pcspciessence = 1.08;
        $pcspcidiesel = 1.07;
        $pcspcifioul = 1.06;
        $pcspcicharbon = 1.05;

    
        if($nombre1 != NULL ) // Puis on vérifie leur valeur ...
        {
            if($choix == 'PCStoPCI')
                {
                    if($choix2 == 'gaznaturel')
                    {
                        $resultat = round($nombre1 / $pcspcigaz);
                    echo $nombre1.' kWh PCI équivaut à '.$resultat.' kWh PCS';
                    }
                    else if($choix2 == 'gpl')
                    {
                        $resultat = round($nombre1 / $pcspcigpl);
                    echo $nombre1.' kWh PCI équivaut à '.$resultat.' kWh PCS';
                    }
                    else if($choix2 == 'essence')
                    {
                        $resultat = round($nombre1 / $pcspciessence);
                    echo $nombre1.' kWh PCI équivaut à '.$resultat.' kWh PCS';
                    }
                    else if($choix2 == 'diesel')
                    {
                        $resultat = round($nombre1 / $pcspcidiesel);
                    echo $nombre1.' kWh PCI équivaut à '.$resultat.' kWh PCS';
                    }
                    else if($choix2 == 'fioullourd')
                    {
                        $resultat = round($nombre1 / $pcspcifioul);
                    echo $nombre1.' kWh PCI équivaut à '.$resultat.' kWh PCS';
                    }
                    else if($choix2 == 'charbon')
                    {
                        $resultat = round($nombre1 / $pcspcicharbon);
                    echo $nombre1.' kWh PCI équivaut à '.$resultat.' kWh PCS';
                    }
                }
            if($choix == 'PCItoPCS') 
                {
                    if($choix2 == 'gaznaturel')
                    {
                        $resultat = round($nombre1 * $pcspcigaz);
                    echo $nombre1.' kWh PCS équivaut à '.$resultat.' kWh PCI';
                    }
                    else if($choix2 == 'gpl')
                    {
                        $resultat = round($nombre1 * $pcspcigpl);
                    echo $nombre1.' kWh PCS équivaut à '.$resultat.' kWh PCI';
                    }
                    else if($choix2 == 'essence')
                    {
                        $resultat = round($nombre1 * $pcspciessence);
                    echo $nombre1.' kWh PCS équivaut à '.$resultat.' kWh PCI';
                    }
                    else if($choix2 == 'diesel')
                    {
                        $resultat = round($nombre1 * $pcspcidiesel);
                    echo $nombre1.' kWh PCS équivaut à '.$resultat.' kWh PCI';
                    }
                    else if($choix2 == 'fioullourd')
                    {
                        $resultat = round($nombre1 * $pcspcifioul);
                    echo $nombre1.' kWh PCS équivaut à '.$resultat.' kWh PCI';
                    }
                    else if($choix2 == 'charbon')
                    {
                        $resultat = round($nombre1 * $pcspcicharbon);
                    echo $nombre1.' kWh PCS équivaut à '.$resultat.' kWh PCI';
                    }
                }
            
        }
        else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
        {
        echo 'Veuillez renseigner tous les champs.';
        }
        }
        ?>
        </b>
        </div>
        </div>
        <br/>


        
        <div class="calculator">    
        <div style="text-align:center;">
            <h2 class="heading">Convertisseur de diverses unités physiques</h2>
            <h3 class="fs-subtitle">- Conversion en tep,tec, Joule, kWh PCI, BTU, m<sup>3</sup> de gaz nat. ou t de bois (20% humidité) -</h3>
            <form name="formulaire2" method="post" action="boiteaoutils.php">
                <p>Quantité à convertir : <input name="nombre2" type="text">
                <select name="choix3">
                    <option value="tep">tep</option>
                    <option value="tec">tec</option>
                    <option value="joule">Joule</option>
                    <option value="pci">kWh PCI</option>
                    <option value="btu">BTU</option>
                    <option value="gaznat">m3 de gaz naturel</option>
                    <option value="bois">t bois 20% humidité</option>
    
                </select></p>
                
    
            <input type="submit" value="calculer">
            <input type="reset" value="effacer"><br>
    
            </form>
            
            <?php
        if(isset($_POST['nombre2']) AND isset($_POST['choix3'])) // Si les varaibles existent ...
        {
        $nombre2 =htmlspecialchars($_POST['nombre2']);
        $choix3 = htmlspecialchars($_POST['choix3']);

        if($nombre2 != NULL ) // Puis on vérifie leur valeur ...
        {
            ?>
            <label>Tableau d'équivalence : </label><br/>
            <table class="tableauconv" align="center">
                <tr>
                    <th >Valeur (unité)</th>
                    <th >tep</th>
                    <th >tec</th>
                    <th >Joule</th>
                    <th >kWh PCI</th>
                    <th >BTU</th>
                    <th>m<sup>3</sup> de gaz naturel</th>
                    <th>tonne bois 20% humidité</th>
                </tr>
                <tr>
                    <?php
                        if($choix3 == 'tep')
                        {
                            echo '<td>'.$nombre2 .' (tep)</td>';
                            echo '<td>'.round($nombre2 * 1,2) .'</td>';
                            echo '<td>'.round($nombre2 * 1.42925430210325,2) .'</td>';
                            echo '<td>'.round($nombre2 * 41860000000 ,2).'</td>';
                            echo '<td>'.round($nombre2 * 41860000000 / 3600000 ,2).'</td>';
                            echo '<td>'.round($nombre2 * 39675656.719318,2).'</td>';
                            echo '<td>'.round($nombre2 * 1200,2).'</td>';
                            echo '<td>'.round($nombre2 * 2.98148148148148,2).'</td>';
                            

                        }
                        elseif ($choix3 == 'tec')
                        {
                            echo '<td>'.$nombre2 .' (tec)</td>';
                            echo '<td>'.round($nombre2 * 0.699665551839465,2) .'</td>';
                            echo '<td>'.round($nombre2 * 1,2) .'</td>';
                            echo '<td>'.round($nombre2 * 29288000000 ,2).'</td>';
                            echo '<td>'.round($nombre2 *  8135.55555555556,2).'</td>';
                            echo '<td>'.round($nombre2 * 27759690.2531148,2).'</td>';
                            echo '<td>'.round($nombre2 * 839.598662207358,2).'</td>';
                            echo '<td>'.round($nombre2 * 2.08603988603989,2).'</td>';
                        }
                        elseif ($choix3 == 'joule')
                        {
                            echo '<td>'.$nombre2 .' (Joule)</td>';
                            echo '<td>'.round($nombre2 * 2.38891543239369E-11 ,2) .'</td>';
                            echo '<td>'.round($nombre2 * 3.41436765910953E-11,2) .'</td>';
                            echo '<td>'.round($nombre2 * 1,2).'</td>';
                            echo '<td>'.round($nombre2 *  2.77777777777778E-07,2).'</td>';
                            echo '<td>'.round($nombre2 * 0.000947818,2).'</td>';
                            echo '<td>'.round($nombre2 * 2.86669851887243E-08,2).'</td>';
                            echo '<td>'.round($nombre2 * 7.12250712250712E-11,2).'</td>';
                        }
                        elseif ($choix3 == 'pci')
                        {
                            echo '<td>'.$nombre2 .' (kWh PCI)</td>';
                            echo '<td>'.round($nombre2 * 0.000086000955566173,2) .'</td>';
                            echo '<td>'.round($nombre2 * 0.000122917235727943,2) .'</td>';
                            echo '<td>'.round($nombre2 *  3600000,2).'</td>';
                            echo '<td>'.round($nombre2 * 1,2).'</td>';
                            echo '<td>'.round($nombre2 * 3412.14439057679,2).'</td>';
                            echo '<td>'.round($nombre2 * 0.103201146679408,2).'</td>';
                            echo '<td>'.round($nombre2 * 0.000256410256410256,2).'</td>';
                        }
                        elseif ($choix3 == 'btu')
                        {
                            echo '<td>'.$nombre2 .' (BTU)</td>';
                            echo '<td>'.round($nombre2 * 2.52043717152413E-08,2) .'</td>';
                            echo '<td>'.round($nombre2 * 3.60234567058181E-08,2) .'</td>';
                            echo '<td>'.round($nombre2 * 1055.055 ,2).'</td>';
                            echo '<td>'.round($nombre2 * 0.000293070833333333 ,2).'</td>';
                            echo '<td>'.round($nombre2 * 1,2).'</td>';
                            echo '<td>'.round($nombre2 * 0.0000302452460582895,2).'</td>';
                            echo '<td>'.round($nombre2 * 7.51463675213675E-08,2).'</td>';
                        }
                        elseif ($choix3 == 'gaznat')
                        {
                            echo '<td>'.$nombre2 .' (m<sup>3</sup>gaz naturel)</td>';
                            echo '<td>'.round($nombre2 * 0.000833333333333333,2) .'</td>';
                            echo '<td>'.round($nombre2 * 0.00119104525175271,2) .'</td>';
                            echo '<td>'.round($nombre2 * 34883333.3333333,2).'</td>';
                            echo '<td>'.round($nombre2 * 9.68981481481481,2).'</td>';
                            echo '<td>'.round($nombre2 * 33063.0472660983,2).'</td>';
                            echo '<td>'.round($nombre2 * 1,2).'</td>';
                            echo '<td>'.round($nombre2 * 0.00248456790123457,2).'</td>';
                        }
                        elseif ($choix3 == 'bois')
                        {
                            echo '<td>'.$nombre2 .' (t de bois)</td>';
                            echo '<td>'.round($nombre2 * 0.335403726708075,2) .'</td>';
                            echo '<td>'.round($nombre2 * 0.479377219338978,2) .'</td>';
                            echo '<td>'.round($nombre2 *  14040000000,2).'</td>';
                            echo '<td>'.round($nombre2 * 3900 ,2).'</td>';
                            echo '<td>'.round($nombre2 * 13307363.1232495,2).'</td>';
                            echo '<td>'.round($nombre2 * 402.484472049689 ,2).'</td>';
                            echo '<td>'.round($nombre2 * 1,2).'</td>';
                        }

                        ?>
                    
                </tr>
            </table><br/>
            <?php
            
                
        }   
        }
        else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
        {
        echo 'Veuillez renseigner tous les champs.';
        }
        
        ?>
        </div>
        </div>
        <br/>
        
    </div>

    <a class="texte" href="javascript:window.close();"><input type="" name="calculateur" class="submit action-button" value="Carboscope"/></a> <br/>

    
    </fieldset>
    </form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>