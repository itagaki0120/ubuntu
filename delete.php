<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'itagakidaiki';
$password = 'morijyobi';
try {
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $id = $_GET['id'];

        $sql = "delete from user where id=:id";
        $stmt=$dbh->prepare($sql,);
        $prams=array(':id'=>$id);
        $stmt->execute($prams);

        header('Location: index.php?fg=1');
    
} catch (PDOException $e) {
        print "Failed: " . $e->getMessage() . "\n";
        exit();
    }

?>