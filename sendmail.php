<?php
require("Smtp.class.php");
$smtpserver = "smtp.163.com";
$smtpserverport = 25;
$smtpusermail = "15312240729@163.com";
$smtpemailto = "qiang.li@pactera.com";
$smtppass = "123456lq"; //SMTP���������û����� 
//�ʼ����� 
$mailsubject = "�����ʼ�����";
//�ʼ����� 
$mailbody = '<p>Dear xxx,</p>
<p>Thanks to register our website, for any problem, please contact us <a href="www.sina.com">here</a>. <br>Have a nice day</p>




';
//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ� 
$mailtype = "HTML";
//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤. 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpusermail,$smtppass);
//�Ƿ���ʾ���͵ĵ�����Ϣ 
//$smtp->debug = TRUE;
//�����ʼ�
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
?>