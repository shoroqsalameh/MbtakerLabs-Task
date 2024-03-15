<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rgn = $_POST['rgn'];
    $feed = $_POST['feed'];

    $data = array(
        'rgn' => $rgn,
        'feed' => $feed
    );
    $json_data = json_encode($data);
    file_put_contents('data.json', $json_data);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assests";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO assest (assest_type, assest_details) VALUES (:rgn, :feed)");
        $stmt->bindParam(':rgn', $rgn);
        $stmt->bindParam(':feed', $feed);
        $stmt->execute();

        echo json_encode(array('message' => 'Data received successfully!'));
    } catch(PDOException $e) {
        echo json_encode(array('error' => 'Error: ' . $e->getMessage()));
    }
    $conn = null;
} else {
    echo json_encode(array('error' => 'Error: No POST request received.'));
}
?>
