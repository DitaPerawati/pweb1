<?php
$dataFile = 'data/alumni.json';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents($dataFile), true) ?: [];

    $newAlumni = [
        'nim' => $_POST['nim'],
        'name' => $_POST['name'],
        'major' => $_POST['major'],
        'year' => $_POST['year']
    ];
    $data[] = $newAlumni;
    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
    echo json_encode(['status' => 'success']);
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $data = json_decode(file_get_contents($dataFile), true);
    echo json_encode($data);
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $data = json_decode(file_get_contents($dataFile), true);
    $index = $_GET['index'];
    unset($data[$index]);
    $data = array_values($data);
    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
    echo json_encode(['status' => 'success']);
    exit();
}
?>