<?php 
include_once 'conn.php';
$id=$_GET["id"];
$biao=$_GET["biao"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>评论</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有评论列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索:评论内容:
  <input name="bh" type="text" id="bh" />
  评论人:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="39" bgcolor="#EBE2FE">序号</td>
    <td width="73" bgcolor='#EBE2FE'>数据ID</td>
    <td width="309" bgcolor='#EBE2FE'>留言内容</td>
    <td width="175" bgcolor='#EBE2FE'>评分</td>
    <td width="177" bgcolor='#EBE2FE'>评论人</td>
    <td width="83" align="center" bgcolor="#EBE2FE">添加时间</td>
    <td width="52" align="center" bgcolor="#EBE2FE">操作</td>
  </tr>
  <?php 
    $sql="select * from pinglun where wenzhangID=$id and biao='$biao'";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and pinglunneirong like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and pinglunren like '%$nreqmc%'";
}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
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
    <td width="39"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,wenzhangID);?></td><td><?php echo mysql_result($query,$i,pinglunneirong);?></td>
    <td><?php echo mysql_result($query,$i,pingfen);?></td>
    <td><?php echo mysql_result($query,$i,pinglunren);?></td>
    <td width="83" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="52" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=pinglun" onclick="return confirm('真的要删除？')">删除</a> <a href="pinglun_updt.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>"></a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"><a href="pinglun_list.php?pagecurrent=1">首页</a>, <a href="pinglun_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="pinglun_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="pinglun_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

