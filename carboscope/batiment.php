
<?php 

require_once('init.inc.php'); 
$page = 'Présentation';
require_once('header.inc.php'); 

?>


    <form name="myform" class="msform" action="transport.php" method="post" enctype="multipart/form-data">

    <!-- progressbar -->
    <ul id="progressbar">
    <li class="active"><a href="presentation.php">Présentation</a></li>
    <li class="active"><a href="batiment.php">Bâtiment</a></li>
    <li><a href="transport.php">Transports</a></li>
    <li><a href="procedesindus.php">Procédés industriels</a></li>
    <li><a href="resultats.php">Resultats</a></li>
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
        <div id="batimentsection">

            <h2 class="heading">Bâtiment</h2>
            <h3 class="fs-subtitle">Cette section concerne les bâtiments de la compagnie (propriétaire et location-acquisition)</h3>


              
              <label>Votre entreprise à-t-elle plusieurs bâtiments ? </label>
                <select class="form-control" id="plusieursbatiments" name="plusieursbatiments" onchange="changenombrebatiment();"> 
                    <option <?php if (isset($_SESSION['plusieursbatiments']) && ($_SESSION['plusieursbatiments']) == "Choisir..."){echo "selected";}else{echo "";}?> value="Choisir...">Choisir...</option>
                    <option <?php if (isset($_SESSION['plusieursbatiments']) && ($_SESSION['plusieursbatiments']) == "non"){echo "selected";}else{echo "";}?> value="non">Non</option> 
                    <option <?php if (isset($_SESSION['plusieursbatiments']) && ($_SESSION['plusieursbatiments']) == "oui"){echo "selected";}else{echo "";}?> value="oui">Oui</option> 
                </select> <br/>

            <div id="combienbatiments">
                <label for="nbbatiment">Combien de bâtiments avez vous ? </label>
                <input type="number" name="nbbatiment" placeholder="Nombre de bâtiment(s) (locataire ou propriétaire)" id="nbbatiment" class="form-control" value="<?php echo isset($_SESSION['nbbatiment']) ? $_SESSION['nbbatiment'] : 1 ?>">
            </div>


<?php
for ( $j = 1; $j <= (isset($_SESSION['nbbatiment']) ? $_SESSION['nbbatiment'] : 1) ;$j++)
{
?>
<div id="batiment<?php echo $j;?>">

    <h3 style="text-align: center"> Bâtiment <?php if(isset($_SESSION['batiment".$j."utilisation']) && isset($_SESSION['batiment".$j."utilisation'])){echo $_SESSION['batiment".$j."utilisation']." - ".$_SESSION['batiment".$j."ville'];}else{echo "".$j."";} ?></h3>

                <p>Êtes-vous propriétaire ou locataire de ce bâtiment ? </p>
                                <select id="batiment<?php echo $j;?>proprietaire" name="batiment<?php echo $j;?>proprietaire" class="form-control"> 
                                <option <?php if (isset($_SESSION['batiment".$j."proprietaire']) && ($_SESSION['batiment".$j."proprietaire']) == "Choisir..."){echo "selected";}else{echo "";}?> value="Choisir...">Choisir...</option>
                                <option <?php if (isset($_SESSION['batiment".$j."proprietaire']) && ($_SESSION['batiment".$j."proprietaire']) == "proprietaire"){echo "selected";}else{echo "";}?> value="proprietaire">Propriétaire</option> 
                                <option <?php if (isset($_SESSION['batiment".$j."proprietaire']) && ($_SESSION['batiment".$j."proprietaire']) == "locataire"){echo "selected";}else{echo "";}?> value="locataire">Locataire</option> 
                                </select> <br/>

    <br/><label for=batiment<?php echo $j;?>utilisation> Utilisation principale : </label>
                    
        <input type="text" class="form-control" placeholder="Ex: Siège Social" name="batiment<?php echo $j;?>utilisation" value="<?php echo isset($_SESSION['batiment".$j."utilisation']) ? $_SESSION['batiment".$j."utilisation'] : '' ?>">

        <div class="row">
                <div class="col">    
                    <label for=batiment<?php echo $j;?>ville> Ville du bâtiment: </label>
                    <input type="text" class="form-control" name="batiment<?php echo $j;?>ville" placeholder="Ville" value="<?php echo isset($_SESSION['batiment".$j."ville']) ? $_SESSION['batiment".$j."ville'] : '' ?>">
                </div>

                <div class="col">
                    <label for=batiment<?php echo $j;?>cp> Code postal du bâtiment: </label>
                    <input type="text" class="form-control" name="batiment<?php echo $j;?>cp" placeholder="A1B 2C3" value="<?php echo isset($_SESSION['batiment".$j."cp']) ? $_SESSION['batiment".$j."cp'] : '' ?>">
                </div>
        </div>

        <div class="row">
            <div class="col"> 
                <label class="form-check-label">Connaissez-vous la superficie du bâtiment ?</label>
                <select class="form-control" id="batiment<?php echo $j;?>connaitsup" name="batiment<?php echo $j;?>connaitsup" onchange="changebatiment<?php echo $j;?>connaitsup();"> 
                    <option <?php if (isset($_SESSION['batiment".$j."connaitsup']) && ($_SESSION['batiment".$j."connaitsup']) == "Choisir..."){echo "selected";}else{echo "";}?> value="Choisir...">Choisir...</option>
                    <option <?php if (isset($_SESSION['batiment".$j."connaitsup']) && ($_SESSION['batiment".$j."connaitsup']) == "non"){echo "selected";}else{echo "";}?> value="non">Non</option> 
                    <option <?php if (isset($_SESSION['batiment".$j."connaitsup']) && ($_SESSION['batiment".$j."connaitsup']) == "oui"){echo "selected";}else{echo "";}?> value="oui">Oui</option>                        
                </select>
                      
            </div>
            <div class="col">
                <div id="dbatiment<?php echo $j;?>superficie">     
                    <label class="form-check-label" for=batiment<?php echo $j;?>superficie> Quel est la superficie de votre bâtiment ? </label>
                    <input type="number" class="form-control" name="batiment<?php echo $j;?>superficie" placeholder="Superficie en m²" value="<?php echo isset($_SESSION['batiment<?php echo $j;?>superficie']) ? $_SESSION['batiment<?php echo $j;?>superficie'] : '' ?>">
                                         
                </div>
            </div>
        </div>

    <h4>Chauffage</h4>

        <div class="row">
            <div class="col">    
                <label for="batiment<?php echo $j;?>typechauffage">Quel type de chauffage utilisez vous ?</label>
                    <select id="batiment<?php echo $j;?>typechauffage" class="form-control" onchange="changebatiment<?php echo $j;?>typechauffage();" name="batiment<?php echo $j;?>typechauffage">
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Choisir..."){echo "selected";}else{echo "";}?> value="Choisir...">Choisir...</option>               
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Électricité"){echo "selected";}else{echo "";}?> value="Électricité">Électricité</option>
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Gaz naturel"){echo "selected";}else{echo "";}?> value="Gaz naturel">Gaz naturel</option>
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Propane"){echo "selected";}else{echo "";}?> value="Propane">Propane</option>
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Mazout"){echo "selected";}else{echo "";}?> value="Mazout">Mazout</option>
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Biomasse"){echo "selected";}else{echo "";}?> value="Biomasse">Biomasse (bois ou granules)</option>
                        <option <?php if (isset($_SESSION['batiment".$j."typechauffage']) && ($_SESSION['batiment".$j."typechauffage']) == "Autre"){echo "selected";}else{echo "";}?> value="Autre">Autre</option>
                    </select>
            </div>

        <div id="dbatiment<?php echo $j;?>autrechauffage" >
                <div class="col">
                
                    <label for="batiment<?php echo $j;?>autrechauffage">Quel combustible utilisez-vous ?</label>
                    <select class="form-control" name="batiment<?php echo $j;?>autrechauffage" id="batiment<?php echo $j;?>autrechauffage">
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

    function changebatiment<?php echo $j;?>typechauffage(){ 
        if (document.getElementById("batiment<?php echo $j;?>typechauffage").value == "Autre") 
            {document.getElementById("dbatiment<?php echo $j;?>autrechauffage").style.display = "block"} 
        else {document.getElementById("dbatiment<?php echo $j;?>autrechauffage").style.display = "none"} }

    window.onload = changebatiment<?php echo $j;?>typechauffage();

    function changebatiment<?php echo $j;?>connaitsup(){ 
        if (document.getElementById("batiment<?php echo $j;?>connaitsup").value == "oui") 
            {document.getElementById("dbatiment<?php echo $j;?>superficie").style.display = "block"} 
        else {document.getElementById("dbatiment<?php echo $j;?>superficie").style.display = "none"} }

    window.onload = changebatiment<?php echo $j;?>connaitsup();
    </script>

    <h4>Climatisation</h4>
    <h4>Vapeur</h4>
    <h4>Électricité</h4>
</div>
<script>

function changenombrebatiment(){ 
    if (document.getElementById("plusieursbatiments").value == "oui") 
        {document.getElementById("combienbatiments").style.display = "block"} 
    else 
    {
        document.getElementById("combienbatiments").style.display = "none"
        document.getElementById("nbbatiment").value == 1
    } }

window.onload = changenombrebatiment();

function changenombrebatimentsections(){ 
    if (document.getElementById("combienbatiments").value > 1) 
        {document.getElementById("batiment<?php echo $j;?>").style.display = "block"} 
    else 
    {
        document.getElementById("batiment<?php echo $j;?>").style.display = "none"
    } }

// window.onload = changenombrebatimentsections();
</script>


<?php
}
?>

<div id="resultatsbatiments">
    <h2 class="heading">Résultats pour la catégorie batiment</h2>
    <h3 class="fs-subtitle">Émissions liées au bâtiments</h3>
<p>

XX tonnes équivalent CO2 <br/>
Electricité : XX tonnes équivalent CO2 (dont XX% pour le chauffage soit XX tonnes équivalent CO2)<br/>
Climatisation : 0,01 tonnes équivalent CO2<br/>
</p>

</div>
                </div>                                 
                <div class="button">
                <input type="button" name="previous" value="Précédent" class="previous action-button" onClick="document.location='presentation.php'"/>        
                <a href="#" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-record"></span> Default text here</a>
                <input type="submit" name="submit" class="submit action-button" value="Suivant"/> 
                </div>

    </fieldset>

    </form> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<?php 
require_once('footer.php'); 
?>