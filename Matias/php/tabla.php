<!DOCTYPE html>
<html>
<head>
    <title>Artes Marciales</title>
</head>
<body>
    <table >
        <caption>Monthly savings</caption>
        <header>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
        </tr>
    </header>
    <tbody>
<?php
$persons = [
    [
        'name' => 'Adri',
        'lastname' => 'rive',
        'address' => 'bla'
    ],[
        'name' => 'Mati',
        'lastname' => 'Leva',
        'address' => 'bla'
    ],[
        'name' => 'Mati2',
        'lastname' => 'Leva2',
        'address' => 'bla2'
    ]
];
foreach ($persons as $person) {
?>
        <tr>
            <td><?php echo $person['name']; ?></td>
            <td><?php echo $person['lastname']; ?></td>
            <td><?php echo $person['address']; ?></td>
        </tr>
<?php } ?>
    </tbody>
</table>
</body> 
</html>