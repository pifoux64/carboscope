<!-- isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '' -->
<div class="row">
            <div class="col">    
        <label for="secteur">Secteur de l'entreprise</label>
                <select id="secteur" class="form-control" onchange="changesecteur();" name="secteur">
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Choisir..."){echo "selected";}else{echo "";}?> value="Choisir...">Choisir...</option>               
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Agriculture, foresterie, pêche et chasse"){echo "selected";}else{echo "";}?> value="Agriculture, foresterie, pêche et chasse">Agriculture, foresterie, pêche et chasse</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Extraction minière, exploitation en carrière, et extraction de pétrole et de gaz"){echo "selected";}else{echo "";}?> value="Extraction minière, exploitation en carrière, et extraction de pétrole et de gaz">Extraction minière, exploitation en carrière, et extraction de pétrole et de gaz</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Services publics"){echo "selected";}else{echo "";}?> value="Services publics">Services publics</option> 
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Construction"){echo "selected";}else{echo "";}?> value="Construction">Construction</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Fabrication"){echo "selected";}else{echo "";}?> value="Fabrication">Fabrication</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Commerce de gros"){echo "selected";}else{echo "";}?> value="Commerce de gros">Commerce de gros</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Commerce de détail"){echo "selected";}else{echo "";}?> value="Commerce de détail">Commerce de détail</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Transport et entreposage"){echo "selected";}else{echo "";}?> value="Transport et entreposage">Transport et entreposage</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Industrie de l'information et industrie culturelle"){echo "selected";}else{echo "";}?> value="Industrie de l'information et industrie culturelle">Industrie de l'information et industrie culturelle</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Finance et assurances"){echo "selected";}else{echo "";}?> value="Finance et assurances">Finance et assurances</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Services immobiliers et services de location à bail"){echo "selected";}else{echo "";}?> value="Services immobiliers et services de location à bail">Services immobiliers et services de location à bail</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Services professionnels, scientifiques et techniques"){echo "selected";}else{echo "";}?> value="Services professionnels, scientifiques et techniques">Services professionnels, scientifiques et techniques</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Gestion de sociétés et d'entreprises"){echo "selected";}else{echo "";}?> value="Gestion de sociétés et d'entreprises">Gestion de sociétés et d'entreprises</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Services administratifs, services de soutien, services de gestion des déchets et services d'assainissement"){echo "selected";}else{echo "";}?> value="Services administratifs, services de soutien, services de gestion des déchets et services d'assainissement">Services administratifs, services de soutien, services de gestion des déchets et services d'assainissement</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Services d'enseignement"){echo "selected";}else{echo "";}?> value="Services d'enseignement">Services d'enseignement</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Soins de santé et assistance sociale"){echo "selected";}else{echo "";}?> value="Soins de santé et assistance sociale">Soins de santé et assistance sociale</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Arts, spectacles et loisirs"){echo "selected";}else{echo "";}?> value="Arts, spectacles et loisirs">Arts, spectacles et loisirs</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Services d'hébergement et de restauration"){echo "selected";}else{echo "";}?> value="Services d'hébergement et de restauration">Services d'hébergement et de restauration</option>   
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Autres services (sauf les administrations publiques)"){echo "selected";}else{echo "";}?> value="Autres services (sauf les administrations publiques)">Autres services (sauf les administrations publiques)</option>
                    <option <?php if (isset($_SESSION['secteur']) && ($_SESSION['secteur']) == "Administrations publiques"){echo "selected";}else{echo "";}?> value="Administrations publiques">Administrations publiques</option>
                </select>
            </div>

    <div id="dsoussecteurs" >
            <div class="col" id="dsoussecteur11">
            
                <label for="soussecteur11">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur11" id="soussecteur11">
                
                    <option <?php if (isset($_SESSION['soussecteur11']) && ($_SESSION['soussecteur11']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>               
                    <option <?php if (isset($_SESSION['soussecteur11']) && ($_SESSION['soussecteur11']) == "Cultures agricoles"){echo "selected";}?> value="Cultures agricoles">Cultures agricoles</option>
                    <option <?php if (isset($_SESSION['soussecteur11']) && ($_SESSION['soussecteur11']) == "Élevage et aquaculture"){echo "selected";}?> value="Élevage et aquaculture">Élevage et aquaculture</option>
                    <option <?php if (isset($_SESSION['soussecteur11']) && ($_SESSION['soussecteur11']) == "Foresterie et exploitation forestière"){echo "selected";}?> value="Foresterie et exploitation forestière">Foresterie et exploitation forestière</option> 
                    <option <?php if (isset($_SESSION['soussecteur11']) && ($_SESSION['soussecteur11']) == "Pêche, chasse et piégeage"){echo "selected";}?> value="Pêche, chasse et piégeage">Pêche, chasse et piégeage</option>
                    <option <?php if (isset($_SESSION['soussecteur11']) && ($_SESSION['soussecteur11']) == "Activités de soutien à l'agriculture et à la foresterie"){echo "selected";}?> value="Activités de soutien à l'agriculture et à la foresterie">Activités de soutien à l'agriculture et à la foresterie</option>                    
                </select>
            </div>

            <div class="col" id="dsoussecteur21">
                            <label for="soussecteur21">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur21" id="soussecteur21">

                    <option <?php if (isset($_SESSION['soussecteur21']) && ($_SESSION['soussecteur21']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>               
                    <option <?php if (isset($_SESSION['soussecteur21']) && ($_SESSION['soussecteur21']) == "Extraction de pétrole et de gaz"){echo "selected";}?> value="Extraction de pétrole et de gaz">Extraction de pétrole et de gaz</option>
                    <option <?php if (isset($_SESSION['soussecteur21']) && ($_SESSION['soussecteur21']) == "Extraction minière et exploitation en carrière (sauf l'extraction de pétrole et de gaz)"){echo "selected";}?> value="Extraction minière et exploitation en carrière (sauf l'extraction de pétrole et de gaz)">Extraction minière et exploitation en carrière (sauf l'extraction de pétrole et de gaz)</option>
                    <option <?php if (isset($_SESSION['soussecteur21']) && ($_SESSION['soussecteur21']) == "Activités de soutien à l'extraction minière, pétrolière et gazière"){echo "selected";}?> value="Activités de soutien à l'extraction minière, pétrolière et gazière">Activités de soutien à l'extraction minière, pétrolière et gazière</option>       
                </select>
            </div>

            <div class="col" id="dsoussecteur22">
            <label for="soussecteur22">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur22" id="soussecteur22">
                <option <?php if (isset($_SESSION['soussecteur22']) && ($_SESSION['soussecteur22']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>               
                <option <?php if (isset($_SESSION['soussecteur22']) && ($_SESSION['soussecteur22']) == "Services publics"){echo "selected";}?> value="Services publics">Services publics</option>             
                </select>
            </div>

            <div class="col" id="dsoussecteur23">
            <label for="soussecteur23">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur23" id="soussecteur23">
                <option <?php if (isset($_SESSION['soussecteur23']) && ($_SESSION['soussecteur23']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur23']) && ($_SESSION['soussecteur23']) == "Construction de bâtiments"){echo "selected";}?> value="Construction de bâtiments">Construction de bâtiments</option>
                <option <?php if (isset($_SESSION['soussecteur23']) && ($_SESSION['soussecteur23']) == "Travaux de génie civil"){echo "selected";}?> value="Travaux de génie civil">Travaux de génie civil</option>
                <option <?php if (isset($_SESSION['soussecteur23']) && ($_SESSION['soussecteur23']) == "Entrepreneurs spécialisés"){echo "selected";}?> value="Entrepreneurs spécialisés">Entrepreneurs spécialisés</option>                  
                </select>
            </div>

            <div class="col" id="dsoussecteur31">
            <label for="soussecteur31">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur31" id="soussecteur31">
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication d'aliments"){echo "selected";}?> value="Fabrication d'aliments">Fabrication d'aliments</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de boissons et de produits du tabac"){echo "selected";}?> value="Fabrication de boissons et de produits du tabac">Fabrication de boissons et de produits du tabac</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Usines de textiles"){echo "selected";}?> value="Usines de textiles">Usines de textiles</option>  
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Usines de produits textiles"){echo "selected";}?> value="Usines de produits textiles">Usines de produits textiles</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de vêtements"){echo "selected";}?> value="Fabrication de vêtements">Fabrication de vêtements</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits en cuir et de produits analogues"){echo "selected";}?> value="Fabrication de produits en cuir et de produits analogues">Fabrication de produits en cuir et de produits analogues</option>                  
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits en bois"){echo "selected";}?> value="Fabrication de produits en bois">Fabrication de produits en bois</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication du papier"){echo "selected";}?> value="Fabrication du papier">Fabrication du papier</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Impression et activités connexes de soutien"){echo "selected";}?> value="Impression et activités connexes de soutien">Impression et activités connexes de soutien</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits du pétrole et du charbon"){echo "selected";}?> value="Fabrication de produits du pétrole et du charbon">Fabrication de produits du pétrole et du charbon</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits chimiques"){echo "selected";}?> value="Fabrication de produits chimiques">Fabrication de produits chimiques</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits en plastique et en caoutchouc"){echo "selected";}?> value="Fabrication de produits en plastique et en caoutchouc">Fabrication de produits en plastique et en caoutchouc</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits minéraux non métallique"){echo "selected";}?> value="Fabrication de produits minéraux non métallique">Fabrication de produits minéraux non métallique</option>        
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Première transformation des métaux"){echo "selected";}?> value="Première transformation des métaux">Première transformation des métaux</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits métalliques"){echo "selected";}?> value="Fabrication de produits métalliques">Fabrication de produits métalliques</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de machines"){echo "selected";}?> value="Fabrication de machines">Fabrication de machines</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de produits informatiques et électroniques"){echo "selected";}?> value="Fabrication de produits informatiques et électroniques">Fabrication de produits informatiques et électroniques</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de matériel, d'appareils et de composants électriques"){echo "selected";}?> value="Fabrication de matériel, d'appareils et de composants électriques">Fabrication de matériel, d'appareils et de composants électriques</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de matériel de transport"){echo "selected";}?> value="Fabrication de matériel de transport">Fabrication de matériel de transport</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Fabrication de meubles et de produits connexes"){echo "selected";}?> value="Fabrication de meubles et de produits connexes">Fabrication de meubles et de produits connexes</option>
                <option <?php if (isset($_SESSION['soussecteur31']) && ($_SESSION['soussecteur31']) == "Activités diverses de fabrication"){echo "selected";}?> value="Activités diverses de fabrication">Activités diverses de fabrication</option>  
            </select>
            </div>
            
            <div class="col" id="dsoussecteur41">
            <label for="soussecteur41">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur41" id="soussecteur41">
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de produits agricoles"){echo "selected";}?> value="Grossistes-marchands de produits agricoles">Grossistes-marchands de produits agricoles</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de pétrole et de produits pétroliers"){echo "selected";}?> value="Grossistes-marchands de pétrole et de produits pétroliers">Grossistes-marchands de pétrole et de produits pétroliers</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de produits alimentaires, de boissons et de tabac"){echo "selected";}?> value="Grossistes-marchands de produits alimentaires, de boissons et de tabac">Grossistes-marchands de produits alimentaires, de boissons et de tabac</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands d'articles personnels et ménagers"){echo "selected";}?> value="Grossistes-marchands d'articles personnels et ménagers">Grossistes-marchands d'articles personnels et ménagers</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de véhicules automobiles, et de pièces et d'accessoires de véhicules automobiles"){echo "selected";}?> value="Grossistes-marchands de véhicules automobiles, et de pièces et d'accessoires de véhicules automobiles">Grossistes-marchands de véhicules automobiles, et de pièces et d'accessoires de véhicules automobiles</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de matériaux et fournitures de construction"){echo "selected";}?> value="Grossistes-marchands de matériaux et fournitures de construction">Grossistes-marchands de matériaux et fournitures de construction</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de machines, de matériel et de fournitures"){echo "selected";}?> value="Grossistes-marchands de machines, de matériel et de fournitures">Grossistes-marchands de machines, de matériel et de fournitures</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Grossistes-marchands de produits divers"){echo "selected";}?> value="Grossistes-marchands de produits divers">Grossistes-marchands de produits divers</option>
                <option <?php if (isset($_SESSION['soussecteur41']) && ($_SESSION['soussecteur41']) == "Commerce électronique de gros entre entreprises, et agents et courtiers"){echo "selected";}?> value="Commerce électronique de gros entre entreprises, et agents et courtiers">Commerce électronique de gros entre entreprises, et agents et courtiers</option>              
                </select>
            </div>

            <div class="col" id="dsoussecteur44">
            <label for="soussecteur44">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur44" id="soussecteur44">
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Concessionnaires de véhicules et de pièces automobiles"){echo "selected";}?> value="Concessionnaires de véhicules et de pièces automobiles">Concessionnaires de véhicules et de pièces automobiles</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins de meubles et d'accessoires de maison"){echo "selected";}?> value="Magasins de meubles et d'accessoires de maison">Magasins de meubles et d'accessoires de maison</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins d'appareils électroniques et ménagers"){echo "selected";}?> value="Magasins d'appareils électroniques et ménagers">Magasins d'appareils électroniques et ménagers</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Marchands de matériaux de construction et de matériel et fournitures de jardinage"){echo "selected";}?> value="Marchands de matériaux de construction et de matériel et fournitures de jardinage">Marchands de matériaux de construction et de matériel et fournitures de jardinage</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins d'alimentation"){echo "selected";}?> value="Magasins d'alimentation">Magasins d'alimentation</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins de produits de santé et de soins personnels"){echo "selected";}?> value="Magasins de produits de santé et de soins personnels">Magasins de produits de santé et de soins personnels</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Stations-service"){echo "selected";}?> value="Stations-service">Stations-service</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins de vêtements et d'accessoires vestimentaires"){echo "selected";}?> value="Magasins de vêtements et d'accessoires vestimentaires">Magasins de vêtements et d'accessoires vestimentaires</option>     
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins d'articles de sport, d'articles de passe-temps, d'articles de musique et de livres"){echo "selected";}?> value="Magasins d'articles de sport, d'articles de passe-temps, d'articles de musique et de livres">Magasins d'articles de sport, d'articles de passe-temps, d'articles de musique et de livres</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins de marchandises diverses"){echo "selected";}?> value="Magasins de marchandises diverses">Magasins de marchandises diverses</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Magasins de détail divers"){echo "selected";}?> value="Magasins de détail divers">Magasins de détail divers</option>
                <option <?php if (isset($_SESSION['soussecteur44']) && ($_SESSION['soussecteur44']) == "Détaillants hors magasin"){echo "selected";}?> value="Détaillants hors magasin">Détaillants hors magasin</option>           
                </select>
            </div>

            <div class="col" id="dsoussecteur48">
            <label for="soussecteur48">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur48" id="soussecteur48">
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport aérien"){echo "selected";}?> value="Transport aérien">Transport aérien</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport ferroviaire"){echo "selected";}?> value="Transport ferroviaire">Transport ferroviaire</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport par eau"){echo "selected";}?> value="Transport par eau">Transport par eau</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport par camion"){echo "selected";}?> value="Transport par camion">Transport par camion</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport en commun et transport terrestre de voyageurs"){echo "selected";}?> value="Transport en commun et transport terrestre de voyageurs">Transport en commun et transport terrestre de voyageurs</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport par pipeline"){echo "selected";}?> value="Transport par pipeline">Transport par pipeline</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Transport de tourisme et d'agrément"){echo "selected";}?> value="Transport de tourisme et d'agrément">Transport de tourisme et d'agrément</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Activités de soutien au transport"){echo "selected";}?> value="Activités de soutien au transport">Activités de soutien au transport</option>  
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Services postaux"){echo "selected";}?> value="Services postaux">Services postaux</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Messageries et services de messagers"){echo "selected";}?> value="Messageries et services de messagers">Messageries et services de messagers</option>
                <option <?php if (isset($_SESSION['soussecteur48']) && ($_SESSION['soussecteur48']) == "Entreposage"){echo "selected";}?> value="Entreposage">Entreposage</option>                    
                </select>
            </div>

            <div class="col" id="dsoussecteur51">
            <label for="soussecteur51">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur51" id="soussecteur51">
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Édition"){echo "selected";}?> value="Édition">Édition</option>
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Industries du film et de l'enregistrement sonore"){echo "selected";}?> value="Industries du film et de l'enregistrement sonore">Industries du film et de l'enregistrement sonore</option>
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Radiotélévision (sauf par Internet)"){echo "selected";}?> value="Radiotélévision (sauf par Internet)">Radiotélévision (sauf par Internet)</option> 
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Télécommunications"){echo "selected";}?> value="Télécommunications">Télécommunications</option> 
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Traitement de données, hébergement de données et services connexes"){echo "selected";}?> value="Traitement de données, hébergement de données et services connexes">Traitement de données, hébergement de données et services connexes</option> 
                <option <?php if (isset($_SESSION['soussecteur51']) && ($_SESSION['soussecteur51']) == "Autres services d'information"){echo "selected";}?> value="Autres services d'information">Autres services d'information</option>                  
                </select>
            </div>

            <div class="col" id="dsoussecteur52">
            <label for="soussecteur52">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur52" id="soussecteur52">
                <option <?php if (isset($_SESSION['soussecteur52']) && ($_SESSION['soussecteur52']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur52']) && ($_SESSION['soussecteur52']) == "Autorités monétaires - banque centrale"){echo "selected";}?> value="Autorités monétaires - banque centrale">Autorités monétaires - banque centrale</option>
                <option <?php if (isset($_SESSION['soussecteur52']) && ($_SESSION['soussecteur52']) == "Intermédiation financière et activités connexes"){echo "selected";}?> value="Intermédiation financière et activités connexes">Intermédiation financière et activités connexes</option>
                <option <?php if (isset($_SESSION['soussecteur52']) && ($_SESSION['soussecteur52']) == "Valeurs mobilières, contrats de marchandises et autres activités d'investissement financier connexes"){echo "selected";}?> value="Valeurs mobilières, contrats de marchandises et autres activités d'investissement financier connexes">Valeurs mobilières, contrats de marchandises et autres activités d'investissement financier connexes</option>   
                <option <?php if (isset($_SESSION['soussecteur52']) && ($_SESSION['soussecteur52']) == "Sociétés d'assurance et activités connexes"){echo "selected";}?> value="Sociétés d'assurance et activités connexes">Sociétés d'assurance et activités connexes</option>   
                <option <?php if (isset($_SESSION['soussecteur52']) && ($_SESSION['soussecteur52']) == "Fonds et autres instruments financiers"){echo "selected";}?> value="Fonds et autres instruments financiers">Fonds et autres instruments financiers</option>   
                               
                </select>
            </div>

            <div class="col" id="dsoussecteur53">
            <label for="soussecteur53">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur53" id="soussecteur53">
                <option <?php if (isset($_SESSION['soussecteur53']) && ($_SESSION['soussecteur53']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>   
                <option <?php if (isset($_SESSION['soussecteur53']) && ($_SESSION['soussecteur53']) == "Services immobiliers"){echo "selected";}?> value="Services immobiliers">Services immobiliers</option>
                <option <?php if (isset($_SESSION['soussecteur53']) && ($_SESSION['soussecteur53']) == "Services de location et de location à bail"){echo "selected";}?> value="Services de location et de location à bail">Services de location et de location à bail</option>
                <option <?php if (isset($_SESSION['soussecteur53']) && ($_SESSION['soussecteur53']) == "Bailleurs de biens incorporels non financiers (sauf les oeuvres protégées par le droit d'auteur)"){echo "selected";}?> value="Bailleurs de biens incorporels non financiers (sauf les oeuvres protégées par le droit d'auteur)">Bailleurs de biens incorporels non financiers (sauf les oeuvres protégées par le droit d'auteur)</option>                  
                </select>
            </div>

            <div class="col" id="dsoussecteur54">
            <label for="soussecteur54">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur54" id="soussecteur54">
                <option <?php if (isset($_SESSION['soussecteur54']) && ($_SESSION['soussecteur54']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur54']) && ($_SESSION['soussecteur54']) == "Services professionnels, scientifiques et techniques"){echo "selected";}?> value="Services professionnels, scientifiques et techniques">Services professionnels, scientifiques et techniques</option>                 
                </select>
            </div>

            <div class="col" id="dsoussecteur55">
            <label for="soussecteur55">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur55" id="soussecteur55">
                <option <?php if (isset($_SESSION['soussecteur55']) && ($_SESSION['soussecteur55']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur55']) && ($_SESSION['soussecteur55']) == "Gestion de sociétés et d'entreprises"){echo "selected";}?> value="Gestion de sociétés et d'entreprises">Gestion de sociétés et d'entreprises</option>    
                </select>
            </div>

            <div class="col" id="dsoussecteur56">
            <label for="soussecteur56">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur56" id="soussecteur56">
                <option <?php if (isset($_SESSION['soussecteur56']) && ($_SESSION['soussecteur56']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur56']) && ($_SESSION['soussecteur56']) == "Services administratifs et services de soutien"){echo "selected";}?> value="Services administratifs et services de soutien">Services administratifs et services de soutien</option>
                <option <?php if (isset($_SESSION['soussecteur56']) && ($_SESSION['soussecteur56']) == "Services de gestion des déchets et d'assainissement"){echo "selected";}?> value="Services de gestion des déchets et d'assainissement">Services de gestion des déchets et d'assainissement</option>           
                </select>
            </div>

            <div class="col" id="dsoussecteur61">
            <label for="soussecteur61">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur61" id="soussecteur61">
                <option <?php if (isset($_SESSION['soussecteur61']) && ($_SESSION['soussecteur61']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur61']) && ($_SESSION['soussecteur61']) == "Services d'enseignement"){echo "selected";}?> value="Services d'enseignement">Services d'enseignement</option>
                </select>
            </div>

            <div class="col" id="dsoussecteur62">
            <label for="soussecteur62">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur62" id="soussecteur62">
                <option <?php if (isset($_SESSION['soussecteur62']) && ($_SESSION['soussecteur62']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur62']) && ($_SESSION['soussecteur62']) == "Services de soins de santé ambulatoires"){echo "selected";}?> value="Services de soins de santé ambulatoires">Services de soins de santé ambulatoires</option>
                <option <?php if (isset($_SESSION['soussecteur62']) && ($_SESSION['soussecteur62']) == "Hôpitaux"){echo "selected";}?> value="Hôpitaux">Hôpitaux</option>  
                <option <?php if (isset($_SESSION['soussecteur62']) && ($_SESSION['soussecteur62']) == "Établissements de soins infirmiers et de soins pour bénéficiaires internes"){echo "selected";}?> value="Établissements de soins infirmiers et de soins pour bénéficiaires internes">Établissements de soins infirmiers et de soins pour bénéficiaires internes</option>
                <option <?php if (isset($_SESSION['soussecteur62']) && ($_SESSION['soussecteur62']) == "Assistance sociale"){echo "selected";}?> value="Assistance sociale">Assistance sociale</option>                  
                </select>
            </div>

            <div class="col" id="dsoussecteur71">
            <label for="soussecteur71">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur71" id="soussecteur71">
                <option <?php if (isset($_SESSION['soussecteur71']) && ($_SESSION['soussecteur71']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur71']) && ($_SESSION['soussecteur71']) == "Arts d'interprétation, sports-spectacles et activités connexes"){echo "selected";}?> value="Arts d'interprétation, sports-spectacles et activités connexes">Arts d'interprétation, sports-spectacles et activités connexes</option>
                <option <?php if (isset($_SESSION['soussecteur71']) && ($_SESSION['soussecteur71']) == "Établissements du patrimoine"){echo "selected";}?> value="Établissements du patrimoine">Établissements du patrimoine</option>
                <option <?php if (isset($_SESSION['soussecteur71']) && ($_SESSION['soussecteur71']) == "Divertissement, loisirs, jeux de hasard et loteries"){echo "selected";}?> value="Divertissement, loisirs, jeux de hasard et loteries">Divertissement, loisirs, jeux de hasard et loteries</option>                  
                </select>
            </div>

            <div class="col" id="dsoussecteur72">
            <label for="soussecteur72">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur72" id="soussecteur72">
                <option <?php if (isset($_SESSION['soussecteur72']) && ($_SESSION['soussecteur72']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur72']) && ($_SESSION['soussecteur72']) == "Services d'hébergement"){echo "selected";}?> value="Services d'hébergement">Services d'hébergement</option>
                <option <?php if (isset($_SESSION['soussecteur72']) && ($_SESSION['soussecteur72']) == "Services de restauration et débits de boissons"){echo "selected";}?> value="Services de restauration et débits de boissons">Services de restauration et débits de boissons</option>
                </select>
            </div>

            <div class="col" id="dsoussecteur81">
            <label for="soussecteur81">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur81" id="soussecteur81">
                <option <?php if (isset($_SESSION['soussecteur81']) && ($_SESSION['soussecteur81']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur81']) && ($_SESSION['soussecteur81']) == "Réparation et entretien"){echo "selected";}?> value="Réparation et entretien">Réparation et entretien</option>
                <option <?php if (isset($_SESSION['soussecteur81']) && ($_SESSION['soussecteur81']) == "Services personnels et services de blanchissage"){echo "selected";}?> value="Services personnels et services de blanchissage">Services personnels et services de blanchissage</option>
                <option <?php if (isset($_SESSION['soussecteur81']) && ($_SESSION['soussecteur81']) == "Organismes religieux, fondations, groupes de citoyens et organisations professionnelles et similaires"){echo "selected";}?> value="Organismes religieux, fondations, groupes de citoyens et organisations professionnelles et similaires">Organismes religieux, fondations, groupes de citoyens et organisations professionnelles et similaires</option>         
                <option <?php if (isset($_SESSION['soussecteur81']) && ($_SESSION['soussecteur81']) == "Ménages privés"){echo "selected";}?> value="Ménages privés">Ménages privés</option>         
                </select>
            </div>
            <div class="col" id="dsoussecteur91">
            <label for="soussecteur91">Sous-Secteur de l'entreprise</label>
                <select class="form-control" name="soussecteur91" id="soussecteur91">
                <option <?php if (isset($_SESSION['soussecteur91']) && ($_SESSION['soussecteur91']) == "Choisir..."){echo "selected";}?> value="Choisir...">Choisir...</option>    
                <option <?php if (isset($_SESSION['soussecteur91']) && ($_SESSION['soussecteur91']) == "Administration publique fédérale"){echo "selected";}?> value="Administration publique fédérale">Administration publique fédérale</option>
                <option <?php if (isset($_SESSION['soussecteur91']) && ($_SESSION['soussecteur91']) == "Administrations publiques provinciales et territoriales"){echo "selected";}?> value="Administrations publiques provinciales et territoriales">Administrations publiques provinciales et territoriales</option>
                <option <?php if (isset($_SESSION['soussecteur91']) && ($_SESSION['soussecteur91']) == "Administrations publiques locales, municipales et régionales"){echo "selected";}?> value="Administrations publiques locales, municipales et régionales">Administrations publiques locales, municipales et régionales</option> 
                <option <?php if (isset($_SESSION['soussecteur91']) && ($_SESSION['soussecteur91']) == "Administrations publiques autochtones"){echo "selected";}?> value="Administrations publiques autochtones">Administrations publiques autochtones</option> 
                <option <?php if (isset($_SESSION['soussecteur91']) && ($_SESSION['soussecteur91']) == "Organismes publics internationaux et autres organismes publics extra-territoriaux"){echo "selected";}?> value="Organismes publics internationaux et autres organismes publics extra-territoriaux">Organismes publics internationaux et autres organismes publics extra-territoriaux</option>                  
                </select>
            </div>
    </div>        
</div>

<script>

function changesecteur(){ 
    if (document.getElementById("secteur").value == "Agriculture, foresterie, pêche et chasse") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "block"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
    else if (document.getElementById("secteur").value == "Extraction minière, exploitation en carrière, et extraction de pétrole et de gaz") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "block"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
      else if (document.getElementById("secteur").value == "Services publics") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "block"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
      else if (document.getElementById("secteur").value == "Construction") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "block"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
      else if (document.getElementById("secteur").value == "Fabrication") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "block"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
      else if (document.getElementById("secteur").value == "Commerce de gros") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "block"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
      else if (document.getElementById("secteur").value == "Commerce de détail") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "block"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." } 
      else if (document.getElementById("secteur").value == "Transport et entreposage") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "block"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Industrie de l'information et industrie culturelle") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "block"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Finance et assurances") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "block"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Services immobiliers et services de location à bail") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "block"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Services professionnels, scientifiques et techniques") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "block"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Gestion de sociétés et d'entreprises") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "block"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Services administratifs, services de soutien, services de gestion des déchets et services d'assainissement") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "block"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Services d'enseignement") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "block"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Soins de santé et assistance sociale") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "block"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Arts, spectacles et loisirs") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "block"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Services d'hébergement et de restauration") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"   
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "block"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Autres services (sauf les administrations publiques)") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "block"
      document.getElementById("dsoussecteur91").style.display = "none"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..."
      document.getElementById("soussecteur91").value = "Choisir..." }
      else if (document.getElementById("secteur").value == "Administrations publiques") 
    { document.getElementById("dsoussecteurs").style.display = "block"
      document.getElementById("dsoussecteur11").style.display = "none"
      document.getElementById("dsoussecteur21").style.display = "none"
      document.getElementById("dsoussecteur22").style.display = "none"
      document.getElementById("dsoussecteur23").style.display = "none"
      document.getElementById("dsoussecteur31").style.display = "none"
      document.getElementById("dsoussecteur41").style.display = "none"
      document.getElementById("dsoussecteur44").style.display = "none"
      document.getElementById("dsoussecteur48").style.display = "none"
      document.getElementById("dsoussecteur51").style.display = "none"
      document.getElementById("dsoussecteur52").style.display = "none"
      document.getElementById("dsoussecteur53").style.display = "none"
      document.getElementById("dsoussecteur54").style.display = "none"
      document.getElementById("dsoussecteur55").style.display = "none"
      document.getElementById("dsoussecteur56").style.display = "none"
      document.getElementById("dsoussecteur61").style.display = "none"
      document.getElementById("dsoussecteur62").style.display = "none"
      document.getElementById("dsoussecteur71").style.display = "none"
      document.getElementById("dsoussecteur72").style.display = "none"
      document.getElementById("dsoussecteur81").style.display = "none"
      document.getElementById("dsoussecteur91").style.display = "block"
      document.getElementById("soussecteur21").value = "Choisir..."
      document.getElementById("soussecteur22").value = "Choisir..."
      document.getElementById("soussecteur23").value = "Choisir..."
      document.getElementById("soussecteur31").value = "Choisir..."
      document.getElementById("soussecteur41").value = "Choisir..."
      document.getElementById("soussecteur44").value = "Choisir..."
      document.getElementById("soussecteur48").value = "Choisir..."
      document.getElementById("soussecteur51").value = "Choisir..."
      document.getElementById("soussecteur52").value = "Choisir..."
      document.getElementById("soussecteur53").value = "Choisir..."
      document.getElementById("soussecteur54").value = "Choisir..."
      document.getElementById("soussecteur55").value = "Choisir..."
      document.getElementById("soussecteur56").value = "Choisir..."
      document.getElementById("soussecteur61").value = "Choisir..."
      document.getElementById("soussecteur62").value = "Choisir..."
      document.getElementById("soussecteur71").value = "Choisir..."
      document.getElementById("soussecteur72").value = "Choisir..."
      document.getElementById("soussecteur81").value = "Choisir..."
      document.getElementById("soussecteur11").value = "Choisir..." }
      
    else {  document.getElementById("dsoussecteurs").style.display = "none"
            document.getElementById("soussecteur11").value = "Choisir..."
            document.getElementById("soussecteur21").value = "Choisir..."
            document.getElementById("soussecteur22").value = "Choisir..."
            document.getElementById("soussecteur23").value = "Choisir..."
            document.getElementById("soussecteur31").value = "Choisir..."
            document.getElementById("soussecteur41").value = "Choisir..."
            document.getElementById("soussecteur44").value = "Choisir..."
            document.getElementById("soussecteur48").value = "Choisir..."
            document.getElementById("soussecteur51").value = "Choisir..."
            document.getElementById("soussecteur52").value = "Choisir..."
            document.getElementById("soussecteur53").value = "Choisir..."
            document.getElementById("soussecteur54").value = "Choisir..."
            document.getElementById("soussecteur55").value = "Choisir..."
            document.getElementById("soussecteur56").value = "Choisir..."
            document.getElementById("soussecteur61").value = "Choisir..."
            document.getElementById("soussecteur62").value = "Choisir..."
            document.getElementById("soussecteur71").value = "Choisir..."
            document.getElementById("soussecteur72").value = "Choisir..."
            document.getElementById("soussecteur81").value = "Choisir..."
            document.getElementById("soussecteur91").value = "Choisir..."} } 

window.onload = changesecteur();
</script>