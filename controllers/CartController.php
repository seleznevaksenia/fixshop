<?php


class CartController
{
    public function actionAddAjax($id)
    {
        echo Cart::AddProduct($id);
        return true;
    }
}