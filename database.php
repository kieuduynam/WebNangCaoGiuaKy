<?php
$uri = "mysql://avnadmin:AVNS_IJaVITD16YGX-M-qEXh@mysql-3fe826c8-kieuduynam14112003-60ec.f.aivencloud.com:21923/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=QUANLYSACH";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
