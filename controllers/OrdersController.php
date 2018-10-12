<?php

require_once 'ControllerTrait.php';

class OrdersController
{
    use ControllerTrait;


    public function newOrder() {
        $products = json_decode($_POST['products']);
        $phone = $_POST['phone'];

        $data = [];

        foreach ($products as $product) {
            $data[] = [$product->id, $product->amount, $phone];
        }

        $this->getDB()->table(['orders'])
            ->insert(['id_products','amount', 'phone'], $data)->exec();

        $this->redirect(ROOT_DIR.'/');
    }
}