<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'daiki';
$password = 'Itagaki0120!';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)
       $id = $_POST['id'];
       $name = $_POST['name'];
       $age = $_POST['age'];
        $sql = "insert into user values(:id,:name:age)";
        $stmt=$dbh->prepare($sql);
        $prams=array(':id'=>$id,'name'=>$name,':age'=>$age,);
        $stmt->execute($prams);
        header('Location: index.php?fg=1');
    } catch (PDOException $e) {
        print "Failed: " . $e->getMessage() . "\n";
        exit();
    }

?>