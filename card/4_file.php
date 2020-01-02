<?php
print_r($_POST);
print_r($_FILES); //或使用var_dump
//試著理解以下內容與差異
echo $_FILES["mypic"]["name"] . "<br/>";    //原檔案名稱
echo $_FILES["mypic"]["tmp_name"] . "<br/>"; //暫存路徑
echo $_FILES["mypic"]["size"] . "<br/>"; //檔案byte, max 2mb，除非要改php上傳限制
echo $_FILES["mypic"]["type"] . "<br/>"; //檔案類型
//將檔案儲存到伺服器位置的方式為
copy($_FILES["mypic"]["tmp_name"], "upload/" . $_FILES["mypic"]["name"]); // copy(from,to)
//上傳檔案時也可以改名
$newname = date("YmdHis") . "_" . $_FILES["mypic"]["name"];
copy($_FILES["mypic"]["tmp_name"], "upload/" . $newname); // copy(from,to)
//unlink("upload/".$newname);  //刪除網路空間內的檔案
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="mypic">
    <input type="submit" value="上傳">
</form>