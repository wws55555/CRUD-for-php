<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?PHP
        $file_name = scandir("./data");
        for ($i=0; $i<count($file_name); $i++) {
            if ($file_name[$i]!="." and $file_name[$i]!="..") {
                echo "<li><a href=\"/index.php?id=$file_name[$i]\">$file_name[$i]</li>";
            }
        }
    ?>
    </ol>
    <a href="create.php">create</a>
    <?PHP
        if (isset($_GET['id'])) { ?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
            <form action="delete_process.php" method="post">
                <input type="hidden" name="id" value=<?=$_GET['id']?>>
                <input type="submit" value="delete">
            </form>
    <?PHP
        } ?>
    
    <?PHP
        if (isset($_GET['id'])) {
            $content = file_get_contents("data/".$_GET['id']);
            echo "<h2>".$_GET['id']."</h2>";
            echo "<p>$content</p>";
        } else {
            echo "<p>WEB에 관한 모든것</p>";
        }
    ?>
</body>
</html>
