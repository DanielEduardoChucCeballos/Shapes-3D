<?php
namespace Phppot;

class Member
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

   
    public function isUsernameExists($username)
    {
        $query = 'SELECT * FROM userss where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    
    public function isEmailExists($email)
    {
        $query = 'SELECT * FROM userss where email = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    
    public function registerMember()
    {
        
        $isEmailExists = $this->isEmailExists($_POST["email"]);
        if ($isUsernameExists) {
            $response = array(
                "status" => "error",
                "message" => "El usuario ya existe."
            );
        } else if ($isEmailExists) {
            $response = array(
                "status" => "error",
                "message" => "El Email ya existe."
            );
        } else {
            if (! empty($_POST["signup-password"])) {

                // PHP's password_hash
                $hashedPassword = password_hash($_POST["signup-password"], PASSWORD_DEFAULT);
            }
            $query = 'INSERT INTO userss (username, password, email) VALUES (?, ?, ?)';
            $paramType = 'sss';
            $paramValue = array(
                $_POST["username"],
                $hashedPassword,
                $_POST["email"]
            );
            $memberId = $this->ds->insert($query, $paramType, $paramValue);
            if (! empty($memberId)) {
                $response = array(
                    "status" => "success",
                    "message" => "Te has registrado exitosamente."
                );
            }
        }
        return $response;
    }

    public function getMember($username)
    {
        $query = 'SELECT * FROM userss where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

   
    public function loginMember()
    {
        $memberRecord = $this->getMember($_POST["username"]);
        $loginPassword = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["login-password"])) {
                $password = $_POST["login-password"];
            }
            $hashedPassword = $memberRecord[0]["password"];
            $loginPassword = 0;
            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            // inicio de sesión exitoso
            session_start();
            $_SESSION["username"] = $memberRecord[0]["username"];
            session_write_close();
            $url = "./home.php";
            header("Location: $url");
        } else if ($loginPassword == 0) {
            $loginStatus = "Usuario/contraseña es inválido.";
            return $loginStatus;
        }
    }
}
