<?php


class AdminCategoryController extends AdminBase
{
    public function actionIndex()
    {

        self::checkAdmin();
        $categoriesList = array();
        $categoriesList = Category::getCategoriesListAdmin();
        require_once(ROOT . '/views/admin_category/index.php');
        return true;

    }

    public function actionDelete($id)
    {

        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Category::deleteCategoryById($id);
            header('Location:/admin/category');
        }
        require_once(ROOT . '/views/admin_category/delete.php');
        return true;
    }

    public function actionCreate()
    {

        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            $erorrs = false;

            if (!isset($name) || empty($name)) {
                $erorrs[] = 'Заполните имя';
            }
            if ($erorrs == false) {
                Category::createCategory($name, $sortOrder, $status);
            }

            header('Location:/admin/category');
        }
        require_once(ROOT . '/views/admin_category/create.php');
        return true;
    }

    public function actionUpdate($id)
    {

        self::checkAdmin();
        $category = Category::getCategoryById($id);
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            if (Category::updateCategoryById($id, $name, $sortOrder, $status)) {
                header('Location:/admin/category');
            }


        }
        require_once(ROOT . '/views/admin_category/update.php');
        return true;
    }
}