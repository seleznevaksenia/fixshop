<?php


class Order
{
    public static function save($userName, $phoneNumber, $comment, $userId, $productsInCart)
    {
        $productsInCart = json_encode($productsInCart);
        $db = Db::getConnection();
        $sql = "INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)";

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $phoneNumber, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $comment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $productsInCart, PDO::PARAM_STR);
        return $result->execute();

        //Тут была ошибка return $r
    }
}