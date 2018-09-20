<?php

/*
创建ADO连接
*/
$conn = @new COM("ADODB.Connection") or die ("ADO Connection faild.");
$connstr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath("DATUM/cnbt.mdb");
$conn->Open($connstr);
/*
创建记录集查询
*/
$rs = @new COM("ADODB.RecordSet");
$rs->Open("select * from dbo_dirs",$conn,1,3);
/*
循环读取数据
*/
while(!$rs->eof){
 echo $rs->Fields["title"]->Value;
 echo "<br/>";
 $rs->Movenext(); //将记录集指针下移
}
$rs->close();


?>