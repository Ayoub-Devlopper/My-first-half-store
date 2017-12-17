<?php
$img=$_GET['im_id'];
$connect=mysqli_connect('localhost','root','rootroot','bob');
$query=mysqli_query($connect,"SELECT img,img_type FROM gallery where id = $img");
$fetch = mysqli_fetch_array($query,MYSQLI_ASSOC);
mysqli_free_result($query);
mysqli_close($connect);
if(!empty($fetch)){
        echo $fetch['img'];
     header("Content-type,{$fetch['img_type']}");
    }
//echo '<pre>',print_r($likes,true),'</pre>' ;
   
?>