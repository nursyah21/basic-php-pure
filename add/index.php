<?php
$db = new SQLite3('../database/db.sqlite');

require('../lib/lib.php');
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

    <a href="/">kembali</a>
    <form action="/" method="post">
        <label for="name">name</label>
        <input id="name" name="name" type="text" placeholder="nursyah">
        <br>
        <label for="nim">nim</label>
        <input id="nim" name="nim" type="text" placeholder="1201202040">
        <br>
        <label for="fakultas">fakultas</label>
        <input id="fakultas" name="fakultas" type="text" placeholder="informatika">
        <br>
        <label for="prodi">prodi</label>
        <input id="prodi" name="prodi" type="text" placeholder="rekayasa perangkat lunak">
        <br>
        <label for="angkatan">angkatan</label>
        <input id="angkatan" name="angkatan" type="text" placeholder="2023">
        <br>
        <input type="submit" value="submit">        
    </form>

</body>

</html>