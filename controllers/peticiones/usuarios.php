<?php

class Usuarios extends Sabana {

    function createUser($nombre, $email,$user,$apellido,$pass,$rol) {
        $sql = "INSERT INTO users (email, password,  name,user,apellido,rol) 
                VALUES ('$email',md5('$pass'),'$nombre','$user','$apellido','$rol')";
        echo $sql;
        $this->ejecutar($sql);
    }

    function uodatePassword($email,$password) {
        $sql = "UPDATE users SET password = md5('$password') WHERE email = '$email'";
        $this->ejecutar($sql);
    }
}