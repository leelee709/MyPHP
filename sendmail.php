<?php
require("Smtp.class.php");
$smtpserver = "smtp.163.com";
$smtpserverport = 25;
$smtpusermail = "15312240729@163.com";
$smtpemailto = "qiang.li@pactera.com";
$smtppass = "123456lq"; //SMTP服务器的用户密码 
//邮件主题 
$mailsubject = "测试邮件发送";
//邮件内容 
$mailbody = '<p>Dear xxx,</p>
<p>Thanks to register our website, for any problem, please contact us <a href="www.sina.com">here</a>. <br>Have a nice day</p>




';
//邮件格式（HTML/TXT）,TXT为文本邮件 
$mailtype = "HTML";
//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpusermail,$smtppass);
//是否显示发送的调试信息 
//$smtp->debug = TRUE;
//发送邮件
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
?>