<?php

namespace app\controllers;

use app\Router;

class ProductController
{
    static public function index(Router $router)
    {
        $search = $_GET['search'] ?? '';
        $products = $router->db->getProducts($search);
        return $router->renderView('products/index.php', [
            'products' => $products,
            'search' => $search
        ]);
    }

    static public function create(Router $router)
    {
        return $router->renderView('products/create.php', [
            'products' => $products,
            'search' => $search
        ]);
    }

    static public function update()
    {
        echo "update page";
    }

    static public function delete()
    {
        echo "delete page";
    }
}
