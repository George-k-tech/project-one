<?php
include_once './db.php';	
include_once './user.php';
   $full_name = $_POST['fullname'];
   $email = $_POST['email'];
   $city = $_POST['address'];
   $password = $_POST['password'];

   $con = new DBConnector();
   $pdo = $con->connectToDB();

   //we want to register 



   $user = new User();
   //set the member variable
   $user->setFullName($full_name);
   $user->setEmail($email);
   $user->setCity( $city);
   $user->setPassword($password);

   echo $user->register($pdo);



   if(isset($_POST['login'])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $user = new User();
      $user->setEmail($email);
      $user->setPassword($password);
      $user_details = $user->login($pdo);
   }

   if(isset($_POST['change-password'])){
      $password = password_hash($_POST["current-password"],PASSWORD_DEFAULT);
      $newPassword = password_hash($_POST["new-pass"],PASSWORD_DEFAULT);
      $confrirmPassword = $_POST['confirm-password'];

      if(password_verify($confirmPassword,$newPassword)){
         $user = new User();
         $user->setPassword($password);
         $user->setNewPassword($newPassword);

         echo $user->changePassword($pdo); 
      } else{
         echo "passwords dont match";
      }
   }
?>