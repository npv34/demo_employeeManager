<?php
include_once '../Model/Employee.php';
include_once "../Controller/EmployeeManager.php";

$employeeManager = new EmployeeManager('../Database/data.json');
$id = $_REQUEST['id'];

$employee = $employeeManager->getById($id);
if (!$employee) {
    echo "du lieu khong chinh xac";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employeeManager->edit($id, $_REQUEST);
    header('location: ../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../Css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div>
    <form action="" method="post">
        <table>
            <tr>
                <td colspan="2">Edit</td>
            </tr>
            <tr>
                <td>ID</td>
                <td><input type="text" value="<?php echo $employee->getId() ?>"></td>
            </tr>
            <tr>
                <td>FirstName</td>
                <td><input name="first_name" type="text" value="<?php echo $employee->getFirstName() ?>"></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><input name="last_name" type="text" value="<?php echo $employee->getLastName() ?>"></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><input name="birthday" type="date" value="<?php echo $employee->getBirthday() ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input  name="address" type="text" value="<?php echo $employee->getAddress() ?>"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input name="role" type="text" value="<?php echo $employee->getRole() ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Edit</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>