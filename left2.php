
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>

<!--�û���̨������-->
<link rel="stylesheet" href="css.css" type="text/css"><body>
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�������Ϲ���</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yonghuzhuce_updt2.php target=main>�������Ϲ���</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ﳵ����</DIV>', ''));

insDoc(Class2, gLnk(1, '<a href=gouwuche_list2.php target=main>���ﳵ��ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>������Ϣ</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=dingdanxinxi_list2.php target=main>������Ϣ��ѯ</a>', '', 'images/editinfo.gif'));


Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�ղؼ�¼����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=shoucangjilu_list2.php target=main>�ղؼ�¼��ѯ</a>', '', 'images/editinfo.gif'));





insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
