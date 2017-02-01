<?php


class CartController
{
    public function actionAddAjax($id)
    {
        echo Cart::AddProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCarts = false;
        echo "hello";

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