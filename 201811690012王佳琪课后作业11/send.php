 <?php
    $name = $_POST["name"];

    if( $name != ""){
        $content = $_POST["content"];
        $addtime = date("Y-m-d h:i:s");
        $link = mysqli_connect("127.0.0.1","root","pass");//PHP连接数据库
        if( $link)
            echo "ok!<br>";
        else {
            echo "bad!<br>";
        }
        mysqli_select_db($link,"gbook");//选择数据库
        $insert = "insert into message(author,addtime,content,reply) values('$name','$addtime','$content','')";
        mysqli_query($link,$insert);
        mysqli_close($link);
        echo "<script language=javascript>alert('留言成功，查看留言.');location.href='index.php';</script>";
    }
    mysqli_close($link);
 
 ?>
 
<html>
 
<head>
    <title>留言板</title>
</head>
 
<body>
    <table border=1 cellspacing=0 cellspadding=0 style="border-collapse:collapse" align=center width=400 bordercolor=black>
        <tr>
            <td height=100 bgcolor=#6c6c6c>
                <font style="font-size:30px" color=#ffffff face="黑体">留言本</font>
            </td>
        </tr>
        <tr>
            <td height=25>
                 <a href=send.php>[撰写留言]</a> 
				 <a href=logout.php>[退出]</a> 
            </td>
        </tr>
        <tr>
            <td height=200>
                <form method="POST" action="send.php">
                    <table border="1" width="95%" id="table1" cellspacing="0" cellpadding="0" bordercolor="#808080" style="border-collapse:collapse" height="265">
                        <tr>
                            <td colspan="2" height="29">
                                <p align="center">填写留言</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%">
                                <p align="right">名字</p>
                            </td>
                            <td width="90%">
                                <input type="text" name="name" size="20">
                            </td>
                        </tr>
                        <tr>
                            <td width="30%">
                                <p>留言内容</p>
                            </td>
                            <td width="90%">
                                <textarea rows="10" name="content" cols="31"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%" colspan="2">
                                <p align="center">
                                    <input type="submit" value="提交" name="B1">
                                </p>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
 
</body>
 
</html>