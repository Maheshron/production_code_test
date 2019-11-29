<?php 
include "connect.php";
if(isset($_GET['artical_id'])){
    $id = $_GET['artical_id'];
    $query = "select * from articals where artical_id='$id'";
    $result = mysqli_query($con,$query);
    $data = mysqli_fetch_array($result);
    $nameoffile = $data['artical_short_name'];
    $replace = str_replace(" ","-",$nameoffile);
    $final = $replace.".pdf";
    $file = '../edelweiss/upload/artical_pdf/'.$final;
    if(file_exists($file)){
        header('Content-Description'.$data['artical_name']);
        header('Content-Disposition:attachment;filename = "'.$final.'" ');
        readfile($file);
    }
}

?>