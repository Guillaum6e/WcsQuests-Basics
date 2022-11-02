<?php
// Je vérifie si le formulaire est soumis comme d'habitude
$postExist=($_SERVER['REQUEST_METHOD'] === "POST");
if ($postExist) { 
    $uploadDir = __DIR__ . "/uploads/";
    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $uploadFile = (new DateTime())->format("U") . "." . $extension;
    $uploadPath = $uploadDir . $uploadFile;
    $authorizedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $maxFileSize = 1000000;
    
    // Je sécurise et effectue mes tests

    /******
 * Si l'extension est autorisée 
*************/
    if ((!in_array($extension, $authorizedExtensions))) {
        $errors[] = 'Veuillez sélectionner une image de type Jpg ou Jpeg ou Gif ou Webp ou Png !';
    }

    /******
 * On vérifie si l'image existe et si le poids est autorisé en octets 
*************/
    if (file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize) {
        $errors[] = "Votre fichier doit faire moins de 1M !";
    }

    /******
 * Si je n'ai pas d"erreur alors j'upload 
*************/
    var_dump($errors);
    if (empty($errors)) {
        move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadPath);
        header("Location: /card.php?pic=" . $uploadFile);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Test</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="imageUpload">Upload a profile picture</label>    
        <input type="file" name="avatar" id="imageUpload" /></br>
        <button name="send">Send</button>
        
        <?php if (!empty($errors)) : ?>
            <?php foreach ($errors as $error): ?>
                <pre><?php echo $error ?></pre>
            <?php endforeach ?>
        <?php endif ?>
    </form>
</body>
</html>
