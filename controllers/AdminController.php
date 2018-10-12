<?php


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
        $fileNames = [];

        foreach ($fields as $field)
        {
            if ($field['type'] == 'disabled') {
                continue;
            }

            if ($field['type'] == 'file') {
                $fileNames[] = $field['name'];
            }

            $fieldNames[] = $field['name'];
        }

        $data = [];

        foreach ($fieldNames as $name){

//            if ($name == 'id') {
//              continue;
//            }

            if (in_array($name, $fileNames)) {
                $data[] = $this->uploadImage($name);
                continue;
            }

            if (!isset($_POST[$name]) || !$_POST[$name]){

                $params = [
                    'title' => APP_TITLE,
                    'page' => 'Admin | Add element',
                    'fields' => $fields,
                    'error' => 'Вы не заполнили все поля'
                ];

                return \core\view('adminAdd', $params);
            }

            if (in_array($name, $fileNames)) {
                $data[] = $this->uploadImage($name);
                continue;
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
        if (!AuthService::isAdmin()) {
            $this->redirect(ROOT_DIR);
        }

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

        $files = [];

        foreach ($fields as $index => $field) {
            if ($field['type'] == 'file') {
                $files[$field['name']] = $data[$field['name']];
                unset($data[$field['name']]);
                unset($fields[$index]);
            }
        }


        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
            'data' => $data,
            'fields'=>$fields,
            'tab' => ucfirst($tableName),
            'pageName'=>$tableName,
            'files' => $files
        ];

        return \core\view('adminUpdate', $params);

    }


    private function uploadImage($fieldName) {
        $target_dir = ROOT."/images/";
        $target_file = $target_dir . basename($_FILES[$fieldName]["name"]);
        $fileName = basename($_FILES[$fieldName]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES[$fieldName]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES[$fieldName]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        return $fileName;
    }


    public function updateProcessAdminPage($tableName, $id){

        if (!AuthService::isAdmin()) {
            $this->redirect(ROOT_DIR);
        }


        if (isset($_POST['isFile'])) {
            $fieldName = $_POST['fieldName'];
            $fileName = $this->uploadImage($fieldName);

            $data = [
                $fieldName => $fileName
            ];

            $this->getDB()->table([$tableName])->update($data)
                ->where([\database\sql\equals('id', $id)])->exec();
            $this->redirect(ROOT_DIR.'/admin/list/'.$tableName.'/1');
        }


        $fields = $this->getDB()->table(['fields_meta'])
            ->select()->where([\database\sql\equals('table_name', $tableName)])->exec()->getData();


        $fieldNames = [];

        foreach ($fields as $field)
        {
            if ($field['type'] == 'disabled') {
                continue;
            }

            if ($field['type'] == 'file') {
                continue;
            }

            $fieldNames[] = $field['name'];
        }

        $data  = [];

        foreach ($fieldNames as $name){

//            if ($name == 'id') {
//              continue;
//            }

            if(!isset($_POST[$name])  || !$_POST[$name]){

                $params = [
                    'title' => APP_TITLE,
                    'page' => 'Admin | Add element',
                    'fields' => $fields,
                    'error' => 'Вы не заполнили все поля'
                ];



                return \core\view('adminUpdate', $params);
            }
            $data[$name] = $_POST[$name];


        }



         $this->getDB()->table([$tableName])->update($data)
            ->where([\database\sql\equals('id', $id)])->exec();


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


}