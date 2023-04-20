<?php
include 'employee.php';

echo <<<EOT
<html>
<head>
    <meta charset="utf-8">
    <title>Dolgozók</title>
</head>
<body>
<table>
EOT;

$rowContent = <<<EOT
<tr>
    <td>{{id}}</td>
    <td>{{name}}</td>
    <td>{{city}}</td>
    <td>{{salary}}</td>
    <td>
        <form action="delete.php">
            <input type="hidden" name="id" value="{{id}}">
            <input type="hidden" name="name" value="{{name}}">
            <input type="hidden" name="city" value="{{city}}">
            <input type="hidden" name="salary" value="{{salary}}">
            <button>Törlés</button>
        </form>
    </td>
    <td>
        <form action="modify.php">
            <input type="hidden" name="id" value="{{id}}">
            <input type="hidden" name="name" value="{{name}}">
            <input type="hidden" name="city" value="{{city}}">
            <input type="hidden" name="salary" value="{{salary}}">
            <button>Módosítás</button>
        </form>        
    </td>
</tr>
EOT;

$employees = [
    new Employee(1, 'Erős István', 'Szeged', 345),
    new Employee(2, 'Kezes Norbert', 'Szeged', 395),
    new Employee(3, 'Rendes Katalin', 'Szolnok', 372),
    new Employee(4, 'Csendes Mihály', 'Szolnok', 354),
    new Employee(5, 'Lővér Árpád', 'Szeged', 359)
];

$rows = '';
foreach($employees as $emp) {
    $row = $rowContent;
    $row = str_replace('{{id}}', $emp->id, $row);
    $row = str_replace('{{name}}', $emp->name, $row);
    $row = str_replace('{{city}}', $emp->city, $row);
    $row = str_replace('{{salary}}', $emp->salary, $row);
    $rows .= $row;
}

echo $rows;

echo <<<EOT
</table>
</body>
</html>
EOT;