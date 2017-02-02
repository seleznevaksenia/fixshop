<?php


class CartController
{
    public function actionAdd($id)
    {
        Cart::addProduct($id);
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

    }

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header("Location:/cart/");

    }
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCarts = false;

        $productsInCarts = Cart::getProducts();

        if ($productsInCarts) {
            $productsIds = array_keys($productsInCarts);
            $products = Product::getProductByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    public function actionCheckout()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $result = false;

        if (isset($_POST['submit'])) {
            $userName = $_POST['name'];
            $phoneNumber = $_POST['phoneNumber'];
            $comment = $_POST['comment'];

            $errors = false;

            if (!User::checkName($userName)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkTel($phoneNumber)) {
                $errors[] = 'Неправильный телефон';
            }
            if ($errors == false) {
                $productsInCart = Cart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }
                $result = Order::save($userName, $phoneNumber, $comment, $userId, $productsInCart);
                if ($result) {
                    $adminEmail = '380992717715@ya.ru';
                    $subject = 'Новый заказ';
                    $message = '/admin/orders';
                    mail($adminEmail, $subject, $message);
                    Cart::clear();
                }
            } else {
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuontity = Cart::countItems();
            }
        } else {
            $productsInCart = Cart::getProducts();

            if ($productsInCart == false) {
                header("Location:/");
            } else {
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuontity = Cart::countItems();

                $name = false;
                $phoneNumber = false;
                $comment = false;

                if (User::isGuest()) {

                } else {
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    $userName = $user['user_name'];
                }
            }
        }
        require_once(ROOT . '/views/cart/order.php');
        return true;

    }
}