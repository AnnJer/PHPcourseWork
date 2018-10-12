<?php

require_once 'ControllerTrait.php';


class APIController
{
    use ControllerTrait;

    public function getProducts(){

        $object = $this->getDB()->table(['products'])->select();

        $filters = [];

        $take = null;
        $skip = null;

        if (isset($_POST['take']) && isset($_POST['skip'])) {
            $take = $_POST['take'];
            $skip = $_POST['skip'];
            unset($_POST['skip']);
            unset($_POST['take']);
        }


        foreach ($_POST as $key => $value){
            $chanks = explode('_', $key, 2);

            if ($chanks[0] =='less') {
                $filters[] = \database\sql\less($chanks[1], $value);
            } elseif ($chanks[0]=='greater')
            {
                $filters[]= \database\sql\greater($chanks[1], $value);
            }else{
                $filters[]= \database\sql\equals($chanks[1], $value);
            }
        }

        if(!empty($filters)){
            $object->where($filters);
        }

        $new = clone $object;
        $count = $new->select(['COUNT(*) as count'])->exec()->getData();

        if ($take != null && $skip != null) {
            $object->limit($take, $skip);
        }

        $data = $object->exec()->getData();

        $result = [
            'data' => $data,
            'count' => $count[0]['count']
        ];

        return $result;
    }

    public function getProductsById()
    {
        if (!isset($_POST['id'])) {
            return '';
        }

        $idArr = $_POST['id'];


        $first = array_shift($idArr);

        $condition = 'SELECT * FROM `products` WHERE id = '.intval($first);

        foreach ($idArr as $id) {
            $condition .= ' OR id = '.intval($id);
        }

        return $this->getDB()->query($condition)->getData();
    }

}