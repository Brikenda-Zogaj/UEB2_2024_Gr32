<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
<?php
// Lexo përmbajtjen e një skedari
function lexoSkedarin($emriSkedarit) {
    $permbajtja = file_get_contents($emriSkedarit);
    return $permbajtja;
}

// Shkruaj në një skedar
function shkruajNeSkedar($emriSkedarit, $permbajtja) {
    $skedari = fopen($emriSkedarit, "w") or die("Nuk mund të hapet skedari!");
    fwrite($skedari, $permbajtja);
    fclose($skedari);
}
?>

</body>
</html>