<?php
header('Content-Type: application/json');
try {
    $db = new PDO('sqlite:../data/bible.sqlite');
    $result = $db->query('SELECT verse, book FROM verses ORDER BY RANDOM() LIMIT 1');
    $verse = $result->fetch(PDO::FETCH_ASSOC);

    echo json_encode($verse);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Connection failed: ' . $e->getMessage()]);
}
?>
