<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('���Գɹ�!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>ũ��Ʒ��������ϵͳ</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("����������");document.form1.liuyan.focus();return false;}
}

</script>
<body>
<TABLE cellSpacing=0 cellPadding=0 width=1002 align=center border=0>
  <TBODY>
  <TR>
    <TD>
      
<?php include_once 'qttop.php';?></TD></TR>
  <TR>
    <TD>
      <TABLE cellSpacing=0 cellPadding=0 width=1002 border=0>
        <TBODY>
        <TR>
          <TD vAlign=top width=786>
            <TABLE cellSpacing=0 cellPadding=0 width=787 bgColor=#f9fdff 
            border=0>
              <TBODY>
              <TR>
                <TD 
                  height=42 background=qtimages/sy_bg.jpg class="title"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" align="center" valign="bottom"><span class="STYLE4">��������</span></td>
                    <td width="68%">&nbsp;</td>
                    <td width="12%" valign="bottom"><a href="lyblist.php"><span class="STYLE4">�鿴��������</span></a></td>
                  </tr>
                </table></TD>
              </TR>
              <TR>
                <TD vAlign=top bgColor=#edf7f9 height=74>
                  <TABLE cellSpacing=0 cellPadding=0 width=787 border=0>
                    <TBODY>
                    <TR>
                      <TD width=8 height="246" align=right><IMG height=660 
                        src="qtimages/sy_line.jpg" width=8></TD>
                      <TD width=100% height="660" vAlign=top bgColor=#f9fdff><table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                        <form name="form1" method="post" action="">
                          <tr>
                            <td>�˺ţ�</td>
                            <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                              &nbsp;*</td>
                          </tr>
                          <tr>
                            <td>��Ƭ��</td>
                            <td><input name='zhaopian' type='hidden' id='zhaopian' value='<?php echo $_SESSION["zp"];?>' />
                                <img src="<?php echo $_SESSION["zp"];?>" width="131" height="102"></td>
                          </tr>
                          <tr>
                            <td>������</td>
                            <td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                              &nbsp;*</td>
                          </tr>
                          <tr>
                            <td>���ԣ�</td>
                            <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                              &nbsp;*</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input type="hidden" name="addnew" value="1" />
                                <input type="submit" name="Submit" value="���" onClick="return check();" />
                                <input type="reset" name="Submit2" value="����" /></td>
                          </tr>
                        </form>
                      </table>
                        <p align="center">&nbsp;</p></TD>
                    </TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD bgColor=#f9fdff height=5></TD></TR>
              <TR>
                <TD>&nbsp;</TD>
              </TR>
              
              <TR>
                <TD>
                  <?php include_once 'qtdown.php';?></TD></TR></TBODY></TABLE></TD>
          <TD vAlign=top width=216 
            background=qtimages/rightbg.jpg><?php include_once 'qtleft.php';?>
</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</body>
</html>