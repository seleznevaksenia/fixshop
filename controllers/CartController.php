<?php


class CartController
{
    public function actionAdd($id)
    {
        Cart::addProduct($id);
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

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
}