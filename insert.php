<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fighter</title>
</head>
<body>
<?php 
    include "db_connection.php";
   // header("Content-type:application/json;charset=utf-8");

    $error = false;

    $cname = $_POST["catname"];
    $cage = $_POST["catage"];
    $cinfo = $_POST["catinfo"];
    $wins = $_POST["wins"];
    $loss = $_POST["loss"];
    $imgUrl = $_POST["imgUrl"];

    if(empty($cname) || empty($cage) || empty($cinfo) || (empty($wins) && $wins != 0) ||  (empty($loss) && $loss != 0) || empty($imgUrl)){
        $error = true;
    }
        
    if($error == false){
        $conn = OpenCon();
        $sql="INSERT INTO catInfo (CatName, CatAge, CatInfo, Wins, Loss, ImgUrl)
        VALUES
        ('$_POST[catname]','$_POST[catage]','$_POST[catinfo]','$_POST[wins]','$_POST[loss]','$_POST[imgUrl]')";
        if (!$conn -> query($sql)) {
            echo("Error description: " . $conn -> error);
        } else {
        echo  "<script>
                document.location.href = '/index.php';
            </script>";
        }
        
        closeCon($conn);
    } else {
        echo "<script>
            document.location.href = '/addFighter.php';
            </script>";
    }

?>
</body>
</html>
