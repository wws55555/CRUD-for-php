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
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title..">
        </p>    
        <p>
            <textarea name="description" placeholder="Description.."></textarea>
        </p>
        <p>
            <input type="submit">
        </p>

</body>
</html>
