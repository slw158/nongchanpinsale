<?php
//��֤��½��Ϣ
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';</script>";
	exit;
 }
// �����ղ�ҳ��
include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$biao=$_GET["biao"];
	$ziduan=$_GET["ziduan"];
    $sql1 = "SELECT id FROM shoucangjilu 
             WHERE username='".$_SESSION['username']."' 
             AND xwid=".intval($id)." 
             AND biao='".addslashes($biao)."' 
             AND ziduan='".addslashes($ziduan)."'";
    $query=mysql_query($sql1);
    if (!$query) {
        die('��ѯʧ��: ' . mysql_error());
    }
    $rowscount=mysql_num_rows($query);
    if ($rowscount>0){
        $comewhere=$_SERVER['HTTP_REFERER'];
        echo "<script language='javascript'>alert('���ղ��Ѵ��ڣ�');location.href='$comewhere';</script>";
    }else{
        $sql="insert into shoucangjilu(username,xwid,ziduan,biao) values('".$_SESSION["username"]."','$id','$ziduan','$biao')";
        //echo $sql;
        mysql_query($sql);
        $comewhere=$_SERVER['HTTP_REFERER'];
        echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
    }

	
//}
?>