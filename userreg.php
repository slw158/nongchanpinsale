<?php
include_once 'conn.php';
session_start();

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('�Բ��𣬸��˺��Ѿ����ڣ��뻻�����˺����ԣ���');history.back();</script>";
	}
	else
	{
        $hashpwd = password_hash($mima, PASSWORD_DEFAULT);
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$hashpwd','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);

		echo "<script>javascript:alert('ע��ɹ�!�������Ա��˺󷽿�������½��');location.href='index.php';</script>";
	}
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
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("�Բ����������벻һ�£�������");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("������Email");document.form1.Email.focus();return false;}
	if(document.form1.zhaopian.value==""){alert("��������Ƭ");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){

  }
  else{
   alert("�Բ���������������ַ��ʽ����");
   return false;
  }

}

</script>
<script language="javascript">


	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
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
                  height=42 background=qtimages/sy_bg.jpg class="title"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="8%">&nbsp;</td>
                    <td width="92%" ><font class="title">[�û�ע��]</font></td>
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
                      <TD width=100% height="660" vAlign=top bgColor=#f9fdff><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
                        <form name="form1" method="post" action="">
                          <tr>
                            <td>�˺ţ�</td>
                            <td><input name='zhanghao' type='text' id='zhanghao' value='' />
                              &nbsp;*</td>
                          </tr>
                          <tr>
                            <td>���룺</td>
                            <td><input name='mima' type='password' id='mima' value='' />
                              &nbsp;* ȷ�����룺
                              <input name='mima2' type='password' id='mima2' value='' /></td>
                          </tr>
                          <tr>
                            <td>������</td>
                            <td><input name='xingming' type='text' id='xingming' value='' />
                              &nbsp;*</td>
                          </tr>
                          <tr>
                            <td>�Ա�</td>
                            <td><select name='xingbie' id='xingbie'>
                                <option value="��">��</option>
                                <option value="Ů">Ů</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td>������</td>
                            <td><select name='diqu' id='diqu'>
                                <option value="�㽭">�㽭</option>
                                <option value="����">����</option>
                                <option value="����">����</option>
                                <option value="����">����</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td>Email��</td>
                            <td><input name='Email' type='text' id='Email' value='' />
                              &nbsp;*</td>
                          </tr>
                          <tr>
                            <td>��Ƭ��</td>
                            <td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />
                              &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input type="hidden" name="addnew" value="1" />
                                <input type="submit" name="Submit" value="ע��" onClick="return check();" />
                                <input type="reset" name="Submit2" value="����" /></td>
                          </tr>
                        </form>
                      </table></TD>
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