<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=������Ϣ.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
</head>

<body>

<p>���ж�����Ϣ�б�</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>������</td>
    <td bgcolor='#CCFFFF'>�������</td>
    <td bgcolor='#CCFFFF'>�˺�</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>�ֻ�</td>
    <td bgcolor='#CCFFFF'>��ַ</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>����Ա</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ�֧��</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ����12341345</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from dingdanxinxi order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>
    <td><?php echo mysql_result($query,$i,dingdanjine);?></td>
    
    <td><?php echo mysql_result($query,$i,zhanghao);?></td>
    <td><?php echo mysql_result($query,$i,xingming);?></td>
    <td><?php echo mysql_result($query,$i,shouji);?></td>
    <td><?php echo mysql_result($query,$i,dizhi);?></td>
    <td><?php echo mysql_result($query,$i,fahuowuliu);?></td>
    <td><?php echo mysql_result($query,$i,danhao);?></td>
    <td><?php echo mysql_result($query,$i,peisongyuan);?></td>
    <td align='center'><?php echo mysql_result($query,$i,iszf);?></td>
    <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=dingdanxinxi" onclick="return confirm('��ȷ��Ҫִ�д˲�����')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

