<?php
  echo 'Merci '. htmlspecialchars($_POST['user_firstName']) .' ' 
  . htmlspecialchars($_POST["user_name"]) .' de nous avoir contacté à propose de :'
   .htmlspecialchars($_POST["sujet"]) . '.' .PHP_EOL .
'Un de nos conseiller vous contactera soit à l\'adresse ' . htmlspecialchars($_POST["user_email"]) 
. ' ou par téléphone au : '. htmlspecialchars($_POST["phone"]) . ' dans les plus brefs délais pour traiter votre demande :'.PHP_EOL
 . htmlspecialchars($_POST["user_message"]);


?>