
<?php 

require_once('init.inc.php'); 
require_once('header.inc.php'); 

?>

<?php
$_POST = array();
          $_SESSION = array();
          echo "Vos valeurs ont été réinitialisées";


echo "<script language='javascript'> setTimeout(
    function ( )
    {
      self.close();
    }, 3000 );</script>";

          ?>