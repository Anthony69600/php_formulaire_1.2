
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Merci <?php echo $_POST['user_first_name'] . ' ' . $_POST['user_name'] ?> de nous avoir contacté à propos de “<?php echo $_POST['user_subject'] ?>”.
    Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande : 
    <?php echo $_POST['user_message'] ?>
    </p>
</body>
</html>




<?php

// define variables and set to empty values
$nameErr = $firstNameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";


if (empty($_POST["user_first_name"])) {           
  $firstNameErr = "Le prénom est obligatoire!"; 
} else {                                      
  $firstname = $_POST["user_first_name"];
}

if (empty($_POST["user_name"])) {           
  $nameErr = "Le nom est obligatoire!";
} else {
  $name = $_POST["user_name"];
}

if (empty($_POST["user_email"])) {                                      
  $emailErr = "L'email est obligatoire!";
} else if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) { 
  $emailErr = "Ceci n'est pas une adresse email valide";
} else {                                                          
    $email = $_POST["user_email"]; 
}

if (empty($_POST["user_phone"])) {           
  $phoneErr = "Le téléphone est obligatoire!";
} else {                                  
  $telephone = $_POST["user_phone"];
}

if (empty($_POST["user_subject"])) {         
  $subjectErr = "Le sujet est obligatoire!";
} else {    
  $subject = $_POST["user_subject"];                              
}

if (empty($_POST["user_message"])) {           
  $messageErr = "Le message est obligatoire!";
} else {                                  
  $message = $_POST["user_message"];
}

?>

  <p> <?php echo $firstNameErr ; ?> </p>
  <p> <?php echo $nameErr; ?> </p>
  <p> <?php echo $emailErr; ?> </p>
  <p> <?php echo $phoneErr; ?> </p>
  <p> <?php echo $subjectErr; ?> </p>
  <p> <?php echo $messageErr; ?> </p>
  
