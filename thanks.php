<?php
  echo 'Merci '. $_POST['user_firstName'] .' ' . $_POST["user_name"].' de nous avoir contacté à propose de :'.$_POST["sujet"] . '.' .'<br>' .
'Un de nos conseiller vous contactera soit à l\'adresse ' . $_POST["user_email"] . ' ou par téléphone au : '. $_POST["phone"] . ' dans les plus brefs délais pour traiter votre demande :'.'<br>'
 .$_POST["user_message"];

?>