<?php
require 'dbconnexion.php';
                $rep= 'DELETE FROM students WHERE id="'.$_GET['id'].'"';
                 if ($cnx->query($rep) == TRUE){
       echo "suppression succès  " ;

       } 
?>
    <a href="index.php" ><input class="btn btn-primary" type="submit" value="Return"></a>
