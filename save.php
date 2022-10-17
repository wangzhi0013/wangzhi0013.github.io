<?php
if($_POST){
    $query = "INSERT INTO message (user,title,content) values ('$_POST[user]','$_POST[title]','$_POST[content]')";

    $result = mysqli_query($dbLink,$query);

    if(!$result){
        echo '数据保存失败';
        echo mysqli_error();
    }
}
