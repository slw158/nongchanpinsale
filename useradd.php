<?php
include_once 'conn.php';
$ndate = date("Y-m-d");
$addnew = $_POST["addnew"];
if ($addnew == "1") {
//    global $conn;
    // ���������ֵ
//    function generateSalt() {
//        return bin2hex(random_bytes(16)); // 32�ַ����ȵ�����ַ���
//    }
//    function hashPassword($password) {
//        return password_hash($password . SALT, PASSWORD_BCRYPT);
//    }

    // ������ι�ϣ
//    function hashPassword($password, $salt) {
//        return hash('sha256', $password . $salt);
//    }
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
    $hashpwd = password_hash($mima, PASSWORD_DEFAULT);

//    // �������
//    echo "ԭʼ����: $mima <br>";
//    echo "��ϣ�������: $hashpwd <br>";
//    $sql = "insert into yonghuzhuce(...) values(...)";
//    echo "��Ҫִ�е�SQL: " . htmlspecialchars($sql) . "<br>";
    // ʹ��Ԥ��������ֹSQLע��
//    $stmt = $conn->prepare("INSERT INTO yonghu(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian)
//                           VALUES (?, ?, ?, ?, ?, ?, ?)");
//    $stmt->bind_param("sssssss", $zhanghao, $hashpwd, $xingming, $xingbie, $diqu, $Email, $zhaopian);
//    $stmt->execute();
//    if ($stmt->execute()) {
//        echo "<script>alert('��ӳɹ�!');</script>";
//    } else {
//        echo "<script>alert('���ʧ��: ".$stmt->error."');history.back();</script>";
//    }
//    echo "ԭʼ����: $mima <br>";
//    echo "��ϣ�������: $hashpwd <br>";
//$stmt->close();



//    $hashpwd=password_hash($mima,PASSWORD_DEFAULT);
//    echo "ԭʼ����: $mima <br>";
//    echo "��ϣ�������: $hashpwd <br>";
    $sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian)
                        values('$zhanghao','$hashpwd','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";

//    mysqli_query($sql);
    $res=mysql_query($sql);
    if($res){
        echo "ok";
    }else{
        echo "no";
    }
    echo "��Ҫִ�е�SQL: " . $sql . "<br>";
//    echo "mysql:".$conn-error();
//	echo "<script>javascript:alert('��ӳɹ�!');location.href='yonghuzhuce_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>�û�ע��</title>
    <script language="javascript" src="js/hsgrili.js"></script>
    <link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>����û�ע�᣺ ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
    function check() {
        if (document.form1.zhanghao.value == "") {
            alert("�������˺�");
            document.form1.zhanghao.focus();
            return false;
        }
        if (document.form1.mima.value == "") {
            alert("����������");
            document.form1.mima.focus();
            return false;
        }
        if (document.form1.xingming.value == "") {
            alert("����������");
            document.form1.xingming.focus();
            return false;
        }
        if (document.form1.Email.value == "") {
            alert("������Email");
            document.form1.Email.focus();
            return false;
        }
        if (document.form1.zhaopian.value == "") {
            alert("��������Ƭ");
            document.form1.zhaopian.focus();
            return false;
        }
    }

    // function gow() {
    //     location.href = 'peixunccccailiao_add.php?jihuabifffanhao=' + document.form1.jihuabifffanhao.value;
    // }
</script>
<form id="form1" name="form1" method="post" action="">
    <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF"
           style="border-collapse:collapse">
        <tr>
            <td>�˺ţ�</td>
            <td><input name='zhanghao' type='text' id='zhanghao' value=''/>&nbsp;*</td>
        </tr>
        <tr>
            <td>���룺</td>
            <td><input name='mima' type='text' id='mima' value=''/>&nbsp;*</td>
        </tr>
        <tr>
            <td>������</td>
            <td><input name='xingming' type='text' id='xingming' value=''/>&nbsp;*</td>
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
            <td><select name='diqu' id='diqu'></select></td>
        </tr>
        <tr>
            <td>Email��</td>
            <td><input name='Email' type='text' id='Email' value=''/>&nbsp;*</td>
        </tr>
        <tr>
            <td>��Ƭ��</td>
            <td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'/>&nbsp;*</td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="hidden" name="addnew" value="1"/>
                <input type="submit" name="Submit" value="���" onclick="return check();"/>
                <input type="reset" name="Submit2" value="����"/></td>
        </tr>
    </table>
</form>
<p>&nbsp;</p>
</body>
</html>