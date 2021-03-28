<?php
$data = array_map('trim', $_POST);
$errors = [];
   
if(empty ($data["user_name"])){
        $errors[] = "Name is required";
    }
if(empty ($data["user_firstName"])){
        $errors[] = "firstname is required";
    }
if(empty ($data["user_email"])){
        $errors[] = "Email is required";
    }
if(empty ($data["phone"])){
        $errors[] = "phone is required";
    }
 if(empty ($data["sujet"])){
        $errors[] = "Subject of your message is required";
    }
    if(empty ($data["user_message"])){
        $errors[] = "Your message is required";
    }
    if (!filter_var($data["user_email"], FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email format";
    }
    if (!empty($errors)) {
        for($i=0;$i< count($errors);$i++) {
          echo $errors[$i]. "<br>";
        }
    } 
else{

    echo 'Merci '. $_POST['user_firstName'] .' ' . $_POST["user_name"].' de nous avoir contacté à propose de :'.$_POST["sujet"] . '.' .'<br>' .
        'Un de nos conseiller vous contactera soit à l\'adresse ' . $_POST["user_email"] . ' ou par téléphone au : '. $_POST["phone"] . ' dans les plus brefs délais pour traiter votre demande :'.'<br>'
        .$_POST["user_message"];
}


?>