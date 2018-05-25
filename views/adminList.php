
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

            <div class="tableTools">
                <span><?= $params['tab'] ?></span>
                <a href="<?= ROOT_DIR.'/admin/add/'.$params['pageName'] ?>">add</a>
            </div>


            <table>
                <tr>
                    <?php foreach ($params['fields'] as $field) { ?>
                        <th><?= $field['caption'] ?></th>
                    <?php } ?>
                    <th>Actions</th>
                </tr>

                <?php foreach ($params['data'] as $row) { ?>


                    <tr>
                        <?php foreach ($params['fields'] as $field) { ?>

                            <td><?= $row[$field['name']] ?></td>

                        <?php } ?>
                        <td><a href="<?= ROOT_DIR.'/admin/update/'.$params['pageName'].'/'.$row['id'] ?>">Update</a></td>
                        <td><a href="<?= ROOT_DIR.'/admin/delete/'.$params['pageName'].'/'.$row['id'] ?>">Delete</a></td>
                    </tr>

                <?php } ?>

            </table>


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
            justify-content: flex-start;
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

        table{
            width: 100%;
            text-align: left;
            margin: 30px 10px;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 5px 0;
        }

    </style>

</body>
</html>



