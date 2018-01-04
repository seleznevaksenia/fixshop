<?php

class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        $productsList = array();
        $productsList = Product::getRecommendedProducts();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact()
    {
        $userEmail = '';
        $userText = '';
        $result = false;
        $adminEmail = '380992717715@ya.ru';

        if (isset($_POST['submit'])) {
            $userEmail = $_POST['userEmail'];
            //echo $userEmail;
            $userText = $_POST['userText'];

            $errors = false;
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный Email';
            }
            if ($errors == false) {
                $message = "Text: {$userText}. From {$userEmail}";
                $subject = 'Letter subject';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        require_once(ROOT . '/views/site/contact.php');
        return true;
    }

}
