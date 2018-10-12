
<!DOCTYPE html>
<html>
<head>
    <title>Admin bar</title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <div class="links">
        <a href="<?= ROOT_DIR ?>">Home</a>
        <a href="<?= ROOT_DIR.'/logout' ?>">Log Out</a>
    </div>
</header>

<section class="content">
    <div class="sidebar">
        <div class="user">
            <?= AuthService::getName() ?>
        </div>

        <div class="menu">
            <div class="item"><a href="<?= ROOT_DIR.'/admin/list/products/1' ?>">Products</a></div>
            <div class="item"><a href="<?= ROOT_DIR.'/admin/list/category/1' ?>">Categories</a></div>
            <div class="item"><a href="<?= ROOT_DIR.'/admin/list/orders/1' ?>">Orders</a></div>
            <div class="item"><a href="<?= ROOT_DIR.'/admin/list/clients/1' ?>">Users</a></div>
            <div class="item"><a href="<?= ROOT_DIR.'/admin/list/articles/1' ?>">Articles</a></div>
        </div>
    </div>



<!--    <form method="post" action="--><?//= ROOT_DIR.'/admin/add/'.$params['pageName'] ?><!--" id="form1">-->
<!--        --><?php //foreach ($params['fields'] as $field) {?>
<!--        <div class="group">-->
<!--                <input  name="--><?//= $field['name'] ?><!--"-->
<!--                    --><?php //if($field['type']=='file'){?>
<!--                        accept="image/jpeg,image/png"-->
<!--                    --><?//}?>
<!--                        type="--><?//= $field['type'] ?><!--" required >-->
<!--                <span class="bar"></span>-->
<!--                <label>--><?php //if ($field['name'] == 'id' ) {continue;} ?>
<!--                    --><?//= $field['name'] ?><!--</label>-->
<!---->
<!--        </div>--><?php //} ?>
<!--    </form>-->
<!--    <button type="submit" form="form1" value="Submit">Submit</button>-->
<!---->



    <div class="tableContent">

        <?php
        if (isset($params['error'])) {
            ?>
            <div class="error">
                <?= $params['error'] ?>
            </div>
            <?php
        }
        ?>

        <form method="post" action="<?= ROOT_DIR.'/admin/add/'.$params['pageName'] ?>" id="form1" enctype="multipart/form-data">
            <?php foreach ($params['fields'] as $field) {

                if ($field['name'] == 'id' ) {continue;} ?>
                <?= $field['name'] ?>

                <?php
                 if ($field['type'] == 'bigText') {
                ?>
                     <textarea name="<?= $field['name'] ?>">

                     </textarea>

                <?php } else { ?>

                     <input name="<?= $field['name'] ?>" type="<?= $field['type'] ?>"
                         <?php if($field['type']=='file'){?>
                             accept="image/jpeg,image/png"
                         <?}?> >

                <?php } ?>

                <br>
            <?php } ?>
        </form>
        <button type="submit" form="form1" value="Submit">Submit</button>
    </div>
</section>


<style>


    *{
        padding: 0;
        margin: 0;
    }

    header{
        padding: 15px;
        box-shadow: 1px 1px 1px #000;
    }
    .links{
        display: flex;
        justify-content: flex-end;
    }

    .links a{
        margin: 0 15px;
        display: inline-block;
    }

    .sidebar{
        width: 300px;
        background-color: #555;
        color: #fff;
    }

    .user{
        padding: 15px;
        font-size: 18px;
        border-bottom: 2px solid crimson;
    }

    .menu .item{
        padding: 15px;
        border-bottom: 1px solid #1a404b;
    }

    .menu .item a{
        color: #fff;
        display: block;
    }

    .content{
       display: flex;
        ju dstify-content: flex-start;
        flex-wrap: nowrap;
    }

    .tableContent {
        width: 100%;
    }

    .tableTools{
        padding: 15px;
        box-shadow: 1px 1px 1px #000;
        border: 1px solid #000;
        margin: 20px 10px;
        display: flex;
        justify-content: space-between;
    }

    /*label {*/
        /*color: #999;*/
        /*font-size: 18px;*/
        /*position: absolute;*/
        /*pointer-events: none;*/
        /*left: 10px;*/
        /*top: 15px;*/
        /*transition: 0.2s ease all;*/
        /*-moz-transition: 0.2s ease all;*/
        /*-webkit-transition: 0.2s ease all;*/
    /*}*/

    /*!* active state *!*/
    /*input:focus ~ label, input:valid ~ label {*/
        /*top: -15px;*/
        /*font-size: 14px;*/
        /*color: #5264AE;*/
    /*}*/


    /*.bar {*/
        /*position: relative;*/
        /*display: block;*/
        /*width: 320px;*/
    /*}*/
    /*.bar:before, .bar:after {*/
        /*content: "";*/
        /*height: 2px;*/
        /*width: 0;*/
        /*bottom: 0;*/
        /*position: absolute;*/
        /*background: #5264AE;*/
        /*transition: 0.2s ease all;*/
        /*-moz-transition: 0.2s ease all;*/
        /*-webkit-transition: 0.2s ease all;*/
    /*}*/
    /*.bar:before {*/
        /*left: 50%;*/
    /*}*/
    /*.bar:after {*/
        /*right: 50%;*/
    /*}*/

    /*!* active state *!*/
    /*input:focus ~ .bar:before,*/
    /*input:focus ~ .bar:after {*/
        /*width: 50%;*/
    /*}*/


    /*table{*/
        /*width: 100%;*/
        /*text-align: left;*/
        /*margin: 30px 10px;*/
    /*}*/

    /*th, td {*/
        /*border-bottom: 1px solid #ddd;*/
        /*padding: 5px 0;*/
    /*}*/


    /*.group {*/
        /*position: relative;*/
        /*margin-bottom: 30px;*/
    /*}*/

    /*input {*/
        /*font-size: 16px;*/
        /*padding: 10px;*/
        /*display: block;*/
        /*width: 300px;*/
        /*border: none;*/
        /*border-bottom: 1px solid #ccc;*/
    /*}*/
    /*input:focus {*/
        /*outline: none;*/
    /*}*/

</style>

</body>
</html>



