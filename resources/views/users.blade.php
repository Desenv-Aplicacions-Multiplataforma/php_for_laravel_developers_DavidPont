<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background: beige;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<nav>
    <?php require '../resources/views/layout/nav.blade.php'?>
</nav>
<header>
    <h1><?=$greeting;?></h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id;?></td>
            <td><?= $user->name;?></td>
            <td><?= $user->surname;?></td>
            <td><?= $user->email;?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</header>
</body>
</html>