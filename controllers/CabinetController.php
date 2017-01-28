<?php

class CabinetController
{

    public function actionIndex()
    {
        $userId = User :: checkLogged();
        $user =  User :: getUserById($userId);
        //print_r($user['name']);
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
    public function actionEdit()
    {
        $userId = User :: checkLogged();
        $user =  User :: getUserById($userId);
        $name = $user['user_name'];
        $password = $user['password'];
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;
            //echo print_r($errors).'<br>';
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            //echo print_r($errors);
            if ($errors == false) {
                $result = User::edit($userId,$name, $password);
                echo print_r($result);
                }
        }
        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }

}
