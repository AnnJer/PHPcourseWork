<?php
/**
 * Created by PhpStorm.
 * User: ann
 * Date: 20.05.18
 * Time: 22:31
 */

require_once 'ControllerTrait.php';


class AdminController
{
    use ControllerTrait;

    public function listAdminPage($tableName, $page){

        if (!AuthService::isAdmin()) {
            $this->redirect(ROOT_DIR);
        }

        $page = (int) $page;

        $fields = $this->getDB()->table(['fields_meta'])
            ->select()->where([\database\sql\equals('table_name', $tableName)])->exec()->getData();

        if (!$fields) {
            return 'Page not found';
        }

        $offset = ROW_PER_PAGE*($page-1);

        $data = $this->getDB()->table([$tableName])->select()->limit(ROW_PER_PAGE, $offset)->exec()->getData();

        $postsNum = $this->getDB()->table([$tableName])->select(['COUNT(*)'])->exec()->getData()[0];

        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
//            'pagesNum' => ceil($postsNum/ROW_PER_PAGE),
            'data' => $data,
            'fields' => $fields,
            'tab' => ucfirst($tableName),
            'pageName'=>$tableName
        ];

        return \core\view('adminList', $params);
    }


    public function addShowAdminPage($tableName){

        if (!AuthService::isAdmin()) {
            $this->redirect(ROOT_DIR);
        }

        $fields = $this->getDB()->table(['fields_meta'])
            ->select()->where([\database\sql\equals('table_name', $tableName)])->exec()->getData();


        if(!$fields){
            return "Error";
        }


        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
            'fields' => $fields,
            'tab' => ucfirst($tableName),
            'pageName'=>$tableName
        ];

        return \core\view('adminAdd', $params);

    }


    public function addProcessAdminPage($tableName){


        if (!AuthService::isAdmin()) {
            $this->redirect(ROOT_DIR);
        }

        $fields = $this->getDB()->table(['fields_meta'])
            ->select()->where([\database\sql\equals('table_name', $tableName)])->exec()->getData();


        if(!$fields){
            return "Error";
        }

        $fieldNames = [];

        foreach ($fields as $field)
        {
            if ($field['type'] == 'disabled') {
                continue;
            }
            $fieldNames[] = $field['name'];
        }

        $data = [];

        foreach ($fieldNames as $name){

//            if ($name == 'id') {
//              continue;
//            }

            if(!isset($_POST[$name])){

                $params = [
                    'title' => APP_TITLE,
                    'page' => 'Admin | Add element',
                    'fields' => $fields,
                    'error' => 'Вы не заполнили все поля'
                ];

                return \core\view('adminAdd', $params);
            }
            $data[] = $_POST[$name];
        }


        $this->getDB()->table([$tableName])->insert($fieldNames,
            [$data])->exec()->getQuery();


        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
            'data' => $data,
            'fields' => $fields,
            'tab' => ucfirst($tableName),
            'pageName'=>$tableName
        ];


//        return \core\view('adminList', $params);

        $this->redirect(ROOT_DIR.'/admin/list/'.$tableName.'/1');
    }





    public  function deleteAdminPage($tableName, $id){

        $this->getDB()->table([$tableName])->delete()->where([\database\sql\equals('id', $id)])->exec();


         $this->redirect(ROOT_DIR.'/admin/list/'.$tableName.'/1');
    }




    public  function updateShowAdminPage($tableName, $id){
        if (!AuthService::isAdmin()) {
            $this->redirect(ROOT_DIR);
        }




        $data = $this->getDB()->table([$tableName])->
                        select()->where([\database\sql\equals('id', $id)])->
                        exec()->getData()[0];


        $fields = $this->getDB()->table(['fields_meta'])
            ->select()->where([\database\sql\equals('table_name', $tableName)])->exec()->getData();


        if(!$data){
            return "Error";
        }

        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
            'data' => $data,
            'fields'=>$fields,
            'tab' => ucfirst($tableName),
            'pageName'=>$tableName
        ];

        return \core\view('adminUpdate', $params);

    }


    public function updateProcessAdminPage($tableName, $id){

        $fields = $this->getDB()->table(['fields_meta'])
            ->select()->where([\database\sql\equals('table_name', $tableName)])->exec()->getData();


        $fieldNames = [];

        foreach ($fields as $field)
        {
            if ($field['type'] == 'disabled') {
                continue;
            }
            $fieldNames[] = $field['name'];
        }

        $data  = [];

        foreach ($fieldNames as $name){

//            if ($name == 'id') {
//              continue;
//            }

            if(!isset($_POST[$name])){

                $params = [
                    'title' => APP_TITLE,
                    'page' => 'Admin | Add element',
                    'fields' => $fields,
                    'error' => 'Вы не заполнили все поля'
                ];

                return \core\view('adminAdd', $params);
            }
            $data[] = $_POST[$name];
        }


        $ttt = $this->getDB()->table([$tableName])->update($data)->where([\database\sql\equals('id', $id)])->exec();


        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
            'data' => $data,
            'fields' => $fields,
            'tab' => ucfirst($tableName),
            'ttt'=>$ttt,
            'pageName'=>$tableName
        ];


//        return \core\view('adminList', $params);

        $this->redirect(ROOT_DIR.'/admin/list/'.$tableName.'/1');


    }


}