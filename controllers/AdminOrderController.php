<?php


class AdminOrderController extends AdminBase
{
    public function actionIndex()
    {

        self::checkAdmin();
        $orderList = array();
        $orderList = Order::getOrderList();
        require_once(ROOT . '/views/admin_order/index.php');
        return true;

    }

    public function actionDelete($id)
    {

        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Order::deleteOrderById($id);
            header('Location:/admin/order');
        }
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }

    public function actionUpdate($id)
    {

        self::checkAdmin();
        $order = Order::getOrderById($id);
        if (isset($_POST['submit'])) {

            $options['user_name'] = $_POST['user_name'];
            $options['user_phone'] = $_POST['user_phone'];
            $options['user_comment'] = $_POST['user_comment'];
            $options['order_date'] = $_POST['order_date'];
            $options['status'] = $_POST['status'];

            if (Order::updateOrderById($id, $options)) {

            }

            header('Location:/admin/order');
        }
        require_once(ROOT . '/views/admin_order/update.php');
        return true;
    }

    public function actionView($id)
    {

        self::checkAdmin();

        $order = Order::getOrderById($id);
        //Преобразование в массив
        $productsQuantity = json_decode($order['products'], true);
        $productsIds = array_keys($productsQuantity);
        $products = Product::getProductByIds($productsIds);

        require_once(ROOT . '/views/admin_order/view.php');
        return true;
    }
}