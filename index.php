<?php
   include_once 'Model/Employee.php';
   include_once "Controller/EmployeeManager.php";

   $employeeManager = new EmployeeManager('Database/data.json');
   $employees = $employeeManager->getAll('Database/data.json');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="Css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <table id="list-employee">
        <tr>
            <td colspan="6">
                Danh sach nhan su
            </td>
        </tr>
        <tr>
            <th>STT</th>
            <th>Full Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Role</th>
            <th></th>
        </tr>
        <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td>1</td>
            <td><?php echo $employee->getFullName() ?></td>
            <td><?php echo $employee->getBirthday() ?></td>
            <td>Viet tri</td>
            <td>Student</td>
            <td>
                <a href="">Delete</a>
                <a href="View/edit.php?id=<?php echo $employee->getId() ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>