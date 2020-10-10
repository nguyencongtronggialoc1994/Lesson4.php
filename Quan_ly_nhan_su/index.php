<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    FirstName:<input type="text" name="firstname" placeholder="firstname"><br><br>
    LastName:<input type="text" name="lastname" placeholder="lastname"><br><br>
    Birthday:<input type="text" name="birthday" placeholder="birthday"><br><br>
    Address:<input type="text" name="address" placeholder="address"><br><br>
    Position:<input type="text" name="possition" placeholder="possition"><br><br>
    <button type="submit" name="themvao">add</button>
</form>
<table border="1">
    <tr>
        <th>Stt</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Position</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>
<?php
include 'EmployeeManager.php';
include 'Employee.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $bod = $_POST['birthday'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $employee = new Employee($first, $last, $bod, $address, $position);
    $employeeManager = new EmployeeManager();
    $employeeManager->add($employee);
    var_dump($employeeManager);
//    $employeeManager->display($employee);
}
?>
</body>
</html>
