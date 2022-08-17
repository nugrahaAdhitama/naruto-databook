<?php

class Auth_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data) {
        $hashPassword = password_hash($data['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users
                    VALUES
                    ('', :email, :password)
        ";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $hashPassword);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($data) {
        session_start();

        if(isset($data['kirim'])) {
            $password = $data['password'];

            $query = 'SELECT * FROM '. $this->table . 'WHERE email =:email';

            $this->db->query($query);
            // $this->db->bind('email', $data['email']);
            // $this->db->bind('password', $data['password']);
            // $this->db->execute();


            if($this->db->resultSet($query) === 1) {
                // cek password
                $user = $this->db->single($query);

                if(password_verify($password, $user['password'])) {
                    $_SESSION['email'] = $data['email'];

                    $_SESSION['login'] = true;
                    exit;
                }
            }
        }

        // if(isset($data['kirim'])) {
        //     $email = $data['email'];
        //     $password = $data['password'];

        //     $query = "SELECT * FROM " .$this->table. " WHERE email = :email";

        //     $this->db->query($query);
        //     $this->db->bind('email', $email);
        //     $this->db->bind('password', $password);

        //     if($this->db->resultSet($query) === 1) {
        //         // cek password
        //         $user = $this->db->single($query);

        //         if(password_verify($password, $user['password'])) {
        //             // set session
        //             $_SESSION['email'] = $email;

        //             $_SESSION['login'] = true;
        //             exit;
        //         }
        //     }
        // }
    }

    
}