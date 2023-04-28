<?php

require_once "models/modelUser.php";
require_once "models/modelFile.php";

/* ...........................................................liens........................................................ */

function home()
{
    require "./views/home.php";
}
function numerisation()
{
    require "./views/numerisation-restauration.php";
}
function videophoto()
{
    require "./views/videos-photos.php";
}
function reportage()
{
    require "./views/reportage.php";
}
function devis()
{
    require "./views/devis.php";
}

function CD()
{
  require "./views/CD.php";
}


/* ...........................................................header........................................................ */


function getLoggedInUserData() 
{
  try {
    $user_id = $_SESSION['user_id'];
    $user_data = getUserById($user_id);
    return $user_data;
  } catch (Exception $e) {
    throw new Exception("Une erreur s'est produite : " . $e->getMessage());
  }
}

/* ...........................................................connection..................................................... */

function connection() 
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        try {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Recherche de l'utilisateur dans la base de données
            $user = getUserByEmail($email);

            if ($user) {
                // Vérification du mot de passe
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user_id"] = $user["id"];
                    $_SESSION["username"] = $user["username"];
                    require_once "./views/profile.php";
                } else {
                    throw new Exception("Mot de passe incorrect");
                }
            } else {
                throw new Exception("L'utilisateur avec l'adresse e-mail $email n'existe pas");
            }
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la connexion : " . $e->getMessage());
        }
    }
    else {
        require "./views/connection.php";
    }
    
}


/* ...........................................................inscription........................................................ */


function inscription() 
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupération des données
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        // Hachage du mot de passe
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        // Vérification des champs obligatoires
        if (empty($username) || empty($password) || empty($email)) {
            echo "<br />";
            echo "Veuillez remplir les champs obligatoires";
        } else {
            // Vérification de la validité de l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Adresse email non valide";
            } else {
                try {
                    // Enregistre l'utilisateur dans la base de données en appelant la fonction registerUser
                    saveUser($username, $password_hash, $email);
                } catch (Exception $e) {
                    echo "Erreur lors de l'enregistrement de l'utilisateur : " . $e->getMessage();
                }
            }
        }
    }
    require "./views/login.php";
}





/* ...........................................................profile........................................................ */

function logout() 
{
    session_destroy();
    home();
}

function uploadFile() 
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc_post = $_POST['desc_post'];
    $type = $_POST['type'];
    $id_user = $_SESSION['user_id'];
    if (!empty($_FILES['file']['name'])) {
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES['file']['name']);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if ($_FILES['file']['size'] > 5000000) {
        echo "Le fichier est trop gros.";
        $uploadOk = 0;
      }
      if ($uploadOk == 0) {
        echo "Le fichier n'a pas été importé.";
      } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
          $path_post = $target_file;
          if ($type == "video") {
            if ($imageFileType == "mp4" || $imageFileType == "avi" || $imageFileType == "mov") {
              insertVideo($title, $id_user, $desc_post, $imageFileType, $path_post);
              echo "La vidéo a été importée.";
            } else {
              echo "Le format de fichier vidéo n'est pas pris en charge.";
            }
          } elseif ($type == "image") {
            if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
              insertPicture($title, $id_user, $desc_post, $path_post);
              echo "L'image a été importée.";
            } else {
              echo "Le format de fichier image n'est pas pris en charge.";
            }
          }
          
        } else {
          echo "Une erreur est survenue lors de l'importation du fichier.";
        }
      }
    }
  }

  require "./views/upload.php";
}

function deletePost() 
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postId = $_POST['post_id'] ?? '';
    $postType = $_POST['post_type'] ?? '';
    if (!empty($postId) && !empty($postType)) {
      try {
        if ($postType == 'picture') {
          deletePicture($postId);
        } elseif ($postType == 'video') {
          deleteVideo($postId);
        }
        echo "Le post a été supprimé avec succès";
        header("Location: index.php?action=profile");
          exit;
      } catch (Exception $e) {
        throw new Exception("Erreur lors de la suppression du post : " . $e->getMessage());
      }
    } else {
      echo "Erreur : l'ID du post et/ou le type de post ne sont pas définis";
    }
  }
}