<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ʒ��Ϣ</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>����ũ��Ʒ��Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ��Ʒ��ţ�<input name="shangpinbianhao" type="text" id="shangpinbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ��Ʒ���ƣ�<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> ���<select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><?php getoption("leibiexinxi","leibie")?></select></select> ����
  <select name="paixu" id="paixu">
    <option value="addtime">���ʱ��</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">����</option>
    <option value="asc">����</option>
  </select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>ũ��Ʒ���</td>
    <td bgcolor='#CCFFFF'>ũ��Ʒ����</td>
    <td bgcolor='#CCFFFF'>���</td>
    <td bgcolor='#CCFFFF'>ͼƬ</td>
    <td bgcolor='#CCFFFF'>�г���</td>
    <td bgcolor='#CCFFFF'>��Ա��</td>
    <td bgcolor='#CCFFFF'>���</td>
    <td bgcolor='#CCFFFF'>������</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ��Ƽ�</td>
    
	<td width="90" align="center" bgcolor="#CCFFFF">���۹���</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi where 1=1";
  
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
  if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{




  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>
    <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,leibie);?></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'></a></td>
    <td><?php echo mysql_result($query,$i,shichangjia);?></td>
    <td><?php echo mysql_result($query,$i,huiyuanjia);?></td>
    <td><?php echo mysql_result($query,$i,kucun);?></td>
    <td><?php echo mysql_result($query,$i,xiaoshouliang);?></td>
    
    <td align='center'><a href="sh1.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"istj")?>&tablename=shangpinxinxi" onclick="return confirm('��ȷ��Ҫִ�д˲�����')"><?php echo mysql_result($query,$i,"istj")?></a></td>
	<td width="90" align="center"><a href="pinglun_list.php?id=<?php echo mysql_result($query,$i,"id");?>&biao=shangpinxinxi">���۹���</a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=shangpinxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="shangpinxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='shangpinxinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="shangpinxinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="shangpinxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="shangpinxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="shangpinxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>

