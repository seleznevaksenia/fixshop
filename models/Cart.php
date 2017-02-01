<?php


class Cart
{
    public static function countItems()
    {
        print_r($_SESSION['Products']);
        if (isset($_SESSION['Products'])) {
            $count = 0;
            foreach ($_SESSION['Products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }
    public static function AddProduct($id)
    {
        $id = intval($id);
        $productsInCart = array();
        if (isset($_SESSION['Products'])) {
            $productsInCart = $_SESSION['Products'];
            print_r($productsInCart);
        }
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }
        $_SESSION['Products'] = $productsInCart[$id];


        return self::countItems();
    }


    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        } else return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self:: getProducts();
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

}