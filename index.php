<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: #34db69;
            padding: 10px 15px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #34db63;
            color: white;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #2c5036;
        }
    </style>
</head>
<body>
<h1>Товары</h1>
<nav>
    <a href="/admin/goods/">Зайти как администрация</a>
    <a href="p1">Товары</a>
</nav>

<h1 id="p1">Товары</h1>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Арктикул</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($goods as $good): ?>
        <tr>
            <td><?= $good['id'] ?></td>
            <td><?= $good['name'] ?></td>
            <td><?= $good['price'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
</html>