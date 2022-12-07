<?php 
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '') { 
        $errors[] = "Le prénom est obligatoire";
    }
    if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '') { 
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '') {
        $errors[] = "L'email est obligatoire";
    } else {
        filter($_POST['user_email'], FILTER_VALIDATE_EMAIL);
    }
    if (!isset($_POST['telephone'])) { 
        $errors[] = "Le numéro de téléphone est obligatoire";
    }
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '') { 
        $errors[] = "Le commentaire est obligatoire";
    }

    if (empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('Location: thanks.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Formulaire</title>
</head>
<body>
    <?php // Affichage des éventuelles erreurs 
    if (count($errors) > 0) : ?>
            <div class="">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
    <?php endif ?>

    <form  action="thanks.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name" required>
        </div>
        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_firstname"required>
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email"required>
        </div>
        <div>
            <label  for="tel">Téléphone :</label>
            <input  type="number"  id="tel"  name="telephone"required>
        </div>
        <div>
            <label for="sujet">Choose a subject:</label>
            <select id="sujet" name="listeDeSujets">
                <option value="question">Question</option>
                <option value="commentaire">Commentaire</option>
                <option value="Solution">Solution</option>
                <option value="Critique">Critique</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea required>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
