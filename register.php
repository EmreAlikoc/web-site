<?php

include 'connect.php';

if(isset($_POST['signUp'])){  
    $Name = htmlspecialchars($_POST['username']);  
    $Email = htmlspecialchars($_POST['email']);
    $Password = htmlspecialchars($_POST['password']);
    $PasswordHash = htmlspecialchars(password_hash($Password, PASSWORD_DEFAULT)); 

    if(empty($Name) || empty($Email) || empty($Password)){          
        header( "location: teklisandalyeuzun.php");
        exit();                                                            
    }

    $checkEmail = "SELECT * FROM users WHERE mail='$Email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email Address Already Exists";
    } else {
        $insertQuery = "INSERT INTO users(ad, mail, sifre) VALUES('$Name', '$Email', '$PasswordHash')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: teklisandalyeuzun.php");
            exit();
        } else {
            echo "Error" . $conn->error;
        }
    }
}

session_start();
if(isset($_POST['signIn'])){
    $Email = $_POST['email'];
    $Password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE mail='$Email'";
    $result = $conn->query($sql);
    
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $storedPasswordHash = $row['sifre']; 

       
        if(password_verify($Password, $storedPasswordHash)){
            $_SESSION['isim'] = $row['ad'];
            $_SESSION['email'] = $row['mail'];
            echo "success";

        } else {
            echo "Invalid Password"; 
        }
    } else {
        echo "User not found"; 
    }
    exit();
}

?>
