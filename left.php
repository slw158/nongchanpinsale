
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>

<!--����Ա��̨������-->
<link rel="stylesheet" href="css.css" type="text/css"><body>
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

// Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����Ա�ʺŹ���</DIV>', ''));
// insDoc(Class1, gLnk(1, '<a href=yhzhgl.php target=main>����Ա�ʺŹ���</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�û���Ϣ����</DIV>', ''));

insDoc(Class2, gLnk(1, '<a href=yonghuzhuce_list.php target=main>�û���Ϣ��ѯ</a>', '', 'images/editinfo.gif'));



// Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>������Ѷ����</DIV>', ''));
// insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_add.php?lb=���¶�̬ target=main>���¶�̬���</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_list.php?lb=���¶�̬ target=main>���¶�̬��ѯ</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_add.php?lb=����� target=main>��������</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_list.php?lb=����� target=main>�������ѯ</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_add.php?lb=������֪ target=main>������֪���</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_list.php?lb=������֪ target=main>������֪��ѯ</a>', '', 'images/editinfo.gif'));



Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ũ��Ʒ��Ϣ����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=leibiexinxi_add.php target=main>ũ��Ʒ������</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=leibiexinxi_list.php target=main>ũ��Ʒ����ѯ</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_add.php target=main>ũ��Ʒ��Ϣ���</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_list.php target=main>ũ��Ʒ��Ϣ��ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���ﳵ����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=gouwuche_list.php target=main>���ﳵ��ѯ</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>������Ϣ����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=dingdanxinxi_list.php target=main>������Ϣ��ѯ</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=dingdanxinxi_list1.php target=main>������Ϣ����</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����ͳ��</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=gouwuche_list1.php target=main>����ͳ��</a>', '', 'images/editinfo.gif'));


Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>���Թ���</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=liuyanban_list.php target=main>���Թ���</a>', '', 'images/editinfo.gif'));

// Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ϵͳ����</DIV>', ''));
// insDoc(Class2, gLnk(1, '<a href=shanchushuju.php target=main>����ɾ��</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=dx.php?lb=ϵͳ��� target=main>ϵͳ���</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=dx.php?lb=ϵͳ���� target=main>ϵͳ����</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=youqinglianjie_add.php target=main>�����������</a>', '', 'images/editinfo.gif'));
// insDoc(Class2, gLnk(1, '<a href=youqinglianjie_list.php target=main>�������Ӳ�ѯ</a>', '', 'images/editinfo.gif'));

insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>�޸�����</a>', '', 'images/pwd.GIF'));
insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
