<?php
header('Content-Type: application/json');

$response = array(
    'message' => 'Bienvenue à la mini application API en PHP !'
);

echo json_encode($response);
?>
