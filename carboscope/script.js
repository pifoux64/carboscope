window.onload = changeaerien(); 
window.onload = changemateriaux(); 
window.onload = changeaerien2(); 
window.onload = changeproduits();
window.onload = changeaerien3(); 
window.onload = changedechets(); 
window.onload = changetypedonneemateriaux();
window.onload = changetypedonneeproduits();
window.onload = changetypedonneedechets();



	function changemateriaux(){ 
	if (document.getElementById("liste_id").value == "oui") 
	{                       if (document.getElementById("transportmateriaux").value == "entrantsaerien")
							{ document.getElementById("aerien").style.display = "block" } 
							else if (document.getElementById("transportmateriaux").value == "internesaerien")
							{ document.getElementById("aerien").style.display = "block" }
							else if (document.getElementById("transportmateriaux").value == "sortantsaerien")
							{ document.getElementById("aerien").style.display = "block" }
							else
							{ document.getElementById("aerien").style.display = "none" } 
		document.getElementById("materiaux").style.display = "block" } 
	else 
	{ document.getElementById("materiaux").style.display = "none"
	  document.getElementById("aerien").style.display = "none" } }

	function changeaerien(){ 
	if (document.getElementById("transportmateriaux").value == "entrantsaerien")
	{ document.getElementById("aerien").style.display = "block" } 
	else if (document.getElementById("transportmateriaux").value == "internesaerien")
	{ document.getElementById("aerien").style.display = "block" }
	else if (document.getElementById("transportmateriaux").value == "sortantsaerien")
	{ document.getElementById("aerien").style.display = "block" }
	else
	{ document.getElementById("aerien").style.display = "none" } } 
	  
	function changetypedonneemateriaux(){ 
	if (document.getElementById("typedonneemateriaux").value == "consofuelmateriaux") 
	{ document.getElementById("consofuelmateriaux").style.display = "block" 
	  document.getElementById("vehiculedistancemateriaux").style.display = "none"
	  document.getElementById("poidsdistancemateriaux").style.display = "none"
	} 
	else if (document.getElementById("typedonneemateriaux").value == "vehiculedistancemateriaux")
	{ document.getElementById("vehiculedistancemateriaux").style.display = "block"
	  document.getElementById("consofuelmateriaux").style.display = "none"
	  document.getElementById("poidsdistancemateriaux").style.display = "none" }
	else if (document.getElementById("typedonneemateriaux").value == "poidsdistancemateriaux")
	{ document.getElementById("consofuelmateriaux").style.display = "none"
	  document.getElementById("vehiculedistancemateriaux").style.display = "none"
	  document.getElementById("poidsdistancemateriaux").style.display = "block" }
	else 
	{ 
	  document.getElementById("consofuelmateriaux").style.display = "none"
	  document.getElementById("vehiculedistancemateriaux").style.display = "none"
	  document.getElementById("poidsdistancemateriaux").style.display = "none"} }

	  function changeaerien2(){ 
		if (document.getElementById("transportproduits").value == "entrantsaerien")
		{ document.getElementById("aerien2").style.display = "block" } 
		else if (document.getElementById("transportproduits").value == "internesaerien")
		{ document.getElementById("aerien2").style.display = "block" }
		else if (document.getElementById("transportproduits").value == "sortantsaerien")
		{ document.getElementById("aerien2").style.display = "block" }
		else
		{ document.getElementById("aerien2").style.display = "none" } } 
		
		function changeproduits(){ 
		if (document.getElementById("liste_id2").value == "oui") 
		{ document.getElementById("produits").style.display = "block"
			if (document.getElementById("transportproduits").value == "entrantsaerien")
			{ document.getElementById("aerien2").style.display = "block" } 
			else if (document.getElementById("transportproduits").value == "internesaerien")
			{ document.getElementById("aerien2").style.display = "block" }
			else if (document.getElementById("transportproduits").value == "sortantsaerien")
			{ document.getElementById("aerien2").style.display = "block" }
			else
			{ document.getElementById("aerien2").style.display = "none" }    
		} 
		else 
		{ document.getElementById("produits").style.display = "none"
		  document.getElementById("aerien2").style.display = "none"   } } 

		function changetypedonneeproduits(){ 
		if (document.getElementById("typedonneeproduits").value == "consofuelproduits") 
		{ document.getElementById("consofuelproduits").style.display = "block" 
		  document.getElementById("vehiculedistanceproduits").style.display = "none"
		  document.getElementById("poidsdistanceproduits").style.display = "none"
		} 
		else if (document.getElementById("typedonneeproduits").value == "vehiculedistanceproduits")
		{ document.getElementById("vehiculedistanceproduits").style.display = "block"
		  document.getElementById("consofuelproduits").style.display = "none"
		  document.getElementById("poidsdistanceproduits").style.display = "none" }
		else if (document.getElementById("typedonneeproduits").value == "poidsdistanceproduits")
		{ document.getElementById("consofuelproduits").style.display = "none"
		  document.getElementById("vehiculedistanceproduits").style.display = "none"
		  document.getElementById("poidsdistanceproduits").style.display = "block" }
		else 
		{ 
		  document.getElementById("consofuelproduits").style.display = "none"
		  document.getElementById("vehiculedistanceproduits").style.display = "none"
		  document.getElementById("poidsdistanceproduits").style.display = "none"} }  




		  function changeaerien3(){ 
		  if (document.getElementById("transportdechets").value == "entrantsaerien")
		  { document.getElementById("aerien3").style.display = "block" } 
		  else if (document.getElementById("transportdechets").value == "internesaerien")
		  { document.getElementById("aerien3").style.display = "block" }
		  else if (document.getElementById("transportdechets").value == "sortantsaerien")
		  { document.getElementById("aerien3").style.display = "block" }
		  else
		  { document.getElementById("aerien3").style.display = "none" } } 
		  
		  function changedechets(){ 
		  if (document.getElementById("liste_id3").value == "oui") 
		  { document.getElementById("dechets").style.display = "block"
			  if (document.getElementById("transportdechets").value == "entrantsaerien")
			  { document.getElementById("aerien3").style.display = "block" } 
			  else if (document.getElementById("transportdechets").value == "internesaerien")
			  { document.getElementById("aerien3").style.display = "block" }
			  else if (document.getElementById("transportdechets").value == "sortantsaerien")
			  { document.getElementById("aerien3").style.display = "block" }
			  else
			  { document.getElementById("aerien3").style.display = "none" }
		  } 
		  else 
		  { document.getElementById("dechets").style.display = "none"
			document.getElementById("aerien3").style.display = "none" } } 
			
		  function changetypedonneedechets(){ 
		  if (document.getElementById("typedonneedechets").value == "consofueldechets") 
		  { document.getElementById("consofueldechets").style.display = "block" 
			document.getElementById("vehiculedistancedechets").style.display = "none"
			document.getElementById("poidsdistancedechets").style.display = "none"
		  } 
		  else if (document.getElementById("typedonneedechets").value == "vehiculedistancedechets")
		  { document.getElementById("vehiculedistancedechets").style.display = "block"
			document.getElementById("consofueldechets").style.display = "none"
			document.getElementById("poidsdistancedechets").style.display = "none" }
		  else if (document.getElementById("typedonneedechets").value == "poidsdistancedechets")
		  { document.getElementById("consofueldechets").style.display = "none"
			document.getElementById("vehiculedistancedechets").style.display = "none"
			document.getElementById("poidsdistancedechets").style.display = "block" }
		  else 
		  { 
			document.getElementById("consofueldechets").style.display = "none"
			document.getElementById("vehiculedistancedechets").style.display = "none"
			document.getElementById("poidsdistancedechets").style.display = "none"} }

	  

      