<?php
$servername = "localhost";
$username = "zanna";
$password = "helloyou";
$dbname = "web2";

// Krijimi i lidhjes
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollimi i lidhjes
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS  users (
    
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(255) NOT NULL
    
    )";
    
    if ($conn->query($sql) === TRUE) {
        //echo "Tabela Users u krijua me sukses";
    } else {
        echo "Gabim gjatë krijimit të tabelës: " . $conn->error;
    }
    $sql = "INSERT INTO users (first_name, last_name, username, email, password)
    VALUES ('Syzana', 'Kryeziu', 'zannak', 'kryeziusyzana@gmail.com', 'zanna.123'),
    ('Gresa', 'Halili', 'gresah', 'hresahalili@gmail.com', 'gresah.123'),('Brikenda', 'Zogaj', 'brikendaz', 'brikendazogaja@gmail.com', 'brikenda.123')
   ,('Blerina', 'Balaj', 'blerinab', 'blerinabalaja@gmail.com', 'blerina123'),('Anna', 'Gashi', 'annag', 'annagashi@gmail.com', 'anna.123')" ;
if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Gabim gjatë insertimit: " . $conn->error;
}   

   
    
    $sql = "UPDATE users SET email='syzana.kryeziu@gmail.com' WHERE first_name='Syzana'";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Gabim gjatë update-imit: " . $conn->error;
    }


    $sql = "DELETE FROM users WHERE first_name='Anna'";
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Gabim gjatë fshirjes: " . $conn->error;
    }
     
    $conn->close();

?>

