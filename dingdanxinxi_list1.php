<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<!--������Ϣ����ҳ��-->
<p>���ж�����Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: �����ţ�<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ������<input name="dingdanjine" type="text" id="dingdanjine" style='border:solid 1px #000000; color:#666666;width:80px' /> �˺ţ�<input name="zhanghao" type="text" id="zhanghao" style='border:solid 1px #000000; color:#666666;width:80px' /> ����
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
    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ�ȷ��</td>
    
	
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from dingdanxinxi where 1=1";
  
if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}
if ($_POST["dingdanjine"]!=""){$nreqdingdanjine=$_POST["dingdanjine"];$sql=$sql." and dingdanjine like '%$nreqdingdanjine%'";}
if ($_POST["zhanghao"]!=""){$nreqzhanghao=$_POST["zhanghao"];$sql=$sql." and zhanghao like '%$nreqzhanghao%'";}
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
     <td align='center'><?php echo mysql_result($query,$i,"issh")?></td>
	
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><?php if(mysql_result($query,$i,issh)=="��"){?><a href="dingdanxinxi_updtlb.php?id=<?php echo mysql_result($query,$i,"id");?>">����</a><?php } ?>
	 <a href="dingdanxinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='dingdanxinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="dingdanxinxi_list1.php?pagecurrent=1">��ҳ</a>, <a href="dingdanxinxi_list1.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="dingdanxinxi_list1.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="dingdanxinxi_list1.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>

