<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // Vérifier si l'adressemail de l'utilisateur eest valide ou pas
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //Si le mail est valide
            // Vérifier si le mail existe déjà dans la base de données ou pas
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ //Si le mail existe déjà
                echo "$email - Cet adresse mail existe déjà !";
            }else{
                // Vérifier si l'utilisateur a téléchargé le fichier ou pas
                if(isset($_FILES['image'])){ //Si le fichier est téléchargé
                    $img_name = $_FILES['image']['name']; // Obtenir le nom de l'img téléchargé par l'utilisateur
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name']; // Ce nom temporaire est utilisé pour enregistrer/déplacer le fichier dans notre dossier
                    
                    // Explosons l'image et obtenons cette dernière extension comme jpg png
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode); // Ici nous récupérons l'estension du fichier image télécharger par l'utilisateur
    
                    $extensions = ["jpeg", "png", "jpg"]; // Voici des exemples d'extensions d'images valides et nous les reccuieillons dans un tableau
                    if(in_array($img_ext, $extensions) === true){ // Si l'extension du fichier télécharger par l'utilisateur est égale aux tableau des extensions
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();// Ceci nous retournera l'heure courante
                                           // Nous avons besoin de cette heure car lorsque vous téléchargez l'image utilisateur dans notre dossier, nous renommerons le fichier utilisateur avec l'heure actuelle
                                           //Donc tous les fichiers images devront avoir un nom unique
                            // Déplaçons le fichier téléchargé par l'utilisateur dans le dossier correspondant
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){ //Déplacer dans le dossier correspondant si l'utilisateur télécharge l'image
                                $ran_id = rand(time(), 100000000); // Création d'un identifiant aléatoire pour l'utilisateur
                                $status = "En ligne"; // Une fois que l'utilisateur s'est inscrit, son statut sera en ligne
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    }else{
                                        echo "Cette adresse e-mail n'existe pas !";
                                    }
                                }else{
                                    echo "Quelque chose s'est mal passé. Veuillez réessayer !";
                                }
                            }
                        }else{
                            echo "Veuillez télécharger un fichier image - jpeg, png, jpg";
                        }
                    }else{
                        echo "Veuillez télécharger un fichier image - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email n'est pas un e-mail valide !";
        }
    }else{
        echo "Tous les champs de saisie sont obligatoires !";
    }
?>