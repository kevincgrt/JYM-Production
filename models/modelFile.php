<?php

require_once './models/connectDB.php';

function insertPicture($title, $id_user, $desc_post, $path_post) {
  try {
    $pdo = connectDB();
    $stmt = $pdo->prepare("INSERT INTO pictures (id_user, title, path_post, desc_post) VALUES (:id_user, :title, :path_post, :desc_post)");
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':desc_post', $desc_post);
    $stmt->bindParam(':path_post', $path_post);
    $stmt->execute();
  } catch (PDOException $e) {
    echo "Une erreur s'est produite lors de l'insertion de l'image : " . $e->getMessage();
  }
}

function deletePicture($postId) {
  try {
    $pdo = connectDB();
    $stmt = $pdo->prepare("DELETE FROM pictures WHERE id = :id");
    $stmt->bindParam(':id', $postId);
    $stmt->execute();
  } catch (PDOException $e) {
    echo "Une erreur s'est produite lors de la suppression de l'image : " . $e->getMessage();
  }
}
