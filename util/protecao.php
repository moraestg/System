<?php
function anti_injection($sql){$sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|'|\\\\)/", "" ,$sql);
$sql = trim($sql);$sql = strip_tags($sql);$sql = (get_magic_quotes_gpc()) ? addslashes($sql) : $sql;return $sql;}
$string = $_SERVER['QUERY_STRING'];
$worm = array('chr(', 'chr=', 'chr%20', '%20chr', 'wget%20', '%20wget', 'wget(','cmd=', '%20cmd', 'cmd%20', 'rush=', '%20rush', 'rush%20','union%20', '%20union', 'union(', 'union=', 'echr(', '%20echr', 'echr%20', 'echr=','esystem(', 'esystem%20', 'cp%20', '%20cp', 'cp(', 'mdir%20', '%20mdir', 'mdir(',
'mcd%20', 'mrd%20', 'rm%20', '%20mcd', '%20mrd', '%20rm','mcd(', 'mrd(', 'rm(', 'mcd=', 'mrd=', 'mv%20', 'rmdir%20', 'mv(', 'rmdir(',
'chmod(', 'chmod%20', '%20chmod', 'chmod(', 'chmod=', 'chown%20', 'chgrp%20', 'chown(', 'chgrp(','locate%20', 'grep%20', 'locate(', 'grep(', 'diff%20', 'kill%20', 'kill(', 'killall','passwd%20', '%20passwd', 'passwd(', 'telnet%20', 'vi(', 'vi%20','insert%20into', 'select%20', 'nigga(', '%20nigga', 'nigga%20', 'fopen', 'fwrite', '%20like', 'like%20',
'$_request', '$_get', '$request', '$get', '.system', 'HTTP_PHP', '&aim', '%20getenv', 'getenv%20','new_password', '&icq','/etc/password','/etc/shadow', '/etc/groups', '/etc/gshadow','HTTP_USER_AGENT', 'HTTP_HOST', '/bin/ps', 'wget%20', 'uname\x20-a', '/usr/bin/id','/bin/echo', '/bin/kill', '/bin/', '/chgrp', '/chown', '/usr/bin', 'g\+\+', 'bin/python','bin/tclsh', 'bin/nasm', 'perl%20', 'traceroute%20', 'ping%20', '.pl', '/usr/X11R6/bin/xterm', 'lsof%20','/bin/mail', '.conf', 'motd%20', 'HTTP/1.', '.inc.php', 'config.php', 'cgi-', '.eml','file\://', 'window.open', '<SCRIPT>', 'javascript\://','img src', 'img%20src','.jsp','ftp.exe','xp_enumdsn', 'xp_availablemedia', 'xp_filelist', 'xp_cmdshell', 'nc.exe', '.htpasswd','servlet', '/etc/passwd', 'wwwacl', '~root', '~ftp', '.js', '.jsp', 'admin_', '.history','bash_history', '.bash_history', '~nobody', 'server-info', 'server-status', 'reboot%20', 'halt%20','powerdown%20', '/home/ftp', '/home/www', 'secure_site, ok', 'chunked', 'org.apache', '/servlet/con','<script', '/robot.txt' ,'/perl' ,'mod_gzip_status', 'db_mysql.inc', '.inc', 'select%20from','select from', 'drop%20', '.system', 'getenv', 'http://', 'www', '<script>', 'http_', '_php', 'php_', 'phpinfo()', '<?php', '?>', 'sql=');$checaworm = str_replace($worm, '*', $string);if ($string != $checaworm){$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];$site = $_SERVER['HTTP_HOST'];$assunto = "Tentativa de invasão no sistema do site ".$site.".";$headers.= "Content-Type: text/html; charset=UTF-8 ";$headers .= "MIME-Version: 1.0 "; $headers .= "From: ".$site."<contato@lovatelweb.com.br>";$mensagem = "Nome: ".$ip." <br /> E-mail: ".$ip." <br />";$mensagem .= "Foi detectado uma tentatica de invasão no site ".$site." pelo IP ".ip." usando o navegador ".$navegador.".";mail( "<contato@lovatelweb.com.br","$assunto", $mensagem, $headers);echo "<script language=\"javascript\">
alert('Tentativa de invasão detectada pelo IP ".$ip.".Um email foi enviado para o administrador do sistema. E as provedencias cabiveis serão tomadas. ');
window.location.href = \"../index.php\";</script>";die();}
?>
