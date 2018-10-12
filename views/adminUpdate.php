<?php //$params['ttt']?>

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

        <form method="post" action="<?= ROOT_DIR.'/admin/update/'.$params['pageName'].'/'.$params['data']['id'] ?>" id="form1">


            <?php foreach($params['fields'] as $field) {

                if( $field['type'] == 'disabled'  ) {
                    continue;
                }
                ?>

                <?php
                if ($field['type'] == 'bigText') {
                    ?>
                    <textarea name="<?= $field['name'] ?>">
<?=                     $params['data'][$field['name']] ?>
                     </textarea>

                <?php } else { ?>

                    <input name="<?= $field['name'] ?>" type="<?= $field['type'] ?>"
                         value="<?= $params['data'][$field['name']] ?>" >

                <?php } ?>


            <?php } ?>

<!--            --><?php //foreach (array_combine($params['fields'], $params['data']) as $field => $data) {
//
//                if ($field['type'] == 'disabled' ) {
//                    continue;
//                }
//
//                if ($data['id']) {
//                    continue;
//                }
//                ?>
<!--                --><?//= $field['name'] ?><!--:-->
<!--                <input name="--><?//= $field['name'] ?><!--" type="--><?//= $field['type'] ?><!--" value="--><?//= $data?><!--"-->
<!---->
<!--                    --><?php //if($field['type']=='file'){?>
<!--                        accept="image/jpeg,image/png"-->
<!--                    --><?//}?><!-- >-->
<!--                <br>-->
<!--            --><?php //} ?>
            <input type="submit">
        </form>

        <?php foreach($params['files'] as $fileName => $value) { ?>
            <form method="post" enctype="multipart/form-data" action="<?= ROOT_DIR.'/admin/update/'.$params['pageName'].'/'.$params['data']['id'] ?>" id="form2">
                <div class="preview">
                    <img src="<?= \core\Linker::linkImage($value) ?>">
                </div>
                <input type="hidden" name="fieldName" value="<?= $fileName ?>">
                <input name="<?= $fileName ?>" type="file" accept="image/jpeg,image/png,image/jpg">
                <input type="submit" name="isFile" value="upload">
            </form>
        <?php } ?>
    </div>
</section>


<style>
    *{
        padding: 0;
        margin: 0;
    }

    .preview img{
        width: 50%;
    }

    .preview{
        display: flex;
        justify-content: center;
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
        justify-content: flex-start;
        flex-wrap: nowrap;
    }

    form{
        width: 50%;
        margin: 30px auto;
        box-shadow: 2px 2px 2px #000;
        padding: 15px 30px;
    }

    form input{
        width: 100%;
        padding: 5px;
        border: none;
        border-bottom: 1px solid #0c5460;
        margin: 15px 0;
    }

    form textarea{
        width: 100%;
        padding: 5px;
        border: none;
        border-bottom: 1px solid #0c5460;
        margin: 15px 0;
        height: 400px;
    }

</style>

</body>
</html>