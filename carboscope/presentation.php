<!-- header -->
<?php 

 require_once('init.inc.php'); 
 $page = 'Présentation';
require_once('header.inc.php'); 

?>


    <form class="msform" action="batiment.php" method="post" name="myform" id="myform">
    
    <!-- progressbar -->
  <ul id="progressbar">
    <li class="active"><a href="presentation.php">Présentation</a></li>
    <li><a href="batiment.php">Bâtiment</a></li>
    <li><a href="transport.php">Transports</a></li>
    <li><a href="procedesindus.php" >Fabrication</a></li>
    <li><a href="resultats.php">Resultats</a></li>
  </ul>
 
     <!-- fieldsets -->
     <fieldset>
        

    <!-- debug et initialisation -->
        <?php 
        // echo "SESSION :";
        //  debug($_SESSION); echo "POST :";
        //  debug($_POST); 
         //$_POST = array();
          //$_SESSION = array();
          //session_destroy(); 
        
        ?>

        <!-- formulaire présentation -->

        <h2 class="heading">Présentation</h2>
        <h3 class="fs-subtitle">Votre identité</h3>



        <div class="row">
            <div class="col">    
        <label for=prenom>Prénom</label>
        <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="<?php echo isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '' ?>">
            </div>
            <div class="col">
            <label for=nom>Nom</label>
            <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?php echo isset($_SESSION['nom']) ? $_SESSION['nom'] : '' ?>">
            </div>
        </div>

        <div class="row">
            <div class="col">    
        <label for=courriel>Courriel</label>
        <input type="email" class="form-control" placeholder="exemple@domaine.com" name="courriel" value="<?php echo isset($_SESSION['courriel']) ? $_SESSION['courriel'] : '' ?>">
            </div>
            <div class="col">
            <label for=phone>Téléphone</label>
            <input type="phone" class="form-control" placeholder="123-456-7890" name="phone" value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="position">Position dans l'entreprise</label>
            <input type="text" class="form-control" id="position" placeholder="Poste" name="position" value="<?php echo isset($_SESSION['position']) ? $_SESSION['position'] : '' ?>">
        </div>

        <h4> Adresse de l'Entreprise </h4>

            <div class="form-group">
                <label for="addresse">Addresse</label>
                <input type="text" class="form-control" id="addresse" placeholder="1234 Rue Main" name="adresse" value="<?php echo isset($_SESSION['adresse']) ? $_SESSION['adresse'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="addresse2">Addresse 2</label>
                <input type="text" class="form-control" id="addresse2" placeholder="Appartement, studio, ou étage" name="adresse2" value="<?php echo isset($_SESSION['adresse2']) ? $_SESSION['adresse2'] : '' ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="<?php echo isset($_SESSION['ville']) ? $_SESSION['ville'] : '' ?>">
                </div>
                <div class="form-group col-md-4">
                <label for="province">Province</label>
                <select id="etat" class="form-control" name="province" value="<?php echo isset($_SESSION['province']) ? $_SESSION['province'] : '' ?>">
                    <option>Alberta (AB)</option>               
                    <option>Colombie-Britannique (BC)</option>
                    <option>Île-du-Prince-Edouard (PE)</option>
                    <option>Manitoba (MB)</option>
                    <option>Nouveau-Brunswick (NB)</option>
                    <option>Nouvelle-Écosse (NS)</option>
                    <option>Ontario (ON)</option>
                    <option selected>Québec (QC)</option>
                    <option>Saskatchewan (SK)</option>
                    <option>Terre-Neuve-et-Labrador (NL)</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="codepostal">Code Postal</label>
                <input type="text" class="form-control" id="codepostal" placeholder="A1B 2C3" name="codepostal" value="<?php echo isset($_SESSION['codepostal']) ? $_SESSION['codepostal'] : '' ?>">
                </div>
            </div>
            
            
            <h3> Informations sur l'entreprise </h3>

            <div class="form-group">
                <label for="companyname">Nom de l'entreprise</label>
                <input type="text" class="form-control" id="companyname" placeholder="Carboscope" name="companyname" value="<?php echo isset($_SESSION['companyname']) ? $_SESSION['companyname'] : '' ?>">
            </div>
       

        
        <div class="row">
            <div class="col">    
        <label for=companyca>Chiffre d'affaire de l'entreprise :</label>
        <input type="number" class="form-control" name="companyca" placeholder="Chiffre d'affaire ($CA)" value="<?php echo isset($_SESSION['companyca']) ? $_SESSION['companyca'] : '' ?>">
            </div>
            <div class="col">
            <label for=companybenefices>Bénéfices Net :</label>
            <input type="number" class="form-control" placeholder="Bénéfices net ($CA)" name="companybenefices" value="<?php echo isset($_SESSION['companybenefices']) ? $_SESSION['companybenefices'] : '' ?>">
            </div>
        </div>

        <div class="row">
            <div class="col">    
        <label for=equite>Équité :</label>
        <input type="number" class="form-control" name="equite" placeholder="Équité ($CA)" value="<?php echo isset($_SESSION['equite']) ? $_SESSION['equite'] : '' ?>">
            </div>
            <div class="col">
            <label for=dette>Dette :</label>
            <input type="number" class="form-control" placeholder="Dette ($CA)" name="dette" value="<?php echo isset($_SESSION['dette']) ? $_SESSION['dette'] : '' ?>">
            </div>
        </div>

        <div class="row">
            <div class="col">    
        <label for=companyemployes>Nombre d'employés :</label>
            <input type="number" class="form-control" placeholder="Nombre d'employés" name="companyemployes" value="<?php echo isset($_SESSION['companyemployes']) ? $_SESSION['companyemployes'] : '   ' ?>">
            </div>
            <div class="col">


            <ul class="notes-echelle">
                <p>Évaluez le niveau de sensibilisation de votre entreprise :</p>
            <li>
                    <label for="note01" title="Note&nbsp;: 1 sur 5">1</label>
                    <input type="radio" name="notesA" id="note01" value="1" />
                    </li>
                <li>
                    <label for="note02" title="Note&nbsp;: 2 sur 5">2</label>
                    <input type="radio" name="notesA" id="note02" value="2" />
                    </li>
                <li>
                    <label for="note03" title="Note&nbsp;: 3 sur 5">3</label>
                    <input type="radio" name="notesA" id="note03" value="3" />
                    </li>
                <li>
                    <label for="note04" title="Note&nbsp;: 4 sur 5">4</label>
                    <input type="radio" name="notesA" id="note04" value="4" />
                    </li>
                <li>
                    <label for="note05" title="Note&nbsp;: 5 sur 5">5</label>
                    <input type="radio" name="notesA" id="note05" value="5" />
                    </li>
                
            </ul>

                <!-- <img src="leaf.png" width="20" height="20"> -->
           
            </div>
        </div>
          
<?php
require_once('secteurs.php'); 
?>


      <div class="button">
         <input type="submit" name="submit-1" class="submit action-button" value="Suivant"/>
        </div>  

    </fieldset>

    </form> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

<script>
window.onload = changesecteur();
</script>
<?php 
require_once('footer.php'); 
?>