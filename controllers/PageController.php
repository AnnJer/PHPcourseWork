<?php
require_once 'ControllerTrait.php';

class PageController
{
    use ControllerTrait;

    public function showHomePage() {

//        $bestSeller = $this->getDB()->query('SELECT * FROM `es` WHERE id = :key1', ['key1' => 1]);


        $bestSeller = $this->getDB()->table(['products'])->select(['name', 'img'])->
                             limit(6)->exec()->getData();


        $categories = $this->getDB()->table(['category'])->select(['name'])->exec()->getData();


        $products = $this->getDB()->table(['products'])->select(['name', 'price', 'img'])->
                    exec()->getData();


        $posts = $this->getDB()->table(['articles'])->select()->
                        limit(6)->exec()->getData();


        $params = [
            'title' => APP_TITLE,
            'page' => 'home',
            'bestSeller' => $bestSeller,
            'categories' => $categories,
            'products'=>$products,
            'posts' => $posts
        ];

        return \core\view('home', $params);
    }

    public function showContactPage(){

        $params = [
            'title' => APP_TITLE,
            'page' => 'contact'
        ];
        return \core\view('contact', $params);
    }

    public function showAboutPage(){

        $bestSeller = $this->getDB()->table(['products'])->select(['name', 'img'])->
        limit(6)->exec()->getData();

        $params = [
            'title' => APP_TITLE,
            'page' => 'about',
           'bestSeller' => $bestSeller
        ];
        return \core\view('about', $params);
    }

    public function showBlogPage(){

        $posts = $this->getDB()->table(['articles'])->select()->
        limit(6)->exec()->getData();

        $params = [
            'title' => APP_TITLE,
            'page' => 'blog',
            'posts' => $posts
        ];
        return \core\view('blog', $params);
    }

    public function showSinglePage($id){

        $posts = $this->getDB()->table(['articles'])->select(['date', 'title', 'text', 'img'])->
        limit(6)->exec()->getData();

        $singlePost = $this->getDB()
            ->table(['articles'])->select()->where([\database\sql\equals('id', $id)])->exec()->getData();

        $comment = $this->getDB()
            ->table(['comments'])->select()->where([\database\sql\equals('id_articles', $id)])->exec()->getData();


        $params = [
            'title' => APP_TITLE,
            'comment'=>$comment,
            'page' => 'blog',
            'singlePost' => $singlePost
        ];
        return \core\view('single', $params);
    }


    public function showLoginPage(){
        $params = [
            'title' => APP_TITLE,
            'page' => 'blog'//,
            //'posts' => $posts
        ];

        return \core\view('login', $params);
    }

    public  function showRegisterPage(){

        $params = [
            'title' => APP_TITLE,
            'page' => 'blog'//,
            //'posts' => $posts
        ];
        return \core\view('register', $params);
    }

}