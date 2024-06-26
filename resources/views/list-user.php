<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['name']?></td>
                </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>
    
    <h1>Xin chào các bạn</h1>
</body>
</html>