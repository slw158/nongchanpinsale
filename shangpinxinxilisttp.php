<?php
session_start();
include_once 'conn.php';

?>
<html>
<head>
    <title>ũ��Ʒ��Ϣ</title>
    <LINK href="qtimages/style.css" type=text/css rel=stylesheet>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<!--hxsglxiangdxongjxs-->
<body>
<TABLE cellSpacing=0 cellPadding=0 width=1002 align=center border=0>
    <TBODY>
    <TR>
        <TD>
            <?php include_once 'qttop.php'; ?>
        </TD>
    </TR>
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
                                        height=42 background=qtimages/sy_bg.jpg class="title">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="8%">&nbsp;</td>
                                            <td width="92%"><font class="title">[ũ��Ʒ��Ϣ]</font></td>
                                        </tr>
                                    </table>
                                </TD>
                            </TR>
                            <TR>
                                <TD vAlign=top bgColor=#edf7f9 height=74>
                                    <TABLE cellSpacing=0 cellPadding=0 width=787 border=0>
                                        <TBODY>
                                        <TR>
                                            <TD width=8 height="246" align=right><IMG height=660
                                                                                      src="qtimages/sy_line.jpg"
                                                                                      width=8></TD>
                                            <TD width=100% height="660" vAlign=top bgColor=#f9fdff>


                                                <form id="form1" name="form1" method="post" action="">
                                                    &nbsp;����: ũ��Ʒ��ţ�<input name="shangpinbianhao" type="text"
                                                                                id="shangpinbianhao"
                                                                                style='border:solid 1px #000000; color:#666666;width:80px'/>
                                                    ũ��Ʒ���ƣ�<input name="shangpinmingcheng" type="text"
                                                                    id="shangpinmingcheng"
                                                                    style='border:solid 1px #000000; color:#666666;width:80px'/>
                                                    ���<select name='leibie' id='leibie'
                                                                 style='border:solid 1px #000000; color:#666666;'>
                                                        <option value="">����
                                                        </option><?php getoption("leibiexinxi", "leibie") ?>
                                                    </select></select>
                                                    <input type="submit" name="Submit" value="����"
                                                           style='border:solid 1px #000000; color:#666666'/>&nbsp;<input
                                                            type="button" name="Submit3" value="�л���ͼ"
                                                            style='border:solid 1px #000000; color:#666666'
                                                            onClick="location.href='shangpinxinxilist.php';"/>
                                                </form>

                                                <table width="98%" height="7%" border="0" align="center" cellpadding="0"
                                                       cellspacing="0">
                                                    <tr>
                                                        <?php
                                                        $sql = "select * from shangpinxinxi where  1=1 ";

                                                        if ($_POST["shangpinbianhao"] != "") {
                                                            $nreqshangpinbianhao = $_POST["shangpinbianhao"];
                                                            $sql = $sql . " and shangpinbianhao like '%$nreqshangpinbianhao%'";
                                                        }
                                                        if ($_POST["shangpinmingcheng"] != "") {
                                                            $nreqshangpinmingcheng = $_POST["shangpinmingcheng"];
                                                            $sql = $sql . " and shangpinmingcheng like '%$nreqshangpinmingcheng%'";
                                                        }
                                                        if ($_POST["leibie"] != "") {
                                                            $nreqleibie = $_POST["leibie"];
                                                            $sql = $sql . " and leibie like '%$nreqleibie%'";
                                                        }
                                                        $sql = $sql . " order by id desc";

                                                        $query = mysql_query($sql);
                                                        $rowscount = mysql_num_rows($query);
                                                        if ($rowscount == 0) {
                                                        } else {
                                                            $pagelarge = 20;//ÿҳ������
                                                            $pagecurrent = $_GET["pagecurrent"];
                                                            if ($rowscount % $pagelarge == 0) {
                                                                $pagecount = $rowscount / $pagelarge;
                                                            } else {
                                                                $pagecount = intval($rowscount / $pagelarge) + 1;
                                                            }
                                                            if ($pagecurrent == "" || $pagecurrent <= 0) {
                                                                $pagecurrent = 1;
                                                            }

                                                            if ($pagecurrent > $pagecount) {
                                                                $pagecurrent = $pagecount;
                                                            }
                                                            $ddddd = $pagecurrent * $pagelarge;
                                                            if ($pagecurrent == $pagecount) {
                                                                if ($rowscount % $pagelarge == 0) {
                                                                    $ddddd = $pagecurrent * $pagelarge;
                                                                } else {
                                                                    $ddddd = $pagecurrent * $pagelarge - $pagelarge + $rowscount % $pagelarge;
                                                                }
                                                            }
                                                            $k = 0;
                                                            for ($i = $pagecurrent * $pagelarge - $pagelarge; $i < $ddddd; $i++) {
                                                                $k = $k + 1;
                                                                ?>
                                                                <td height="165" align="center">
                                                                    <table width="150" height="160" border="0"
                                                                           cellpadding="0" cellspacing="0">
                                                                        <tr>
                                                                            <td height="123" align="center"><a
                                                                                        href="shangpinxinxidetail.php?id=<?php echo mysql_result($query, $i, id); ?>"><img
                                                                                            src="<?php echo mysql_result($query, $i, tupian); ?>"
                                                                                            width="133" height="135"
                                                                                            border="0"/></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="25"
                                                                                align="center"><?php echo mysql_result($query, $i, shangpinmingcheng); ?></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <?php
                                                                if ($k == 4) {
                                                                    echo "</tr><tr>";
                                                                    $k = 0;
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </tr>
                                                </table>
                                                <p>
                                                </p>
                                                <P align=center><a href="shangpinxinxilisttp.php?pagecurrent=1">��ҳ</a>,
                                                    <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecurrent - 1; ?>">ǰһҳ</a>
                                                    ,<a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecurrent + 1; ?>">��һҳ</a>,
                                                    <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecount; ?>">ĩҳ</a>,
                                                    �������ݹ�<?php echo $pagecount; ?>
                                                    ҳ,��ǰ��<?php echo $pagecurrent; ?>ҳ,<?php echo $pagelarge; ?>��ÿҳ
                                                    <input type="button" name="Submit2"
                                                           onClick="javascript:window.print();" value="��ӡ��ҳ"
                                                           style='border:solid 1px #000000; color:#666666'/>
                                                </P>


                                            </TD>
                                        </TR>
                                        </TBODY>
                                    </TABLE>
                                </TD>
                            </TR>
                            <TR>
                                <TD bgColor=#f9fdff height=5></TD>
                            </TR>
                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>

                            <TR>
                                <TD>
                                    <?php include_once 'qtdown.php'; ?></TD>
                            </TR>
                            </TBODY>
                        </TABLE>
                    </TD>
                    <TD vAlign=top width=216
                        background=qtimages/rightbg.jpg><?php include_once 'qtleft.php'; ?>
                    </TD>
                </TR>
                </TBODY>
            </TABLE>
        </TD>
    </TR>
    </TBODY>
</TABLE>
<!-- dfexnxxiaxng -->
</body>
</html>
