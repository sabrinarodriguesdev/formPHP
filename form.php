<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="lastName">Nom :<br></label>
      <input  type="text"  id="lastName"  name="user_name">
    </div>
    <div>
      <label  for="firstName">Prénom:<br></label>
      <input  type="text"  id="firstName"  name="user_firstName">   
    </div>
    <div>
      <label  for="mail">Your mail :<br></label>
      <input  type="email"  id="mail"  name="user_email">
    </div>
    <div>
    <label for="subject">choose the subject of your message <br></label>

      <select name="sujet" id="subject">
        <option value="">Please choose an option </option>
        <option value="information">Information</option>
        <option value="reclamation">Reclamation</option>
        <option value="other">Other</option>
       </select>
    </div>
      <label for="phone">Enter your phone number:<br></label>
      <input type="tel" id="phone" name="phone">
    <div>
      <label  for="message">Message :<br></label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message <br></button>
    </div>
  </form>  
</body>
</html>



