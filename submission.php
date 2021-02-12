<?php
    $firstname = $lastname = $email = $message = '';
    $err = ['firstname' => '', 'lastname' => '', 'email' => '', 'message' => ''];

    if (isset($_POST['submit'])) {
        if (empty($_POST['firstname'])) {
            $err ['firstname'] = 'Required*';
        } else {
            $firstname = $_POST['firstname'];
            $err ['firstname'] = '';
        }

        if (empty($_POST['lastname'])) {
            $err ['lastname'] = 'Required*';
        } else {
            $lastname = $_POST['lastname'];
            $err ['lastname'] = '';
        }

        if (empty($_POST['email'])) {
            $err ['email'] = 'Required*';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err ['email'] = 'Email must be valid email address';
            }
        }
        if (empty($_POST['message'])) {
            $err ['message'] = 'Required*';
        } else {
            $message = $_POST['message'];
            $err ['message'] = '';
        }

    } 


?>