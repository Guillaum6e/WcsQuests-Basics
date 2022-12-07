<?php 
$firstName= $_POST['user_firstname'];
$name=$_POST['user_name'];
$email=$_POST['user_email'];
$phoneNumber=$_POST['telephone'];
$subject=$_POST['listeDeSujets'];
$comment=$_POST['user_message'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <h1>Merci <?php echo "$firstName $name" ?> de nous avoir contacté à propos d'un(e) <?php echo "$subject"?></h1>
    <p>Un de nos conseiller vous contactera soit à l’adresse <?php echo "$email"?> ou par téléphone au <?php echo "$phoneNumber" ?> dans les plus brefs délais pour traiter votre demande : </br>
<?php echo "$comment" ?>
    </p>
</body>
</html>