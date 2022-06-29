
<html>
<head>
<title>Home</title>
</head>
<body bgcolor="rosybrown">
<?php 
session_start();

?>
    <p>Selamat Datang</p>
    <H1>
    <?php 
        echo $_SESSION['username'];
    ?>
    </H1>

<table border="0" cellpadding="3" cellspacing="3">
</table>
</body>
</html>