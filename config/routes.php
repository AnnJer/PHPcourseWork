<?php

    use function \core\route;

    return [

        route('', 'PageController/showHomePage'),
        route('contact', 'PageController/showContactPage'),
        route('about', 'PageController/showAboutPage'),
        route('blog', 'PageController/showBlogPage'),
        route('single/([0-9]+)', 'PageController/showSinglePage/$1'),
//        route('login', 'PageController/showLoginPage'),
//        route('register', 'PageController/showRegisterPage'),

        // auth
        route('login', 'AuthController/showLoginForm', GET),
        route('login', 'AuthController/processLogin', POST),


        route('register', 'AuthController/showRegistrationForm', GET),
        route('register', 'AuthController/processRegistration', POST),

        route('logout', 'AuthController/logout'),

        route('admin/list/([a-z]+)/([0-9]+)', 'AdminController/listAdminPage/$1/$2'),

        route('admin/add/([a-z]+)', 'AdminController/addShowAdminPage/$1', GET),
        route('admin/add/([a-z]+)', 'AdminController/addProcessAdminPage/$1', POST),

        route('admin/delete/([a-z]+)/([0-9]+)', 'AdminController/deleteAdminPage/$1/$2'),

        route('admin/update/([a-z]+)/([0-9]+)', 'AdminController/updateShowAdminPage/$1/$2', GET),
        route('admin/update/([a-z]+)/([0-9]+)', 'AdminController/updateProcessAdminPage/$1/$2', POST),



        route('confirm', 'AuthController/showLoginForm')

        // ([a-z]+)



    ];