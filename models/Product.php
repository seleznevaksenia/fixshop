<?php

class Product
{

    const SHOW_BY_DEFAULT = 9;

    /**
     * Returns an array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT, $page = 1)
    {
        $count = intval($count);
        $page = intval($page);
        $offset = ($page - 1) * $count;

        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, name, price, image, code, is_new FROM product '
            . 'WHERE status = "1"'
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count
            . ' OFFSET ' . $offset);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    /**
     * Returns an array of products
     */
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name,image, price, code, is_new FROM product "
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . "ORDER BY id ASC "
                . "LIMIT " . self::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['code'] = $row['code'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $products;
        }
    }


    /**
     * Returns product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    /**
     * Returns total products in Category
     */
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1" AND category_id ="' . $categoryId . '"');
        //Определяет, что метод fetch должен возвратить каждую строку как ассоциативный массив,
        //имена ключей массива будут соответствовать именам столбцов в наборе результата.
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];


    }

    /**
     * Returns total products
     */
    public static function getTotalProducts()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1"');
        //Определяет, что метод fetch должен возвратить каждую строку как ассоциативный массив,
        //имена ключей массива будут соответствовать именам столбцов в наборе результата.
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];


    }

    
    /**
     * Returns an array of recommended products
     */
    public static function getRecommendedProducts()
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, image, code, price, is_new FROM product WHERE status = "1" AND is_recommended = "1" ORDER BY id DESC');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductByIds($productsIds)
    {
        $db = Db::getConnection();
        $products = array();
        $productsIdsNew = implode(",", $productsIds);
        $result = $db->query("SELECT * FROM product WHERE status = '1' AND id in ($productsIdsNew)");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }

    public static function getProductsList($page = 1)
    {
       $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT id, name,image, price, code, is_new FROM product ORDER BY id ASC LIMIT ' . self::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset);
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function deleteProductById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM product WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function createProduct($options)
    {
        $db = Db::getConnection();

        //$sql = "INSERT into product (name,code,price,category_id,brand,availability,description,is_new,is_recommended,status ) VALUES (:name,:code,:price,:category_id,:brand,:availability,:description,:is_new,:is_recommended,:status)";
        $sql = "INSERT into product (name,image,code,upc,price,category_id,availability,is_new,is_recommended,status ) VALUES (:name,:image,:code,:upc,:price,:category_id,:availability,:is_new,:is_recommended,:status)";

        $result = $db->prepare($sql);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':upc', $options['upc'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_STR);
        //$result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_STR);
        //$result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_STR);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);


        if ($result->execute()) {
            return $db->lastInsertId();
        }
    }

    public static function updateProductById($id, $options)
    {
        $db = Db::getConnection();

        $sql = "UPDATE product SET name = :name,code = :code,price = :price ,category_id = :category_id,brand = :brand,availability = :availability, description = :description,is_new = :is_new,is_recommended = :is_recommended,status = :status WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_STR);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_STR);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getImage($id)
    {

        $noImage = 'no-image.jpg';
        $path = '/upload/images/products/';
        $pathToProductsImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductsImage)) {

            return $pathToProductsImage;
        }
        return $path . $noImage;
    }
    public static function importProductFromFile(){
        $file_handle = fopen("upload/content.csv", "r");
        $recommended = 0;
        $new = 0;
        $i = 0;
        $category = [1,2,3,4];
        while (!feof($file_handle)) {
                if($i%10 == 0){
                    $recommended = 1;
                }
                else{
                    $recommended = 0;
                }
                if($i%20 == 0){
                    $new = 1;
                }
                else{
                    $new = 0;
                }
                $line = fgets($file_handle);
            if($i != 0){
                try{
                    $options = [];
                    $pieces = explode(",", $line);
                    $options['image'] = trim($pieces[0],'"');
                    $options['code'] = $pieces[1];
                    $options['upc'] = $pieces[2];
                    $options['price'] = $pieces[3];
                    $options['name'] = trim($pieces[4],'"');

                    $options['category_id'] = array_rand($category,1)+1;
                    $options['availability'] = 1;
                    $options['is_new'] = $new;
                    $options['is_recommended'] = $recommended;
                    $options['status'] = 1;
                    $id = Product::createProduct($options);
                    echo $id;
                }
                catch (Exception $e){
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }

            }

            $i++;
            if($i == 10000) break;
        }
        fclose($file_handle);
    }

}