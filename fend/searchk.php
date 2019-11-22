<?php
include "connect.php";
if(isset($_POST['query'])){
    $output = '';
    $q = "select * from keywords where keyword like '%".$_POST['query']."%'";
    $r = mysqli_query($con,$q);
    $output = '<ul class="uii">';
    if(mysqli_num_rows($r) > 0){
        while($row = mysqli_fetch_array($r)){
            $output .= '<li class="lii">'.$row['keyword'].'</li>';
        }
    }
    else{
        $output .= '<li> Keyword  Not Found</li>';
    }
    $output .= '</ul>';
    echo $output;
}

?>