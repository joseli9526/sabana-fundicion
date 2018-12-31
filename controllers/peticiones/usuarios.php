<?php

class Usuarios extends Sabana {

    function createUser($nombre, $email) {
        $sql = "INSERT INTO users (email, password, rol, name) VALUES ('$email',md5('Arbomex01'),'','$nombre')";
        $this->ejecutar($sql);
    }

    function uodatePassword($email,$password) {
        $sql = "UPDATE users SET password = md5('$password') WHERE email = '$email'";
        $this->ejecutar($sql);
    }
}