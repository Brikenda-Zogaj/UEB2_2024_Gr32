<?php
$servername = "localhost";
$username = "zanna";
$password = "helloyou";
$dbname = "web2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS ourTeam(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    position VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    number VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) !== TRUE) {
    echo "Gabim gjatë krijimit të tabelës: " . $conn->error;
}

function insertUser($conn, $first_name, $last_name, $position, $email, $number) {
    // Kontrolloni nëse rreshti ekziston në bazën e të dhënave
    $sql_check = "SELECT * FROM ourTeam WHERE first_name = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $first_name);
    $stmt_check->execute();
    $result = $stmt_check->get_result();
    
    if ($result->num_rows > 0) {
        
        return;
    }

    // Nëse rreshti nuk ekziston, atëherë shtoni atë në tabelë
    $sql = "INSERT INTO ourTeam (first_name, last_name, position, email, number) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssss", $first_name, $last_name, $position, $email, $number);
    if ($stmt->execute() !== TRUE) {
        echo "Gabim gjatë insertimit: " . $stmt->error;
    } 
}

$ourTeam = [
    ['Syzana', 'Kryeziu', 'Agjente e pronave', 'kryeziusyzana@gmail.com', '049381309'],
    ['Gresa', 'Halili', 'Menaxhere e shitjeve', 'hresahalili@gmail.com', '049123321'],
    ['Brikenda', 'Zogaj', 'Menaxhere e Blerjeve', 'brikendazogaja@gmail.com', '049743873'],
    ['Blerina', 'Balaj', 'Menaxhere e marketingut', 'blerinabalaja@gmail.com', '049238738'],
    ['Anna', 'Gashi', 'unemployed', 'annagashi@gmail.com', '049322455']
];

foreach ($ourTeam as $teamMember) {
    insertUser($conn, $teamMember[0], $teamMember[1], $teamMember[2], $teamMember[3], $teamMember[4]);
}

function updateEmail($conn, $email, $first_name) {
    $sql = "UPDATE ourTeam SET email = ? WHERE first_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $first_name);
    if ($stmt->execute() !== TRUE) {
        echo "Gabim gjatë përditësimit: " . $stmt->error;
    } 
}

$email = 'syzanakryeziu@gmail.com';
$first_name = 'Syzana';
updateEmail($conn, $email, $first_name);

function deleteUser($conn, $first_name) {
    $sql = "DELETE FROM ourTeam WHERE first_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $first_name);
    if ($stmt->execute() !== TRUE) {
        echo "Gabim gjatë fshirjes: " . $stmt->error;
    } 
}
$first_name = 'Anna';
deleteUser($conn, $first_name);

function transmitValue(&$value) {
    $value = "Modifikuar: " . $value;
}
$example_value = "Vlera origjinale";
transmitValue($example_value);
//echo $example_value; 

$names = ["Syzana", "Gresa", "Brikenda", "Blerina", "Anna"];
foreach ($names as $key => &$name) {
    if ($name === "Anna") {
        unset($names[$key]); // Fshirja e elementit "Anna"
    }
}
//print_r($names);

//$conn->close();
?>