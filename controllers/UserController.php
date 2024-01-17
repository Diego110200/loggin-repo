<?php
require_once 'models/User.php';

class UserController {
    public function index() {
        if (isset($_SESSION['user'])) {
            if (isset($_POST['logout'])) {
                $this->logout();
            } else {
                include 'views/home.php';
            }
        } elseif (isset($_POST['login'])) {
            $this->login();
        } else {
            include 'views/login.php';
        }
    }

    private function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $errors = $this->validateLoginForm($username, $password);
    
        if (empty($errors)) {
            $userModel = new User();
            $user = $userModel->getUserByUsername($username);
    
            if ($user) {

                
                // Cambio realizado aquí:
                if ($user && password_verify((string)$password, $user['password'])) {
                    $_SESSION['user'] = $user;
                    header('Location: /');
                    exit();
                } else {
                    $errors[] = 'Credenciales incorrectas';
                }
            } else {
                $errors[] = 'Usuario no encontrado';
            }
        }
    
        include 'views/login.php';
    }
    

    private function validateLoginForm($username, $password) {
        $errors = [];

        // Validar el nombre de usuario
        if (empty($username)) {
            $errors[] = 'El nombre de usuario es obligatorio';
        }

        // Validar la contraseña
        if (empty($password)) {
            $errors[] = 'La contraseña es obligatoria';
        }

        return $errors;
    }

    public function logout() {
        // Cerrar sesión
        session_destroy();

        // Redirigir a la página de inicio de sesión
        header('Location: /');
    }


    public function register() {
        if (isset($_POST['register'])) {
            $this->handleRegistration();
        } else {
            include 'views/register.php';
        }
    }

    private function handleRegistration() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $errors = $this->validateRegistrationForm($username, $password,$nombre,$apellido);

        if (empty($errors)) {
            $userModel = new User();
            
            // Verificar si el usuario ya existe
            $existingUser = $userModel->getUserByUsername($username);
            if ($existingUser) {
                $errors[] = 'El nombre de usuario ya está en uso';
            } else {
                // Registrar nuevo usuario
                $success = $userModel->registerUser($username, $password, $nombre, $apellido);

                if ($success) {
                    // Puedes redirigir a la página de inicio de sesión u otra página
                    header('Location: /');
                } else {
                    $errors[] = 'Error al registrar el usuario';
                }
            }
        }

        include 'views/register.php';
    }

    private function validateRegistrationForm($username, $password) {
        $errors = [];

        // Validar el nombre de usuario
        if (empty($username)) {
            $errors[] = 'El nombre de usuario es obligatorio';
        }

        // Validar la contraseña
        if (empty($password)) {
            $errors[] = 'La contraseña es obligatoria';
        }

        return $errors;
    }

}
?>
