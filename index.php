<?php
$db = new SQLite3('database/db.sqlite');

require('./lib/lib.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/assets/script.js"></script>
    <link rel="stylesheet" href="/assets/style.css" />
</head>

<body>

    <a href="/add">tambahkan mahasiswa</a>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>nim</th>
            <th>fakultas</th>
            <th>prodi</th>
            <th>angkatan</th>
        </tr>

        <?php
        $id = 1;
        while ($row = $mahasiswa->fetchArray()) {
            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['nim'] . '</td>';
            echo '<td>' . $row['prodi'] . '</td>';
            echo '<td>' . $row['fakultas'] . '</td>';
            echo '<td>' . $row['angkatan'] . '</td>';
            echo '</tr>';
            

            $id = $id + 1;
        }
        ?>


    </table>

</body>

</html>