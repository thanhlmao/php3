<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center">
<table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Tuổi</th>
                    <th>Quê</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $sinhvien['id'] ?></td>
                    <td><?= $sinhvien['name'] ?></td>
                    <td><?= $sinhvien['tuoi'] ?></td>
                    <td><?= $sinhvien['quequan'] ?></td>
                </tr>
                   
            </tbody>
        </table>
    
</body>
</html>