<?php 

require_once('init.inc.php'); 
$page = 'Présentation';
require_once('header.inc.php'); 

?>


    <form name="myform" class="msform" action="procedesindus.php" method="post" enctype="multipart/form-data">

    <!-- progressbar -->
    <ul id="progressbar">
    <li class="active"><a href="presentation.php" onclick="document.myform.submit();">Présentation</a></li>
    <li class="active"><a href="batiment.php" onclick="document.myform.submit();">Bâtiment</a></li>
    <li class="active"><a href="transport.php" onclick="document.myform.submit();">Transports</a></li>
    <li><a href="procedesindus.php" onclick="document.myform.submit();">Fabrication</a></li>
    <li><a href="resultats.php" onclick="document.myform.submit();">Resultats</a></li>
  </ul>
 


    <fieldset>  

            <div id="transports">
                <br/>
                <h2 class="heading">Transport</h2>
                <h3 class="fs-subtitle">Cette section concerne les véhicules appartenant à la compagnie (propriétaire et location-acquisition)</h3>
              
        <h3>Matériaux</h3>

                                
        <p>Transportez-vous des matières premières (intrants) ? </p>
        <select id="liste_id" name="liste" onchange="changemateriaux();"> 
        <option>Choisir...</option>
            <option value="non">Non</option> 
            <option value="oui">Oui</option> 
        </select> 

            <div id="materiaux">

                    <label for="transportmateriaux">Quel type de transport ?</label><br />
                    <select name="transportmateriaux" id="transportmateriaux" onchange="changeaerien();">
                    <option>Choisir...</option>
                        <optgroup label="Entrants">
                            <option value="entrantsroutier">Routier</option>
                            <option value="entrantsaerien">Aerien</option>
                            <option value="entrantsferoviere">Ferovière</option>
                            <option value="entrantsmaritime">Maritime et Fluviale</option>
                        </optgroup>
                        <optgroup label="Internes">
                            <option value="internesroutier">Routier</option>
                            <option value="internesaerien">Aerien</option>
                            <option value="internesferoviere">Ferovière</option>
                            <option value="internesmaritime">Maritime et Fluviale</option>
                        </optgroup>
                        <optgroup label="Sortants">
                            <option value="sortantsroutier">Routier</option>
                            <option value="sortantsaerien">Aerien</option>
                            <option value="sortantsferoviere">Ferovière</option>
                            <option value="sortantsmaritime">Maritime et Fluviale</option>
                        </optgroup>
                    </select>
        
                <div id="aerien">
                    <label for="aerien">Quel est le type de transport aérien ?</label>
                    <select name="aerien" >
                    <option>Choisir...</option>
                        <option value="domestique">Domestique</option>
                        <option value="courtcourrier">Court-Courrier</option>
                        <option value="longcourrier">Long Courrier</option>
                    </select>
                </div>
                        <br/><label for="typedonneemateriaux">Quelles données avez-vous  ?</label><br />
                        <select name="typedonneemateriaux" id="typedonneemateriaux" onchange="changetypedonneemateriaux();">
                                <option>Choisir...</option>
                                <option value="consofuelmateriaux">Consommation de carburant (en L)</option>
                                <option value="vehiculedistancemateriaux">Vehicule.distance (km)</option>
                                <option value="poidsdistancemateriaux">Poids.distance (tonne.km)</option>
                        </select>

                <br/><br/>
                <label for"consofuelmateriaux" id="consofuelmateriaux"> Consommation de carburant (en L) : 
                <input type="number" name="consofuelmateriaux" ></label>
                <label for"vehiculedistancemateriaux" id="vehiculedistancemateriaux"> Nombre de kilomètres : 
                <input type="number" name="vehiculedistancemateriaux"></label>
                <label for"poidsdistancemateriaux" id="poidsdistancemateriaux"> Quantité de Tonnes.kilomètres : 
                <input type="number" name="poidsdistancemateriaux"></label>
            
            </div>


                <br/><br/>
                <h3>Produits</h3>

                <p>Transportez-vous des produits ? </p>
        <select id="liste_id2" name="liste2" onchange="changeproduits();"> 
            <option value="non">Non</option> 
            <option value="oui">Oui</option> 
        </select> 

            <div id="produits">
                    
                    <label for="transportproduits">Quel type de transport ?</label><br />
                    <select name="transportproduits" id="transportproduits" onchange="changeaerien2();">
                    <option>Choisir...</option>
                        <optgroup label="Entrants">
                            <option value="entrantsroutier">Routier</option>
                            <option value="entrantsaerien">Aerien</option>
                            <option value="entrantsferoviere">Ferovière</option>
                            <option value="entrantsmaritime">Maritime et Fluviale</option>
                        </optgroup>
                        <optgroup label="Internes">
                            <option value="internesroutier">Routier</option>
                            <option value="internesaerien">Aerien</option>
                            <option value="internesferoviere">Ferovière</option>
                            <option value="internesmaritime">Maritime et Fluviale</option>
                        </optgroup>
                        <optgroup label="Sortants">
                            <option value="sortantsroutier">Routier</option>
                            <option value="sortantsaerien">Aerien</option>
                            <option value="sortantsferoviere">Ferovière</option>
                            <option value="sortantsmaritime">Maritime et Fluviale</option>
                        </optgroup>
                    </select>
        
                <div id="aerien2">
                    <label for="aerien2">Quel est le type de transport aérien ?</label>
                    <select name="aerien2" >
                    <option>Choisir...</option>
                        <option value="domestique">Domestique</option>
                        <option value="courtcourrier">Court-Courrier</option>
                        <option value="longcourrier">Long Courrier</option>
                    </select>
                </div>
                    
                <br/><label for="typedonneeproduits">Quelles données avez-vous  ?</label><br />
                        <select name="typedonneeproduits" id="typedonneeproduits" onchange="changetypedonneeproduits();">
                                <option>Choisir...</option>
                                <option value="consofuelproduits">Consommation de carburant (en L)</option>
                                <option value="vehiculedistanceproduits">Vehicule.distance (km)</option>
                                <option value="poidsdistanceproduits">Poids.distance (tonne.km)</option>
                        </select>

                <br/><br/>
                <label for"consofuelproduits" id="consofuelproduits"> Consommation de carburant (en L) : 
                <input type="number" name="consofuelproduits" ></label>
                <label for"vehiculedistanceproduits" id="vehiculedistanceproduits"> Nombre de kilomètres : 
                <input type="number" name="vehiculedistanceproduits"></label>
                <label for"poidsdistanceproduits" id="poidsdistanceproduits"> Quantité de Tonnes.kilomètres : 
                <input type="number" name="poidsdistanceproduits"></label>
                
            </div>

                <br/><br/>  
                <h3>Déchets</h3>

                                <p>Transportez-vous des déchets ? </p>
        <select id="liste_id3" name="liste3" onchange="changedechets();"> 
        <option>Choisir...</option>
            <option value="non">Non</option> 
            <option value="oui">Oui</option> 
        </select> 

            <div id="dechets">
                    
                    <label for="transportdechets">Quel type de transport ?</label><br />
                    <select name="transportdechets" id="transportdechets" onchange="changeaerien3();">
                    <option>Choisir...</option>
                        <optgroup label="Entrants">
                            <option value="entrantsroutier">Routier</option>
                            <option value="entrantsaerien">Aerien</option>
                            <option value="entrantsferoviere">Ferovière</option>
                            <option value="entrantsmaritime">Maritime et Fluviale</option>
                        </optgroup>
                        <optgroup label="Internes">
                            <option value="internesroutier">Routier</option>
                            <option value="internesaerien">Aerien</option>
                            <option value="internesferoviere">Ferovière</option>
                            <option value="internesmaritime">Maritime et Fluviale</option>
                        </optgroup>
                        <optgroup label="Sortants">
                            <option value="sortantsroutier">Routier</option>
                            <option value="sortantsaerien">Aerien</option>
                            <option value="sortantsferoviere">Ferovière</option>
                            <option value="sortantsmaritime">Maritime et Fluviale</option>
                        </optgroup>
                    </select>
        
                <div id="aerien3">
                    <label for="aerien3">Quel est le type de transport aérien ?</label>
                    <select name="aerien3" >
                    <option>Choisir...</option>
                        <option value="domestique">Domestique</option>
                        <option value="courtcourrier">Court-Courrier</option>
                        <option value="longcourrier">Long Courrier</option>
                    </select>
                </div>

                        <br/><label for="typedonneedechets">Quelles données avez-vous  ?</label><br />
                        <select name="typedonneedechets" id="typedonneedechets" onchange="changetypedonneedechets();">
                                <option>Choisir...</option>
                                <option value="consofueldechets">Consommation de carburant (en L)</option>
                                <option value="vehiculedistancedechets">Vehicule.distance (km)</option>
                                <option value="poidsdistancedechets">Poids.distance (tonne.km)</option>
                        </select>

                        <br/><br/>
                        <label for"consofueldechets" id="consofueldechets"> Consommation de carburant (en L) : 
                        <input type="number" name="consofueldechets" ></label>
                        <label for"vehiculedistancedechets" id="vehiculedistancedechets"> Nombre de kilomètres : 
                        <input type="number" name="vehiculedistancedechets"></label>
                        <label for"poidsdistancedechets" id="poidsdistancedechets"> Quantité de Tonnes.kilomètres : 
                        <input type="number" name="poidsdistancedechets"></label>

                 </div><br/>

                <br/><h3>Employés</h3>  <br/>
                               <p>Pour calculez votre total de déplacement de vos employés vous pouvez utiliser le fichier :</p>
                               <a href="fichier_aide_transports_carboscope.xlsx" download="fichier_aide_transports_carboscope">Télécharger le fichier d'aide EXCEL</a>
                               <br/><label for"consofuelemployes" id="consofuelemployes"> Consommation de carburant (en L) : 
                        <input type="number" name="consofuelemployes" ></label>
                        <label for"vehiculedistanceemployes" id="vehiculedistanceemployes"> Nombre de kilomètres : 
                        <input type="number" name="vehiculedistanceemployes"></label>
            </div>
            <div class="button">
            <input type="button" name="previous" value="Précédent" class="previous action-button" onClick="document.location='batiment.php'"/>        
            <input type="submit" name="submit" class="submit action-button" value="Suivant"/> 
            </div>
    </fieldset>


    </form> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="/carboscope/script.js"></script>

<?php 
require_once('footer.php'); 
?>