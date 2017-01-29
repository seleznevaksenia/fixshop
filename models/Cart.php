<?php


class Cart
{
    public static function AddProduct($id)
    {

        $id = intval($id);
        $productsInCart = array();
        print_r($_SESSION['Products']);
        if (isset($_SESSION['Products'])) {
            $productsInCart = $_SESSION['Products'];
        }
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }
        $_SESSION['Products'] = $productsInCart[$id];

        return self:: countItems();
    }

    public static function countItems()
    {
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
}