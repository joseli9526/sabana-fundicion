<?php
date_default_timezone_set('America/Mexico_City');

class LoginController extends Sabana {

    function login2($email, $user, $password){
        $templates = $this->templateEngine();

        $pass = md5($password);

        $sql = "SELECT * FROM users WHERE email = '$email' or user = '$user' AND password = '$pass'";
        $resultado = $this->fetchAll($sql);

        $sql = "SELECT * FROM familia";
        $familias = $this->fetchAll($sql);

        $sql = "SELECT * FROM modelos";
        $modelos = $this->fetchAll($sql);

        if (isset($resultado[0])){
            unset($resultado['password']);
            $_SESSION['username'] = $resultado[0]['name'];
            $_SESSION['apellido'] = $resultado[0]['apellido'];
            $_SESSION['rol'] = $resultado[0]['rol'];
            $_SESSION['correo'] = $resultado[0]['email'];

           // if ($_SESSION['rol'] == '') {
                $templates->assign('familias',$familias);
                $templates->assign('modelos',$modelos);
                $templates->assign('rol', $_SESSION['rol']);
                $templates->assign('username', $_SESSION['username']);
                $templates->assign('apellido',$_SESSION['apellido']);
                $templates->display('inicio.html');
            //}
        } else
            header('Location: ../index.php');
    }

    function logout(){
        session_destroy();//destruye la sesion
        header('Location: ../index.php');
    }

    function cambiarContrasena($user, $nuevo_pass){
        $sql = "UPDATE users SET password = md5('$nuevo_pass') WHERE name = '$user'";
        $this->conn->exec($sql);
    }
}