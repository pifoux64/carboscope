
<?php 

require_once('init.inc.php'); 
$page = 'Présentation';
require_once('header.inc.php'); 

?>


    <form name="myform" class="msform" action="transport.php" method="post" enctype="multipart/form-data">

    <!-- progressbar -->
    <ul id="progressbar">
    <li class="active"><a href="presentation.php" onclick="document.myform.submit();">Présentation</a></li>
    <li class="active"><a href="batiment.php" onclick="document.myform.submit();">Bâtiment</a></li>
    <li><a href="transport.php" onclick="document.myform.submit();">Transports</a></li>
    <li><a href="procedesindus.php" onclick="document.myform.submit();">Procédés industriels</a></li>
    <li><a href="resultats.php" onclick="document.myform.submit();">Resultats</a></li>
  </ul>
 
    <fieldset>
        
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=carboscope', 'root', 'root', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));

    $resultat = $pdo -> query("SELECT * FROM coefficients WHERE categorie = 'combustible_liquide'"); 
    $tableau_combustible_liquide = $resultat -> fetchAll(PDO::FETCH_ASSOC);
    extract($tableau_combustible_liquide);

    $resultat = $pdo -> query("SELECT * FROM coefficients WHERE categorie = 'combustible_solide'");
    $tableau_combustible_solide = $resultat -> fetchAll(PDO::FETCH_ASSOC);
    extract($tableau_combustible_solide);

    $resultat = $pdo -> query("SELECT * FROM coefficients WHERE categorie = 'combustible_gazeux'");
    $tableau_combustible_gazeux = $resultat -> fetchAll(PDO::FETCH_ASSOC);
    extract($tableau_combustible_gazeux);
    ?>
    <br/>
            <div id="batiment">

            <h2 class="heading">Bâtiment</h2>
            <h3 class="fs-subtitle">Cette section concerne les bâtiments de la compagnie (propriétaire et location-acquisition)</h3>

                <?php 
                // echo "post :";
                // debug($_POST); 
                // echo "session :";
                // debug($_SESSION);
                 ?>
              
              <label>Votre entreprise à-t-elle plusieurs bâtiments ? </label>
                <select class="form-control" id="plusieursbatiments" name="plusieursbatiments" onchange="changeplusieursbatiments();"> 
                <option>Choisir...</option>
                    <option value="non">Non</option> 
                    <option value="oui">Oui</option> 
                </select> <br/>

                <label for="nbbatiment">Combien de bâtiments avez vous ? </label>
                <input type="number" name="nbbatiment" placeholder="Nombre de bâtiment(s) (locataire ou propriétaire)" id="nbbatiment" class="form-control">

<h3 style="text-align: center"> Bâtiment <?php if(isset($_SESSION['batiment1utilisation']) && isset($_SESSION['batiment1utilisation'])){echo $_SESSION['batiment1utilisation']." - ".$_SESSION['batiment1ville'];}else{echo "1";} ?></h3>

              <p>Êtes-vous propriétaire ou locataire de ce bâtiment ? </p>
                            <select id="batiment1proprietaire" name="batiment1proprietaire" class="form-control"> 
                            <option>Choisir...</option>
                            <option value="proprietaire">Propriétaire</option> 
                            <option value="locataire">Locataire</option> 
                            </select> <br/>

<br/><label for=batiment1utilisation> Utilisation principale : </label>
                
                <input type="text" class="form-control" placeholder="Ex: Siège Social" name="batiment1utilisation" value="<?php echo isset($_SESSION['batiment1utilisation']) ? $_SESSION['batiment1utilisation'] : '' ?>">

                <div class="row">
                        <div class="col">    
                        <label for=batiment1ville> Ville du bâtiment: </label>
                        <input type="text" class="form-control" name="batiment1ville" placeholder="Ville" value="<?php echo isset($_SESSION['batiment1ville']) ? $_SESSION['batiment1ville'] : '' ?>">
                        </div>

                        <div class="col">
                        <label for=batiment1cp> Code postal du bâtiment: </label>
                        <input type="text" class="form-control" name="batiment1cp" placeholder="A1B 2C3" value="<?php echo isset($_SESSION['batiment1cp']) ? $_SESSION['batiment1cp'] : '' ?>">
                        </div>
                </div>

                    <div class="row">
                        <div class="col">    
                        <label class="form-check-label">Connaissez-vous la superficie du bâtiment ?</label>
                            <select class="form-control" id="batiment1connaitsup" name="batiment1connaitsup" onchange="batiment1changeconnaitsup();"> 
                            <option>Choisir...</option>
                            <option value="non">Non</option> 
                            <option value="oui">Oui</option> 
                            </select>
                            
                        </div>
                        <div class="col">
                            
                        <label class="form-check-label" for=batiment1superficie> Quel est la superficie de votre bâtiment ? </label>
                        <input type="number" class="form-control" name="batiment1superficie" placeholder="Superficie en m²" value="<?php echo isset($_SESSION['batiment1superficie']) ? $_SESSION['batiment1superficie'] : '' ?>">
                        </div>
                        
                           
                        </div>
                    </div>



                

<h4>Chauffage</h4>

    <div class="row">
        <div class="col">    
            <label for="batiment1typechauffage">Quel type de chauffage utilisez vous ?</label>
                <select id="batiment1typechauffage" class="form-control" onchange="changebatiment1typechauffage();" name="batiment1typechauffage">
                    <option <?php if (isset($_SESSION['batiment1typechauffage']) && ($_SESSION['batiment1typechauffage']) == "Choisir..."){echo "selected";}else{echo "";}?> value="Choisir...">Choisir...</option>               
                    <option <?php if (isset($_SESSION['batiment1typechauffage']) && ($_SESSION['batiment1typechauffage']) == "Électricité"){echo "selected";}else{echo "";}?> value="Électricité">Électricité</option>
                    <option <?php if (isset($_SESSION['batiment1typechauffage']) && ($_SESSION['batiment1typechauffage']) == "Gaz naturel"){echo "selected";}else{echo "";}?> value="Gaz naturel">Gaz naturel</option>
                    <option <?php if (isset($_SESSION['batiment1typechauffage']) && ($_SESSION['batiment1typechauffage']) == "Propane"){echo "selected";}else{echo "";}?> value="Propane">Propane</option>
                    <option <?php if (isset($_SESSION['batiment1typechauffage']) && ($_SESSION['batiment1typechauffage']) == "Mazout"){echo "selected";}else{echo "";}?> value="Mazout">Mazout</option>
                    <option <?php if (isset($_SESSION['batiment1typechauffage']) && ($_SESSION['batiment1typechauffage']) == "Autre"){echo "selected";}else{echo "";}?> value="Autre">Autre</option>
                </select>
        </div>

    <div id="dbatiment1autrechauffage" >
            <div class="col" id="dbatiment1autrechauffage">
            
                <label for="batiment1autrechauffage">Quel combustible utilisez-vous ?</label>
                <select class="form-control" name="batiment1autrechauffage" id="batiment1autrechauffage">
                                    <option>Choisir...</option>
                                        <?php
                                        foreach ($tableau_combustible_solide as $key => $value) {
                                                        echo '<option>';
                                                        extract($value);
                                                        echo $element;
                                                        echo '</option>';
                                                    } 
                                        
                                                    
                                        foreach ($tableau_combustible_liquide as $key => $value) {
                                                        echo '<option>';
                                                        extract($value);
                                                        echo $element;
                                                        echo '</option>';
                                                    } 
                                                    foreach ($tableau_combustible_gazeux as $key => $value) {
                                                        echo '<option>';
                                                        extract($value);
                                                        echo $element;
                                                        echo '</option>';
                                                    } 
                                                    ?>
                                    </select>
                </select>
            </div>
        </div>
    </div>
    <p>
                    
                   
                    <input type="number" name="electricityquantity" placeholder="Quantité d'electricité">
                    <select name="unite" id="unite">
                            <option>Choisir...</option>
                            <option value="KWh">KWh</option>
                            <option value="dollars">$CA</option>
                            <option value="surface">surface en m<sup>2</sup></option>
                    </select>
                    <a href="" class="info"><img src="info.png" alt="icone information" width="20" height="20"/><em>Où trouver l'information ? <br/><img src="facturehydro.png" alt="facture hydro quebec"/></em></a><br/><br/><br/>
                </p>

<script>

function changebatiment1typechauffage(){ 
    if (document.getElementById("batiment1typechauffage").value == "Autre") 
    { document.getElementById("dbatiment1autrechauffage").style.display = "block"} 
    else {  
        document.getElementById("dbatiment1autrechauffage").style.display = "none"} }

window.onload = changebatiment1typechauffage();
</script>

<h4>Climatisation</h4>
<h4>Vapeur</h4>
<h4>Électricicté</h4>

            

                <!-- <h4>Combustibles solides</h4>

                                    <p>Utilisez-vous des Combustibles Solides dans vos bâtiments (ex: chauffage..) ?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="combustiblesolides" id="soli_oui" value="oui">
                                        <label class="form-check-label" for="soli_oui">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="combustiblesolides" id="soli_non" value="non">
                                        <label class="form-check-label" for="soli_non">Non</label>
                                    </div>

                                    <div id="combustiblessolides" >
                                    <input type="number" name="combustiblesolidequantity" placeholder="Quantité de Combustible Solide"> 
                                    <select name="combustible_solides[]">
                                    <option>Choisir...</option>
                                        <?php
                                        foreach ($tableau_combustible_solide as $key => $value) {
                                                        echo '<option>';
                                                        extract($value);
                                                        echo $element;
                                                        echo '</option>';
                                                    } 
                                        ?>
                                    </select><br/>
                                    </div>
                            </div><br/>
                <h4>Combustibles liquides</h4>
                    <label >Quel combustible liquide ?</label><br />

                    <input type="number" name="combustibleliquidequantity" placeholder="Quantité de Combustible Liquide"> 

                    <select name="combustible_liquide[]">
                        <option>Choisir...</option>
                    <?php
                    foreach ($tableau_combustible_liquide as $key => $value) {
                                    echo '<option>';
                                    extract($value);
                                    echo $element;
                                    echo '</option>';
                                } 
                    ?>
                    </select><br/><br/>
                <h4>Combustibles gazeux</h4>
                    <label >Quel combustible gazeux ?</label><br />

                    <input type="number" name="combustiblegazeuxquantity" placeholder="Quantité de Combustible Gazeux"> 

                    <select name="combustible_gazeux[]">
                    <option>Choisir...</option>
                    <?php
                    // foreach ($tableau_combustible_gazeux as $key => $value) {
                    //                 echo '<option>';
                    //                 extract($value);
                    //                 echo $element;
                    //                 echo '</option>';
                    //             } 
                    ?>
                    </select><br/><br/>
                <div class="electricite">                        
                <h3>Électricité</h3> -->

                </div>                                 
                <div class="button">
                <input type="button" name="previous" value="Précédent" class="previous action-button" onClick="document.location='presentation.php'"/>        
                <input type="submit" name="submit" class="submit action-button" value="Suivant"/> 
                </div>

    </fieldset>

    </form> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<?php 
require_once('footer.php'); 
?>