<?php
    include 'db_connection.php';
    function noOfNewFighters(){
        $conn = OpenCon();
        $sql = "SELECT count(*) AS total FROM catInfo";
        $result = $conn->query($sql);
        $noOfNewFighters = mysqli_fetch_array($result);
        closeCon($conn);
        return $noOfNewFighters['total'];
    }
    function fighterIds(){
        $arr = array();
        $conn = OpenCon();
        $sql = "SELECT Id FROM catInfo GROUP BY Id";
        $result = $conn->query($sql);
        while($fighterIds = mysqli_fetch_array($result)){
            array_push($arr, $fighterIds['Id']);
        }
        closeCon($conn);
        return $arr;
    }
    function getFighter($id){
        $conn = OpenCon();
        $sql = "SELECT CatName, CatAge, CatInfo, Wins, Loss, ImgUrl FROM catInfo WHERE id=$id";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        CloseCon($conn);
        return $row;
    }
    function getImage($id){
        $conn = OpenCon();
    // $id = $_GET['id'];
        // do some validation here to ensure id is safe
        $sql = "SELECT catImgName FROM catImgNames WHERE id=$id";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        CloseCon($conn);
        return $row["catImgName"];
    }
    function imageIds(){
        $arr = array();
        $conn = OpenCon();
        $sql = "SELECT Id FROM catImgNames GROUP BY Id";
        $result = $conn->query($sql);
        while($imageIds = mysqli_fetch_array($result)){
            array_push($arr, $imageIds['Id']);
        }
        closeCon($conn);
        return $arr;
    }

    fighterIds();
?>