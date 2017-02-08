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

    public static function getOrderList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT id, user_name, user_phone, order_date, status FROM product_order ORDER BY id ASC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['order_date'] = $row['order_date'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }

    public static function deleteOrderById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM product_order WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function updateOrderById($id, $options)
    {
        $db = Db::getConnection();

        $sql = "UPDATE product_order SET user_name = :user_name,user_phone = :user_phone,user_comment = :user_comment ,order_date = :order_date,status = :status WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $options['user_name'], PDO::PARAM_STR);
        $result->bindParam(':user_phone', $options['user_phone'], PDO::PARAM_STR);
        $result->bindParam(':user_comment', $options['user_comment'], PDO::PARAM_STR);
        $result->bindParam(':order_date', $options['order_date'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        $result->bindParam(':id', $options['id'], PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getOrderById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product_order WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();

        }
    }

    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляется';
                break;
            case '4':
                return 'Закрыт';
                break;
        }
    }

}