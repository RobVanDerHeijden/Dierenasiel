<?php 
if (!isset($paginaTitel)) {
    $paginaTitel = '-'; 
}
if (!isset($paginaNaam)) {
    $paginaNaam = '-'; 
}
echo '
<!DOCTYPE html>
<html lang="nl">
	<head>
		<title>Dierenasiel Bunky | ' . $paginaTitel . '</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <div class="header">
            <div class="header-logo-div">
                <a href="./index.php "><img src="logo-dierenasiel.png" alt="logo-dierenasiel"></a>
            </div>
            <div class="header-slogan-div">
                <h1 class="header-title">Dierenasiel Bunky!</h1>
                <p class="header-slogan">' . $paginaSlogan . '</p>
            </div>
        </div>';
?>
