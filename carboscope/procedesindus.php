<?php 

require_once('init.inc.php'); 
$page = 'Présentation';
require_once('header.inc.php'); 

?>


    <form name="myform" class="msform" action="resultats.php" method="post" enctype="multipart/form-data">

    <!-- progressbar -->
    <ul id="progressbar">
    <li class="active"><a href="presentation.php" onclick="document.myform.submit();">Présentation</a></li>
    <li class="active"><a href="batiment.php" onclick="document.myform.submit();">Bâtiment</a></li>
    <li class="active"><a href="transport.php" onclick="document.myform.submit();">Transports</a></li>
    <li class="active"><a href="procedesindus.php" onclick="document.myform.submit();">Fabrication</a></li>
    <li><a href="resultats.php" onclick="document.myform.submit();">Resultats</a></li>
  </ul>
 
    
   
    <fieldset>
        <h2 class="fs-title">Processus de Fabrication Industrielle</h2>
        
        <?php
    
    $resultat = $pdo -> query("SELECT * FROM coefficients WHERE categorie = 'gaz'");
    $tableau_gaz = $resultat -> fetchAll(PDO::FETCH_ASSOC);
    extract($tableau_gaz);

    $resultat = $pdo -> query("SELECT * FROM coefficients WHERE categorie = 'Halocarbures de Kyoto'");
    $tableau_kyoto = $resultat -> fetchAll(PDO::FETCH_ASSOC);
    extract($tableau_kyoto);

    $resultat = $pdo -> query("SELECT * FROM coefficients WHERE categorie = 'Gaz hors Kyoto'");
    $tableau_horskyoto = $resultat -> fetchAll(PDO::FETCH_ASSOC);
    extract($tableau_horskyoto);
    ?>


       
       <label >Quel gaz ?</label><br />
       <input type="number" name="gazquantity" placeholder="Quantité de gaz" value="<?php echo isset($_SESSION['gazquantity']) ? $_SESSION['gazquantity'] : '0' ?>"> 
       
       <select name="gaz[]">
       <option>Choisir...</option>
       <?php
       foreach ($tableau_gaz as $key => $value) {
                        echo '<option>';
                        extract($value);
                        echo $element;
                        echo '</option>';
                    } 


        ?>
        </select><br/><br/>
        <label >Quel Halocarbures de Kyoto ?</label><br />
        <input type="number" name="kyotoquantity" placeholder="Quantité de gaz" value="<?php echo isset($_SESSION['kyotoquantity']) ? $_SESSION['kyotoquantity'] : '0' ?>"> 
        <select name="Halocarbures de Kyoto[]">
        <option>Choisir...</option>
       <?php
       foreach ($tableau_kyoto as $key => $value) {
                        echo '<option>';
                        extract($value);
                        echo $element;
                        echo '</option>';
                    } 
        ?>
        </select><br/><br/>
        <label >Quel Gaz Hors Kyoto ?</label><br />
        <input type="number" name="hkyotoquantity" placeholder="Quantité de gaz" value="<?php echo isset($_SESSION['hkyotoquantity']) ? $_SESSION['hkyotoquantity'] : '0' ?>"> 
        <select name="Gaz hors Kyoto[]">
        <option>Choisir...</option>
       <?php
       foreach ($tableau_horskyoto as $key => $value) {
                        echo '<option>';
                        extract($value);
                        echo $element;
                        echo '</option>';
                    } 
        ?>
        </select>
        </p><br/><br/>

    
    <div class="button">
        <input type="button" name="previous" value="Précédent" class="previous action-button" onClick="document.location='transport.php'"/>        
         <input type="submit" name="submit" class="submit action-button" value="Suivent"/> 
                </div>


    </fieldset>

    </form> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

<?php 
require_once('footer.php'); 
?>