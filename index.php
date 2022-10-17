<?php
	require_once 'dbconf.php';
	require_once 'save.php';
?>

<form method="post" action="" style="display:block;width:350px;margin: 10% auto 0;">
    <div>
        用户姓名:<input type="text" name="user" value=""/>
    </div>
    <div>
        留言标题:<input type="text" name="title" value=""/>
    </div>
    <div>
        留言内容:<input type="text" name="content" value=""/>
    </div>
    <button type="submit">提交留言</button>
</form>