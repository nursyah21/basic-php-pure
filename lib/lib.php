<?php
if (!$db) {
    die('Error opening database: ' . $db->lastErrorMsg());
}

function query($sql, $params = [])
{
    global $db;

    try {
        $stmt = $db->prepare($sql);
        if (isset($params) && !empty($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value, SQLITE3_TEXT);
                if (is_numeric($value)) {
                    $stmt->bindValue($key, $value, SQLITE3_INTEGER);
                } elseif (is_bool($value)) {
                    $stmt->bindValue($key, $value, SQLITE3_INTEGER);
                } else {
                    $stmt->bindValue($key, $value, SQLITE3_TEXT);
                }
            }
        }
        $result = $stmt->execute();
        return $result;
    } catch (\Throwable $th) {
        echo 'Error: ' . $th->getMessage();
    }
}

$mahasiswa = query('SELECT * FROM mahasiswa');


function inputData() {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $angkatan = $_POST['angkatan'];

    $sql = 'INSERT INTO mahasiswa (name, nim, prodi, fakultas, angkatan) VALUES (?, ?, ?, ?, ?)';
    $params = ['',$name, $nim, $prodi, $fakultas, $angkatan];
    
    query($sql, $params);

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    inputData();
}