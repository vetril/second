<?php
function get_content($hostname, $path)
{
$line="";
//������������� ����������, ��� ��������
//�������� � ��������� $hostname
$fd=fsockopen($hostname, 80, $errno, $errstr, 30);
//��������� ���������� ��������� ����������
if(!$fd) echo "$errstr ($errno)<br>/>\n";
else
{
//��������� HTTP-������ ��� �������� ��� �������
$headers="GET $path HTTP/1.1\r\n";
$headers.="Host: $hostname\r\n";
$headers.="Connection: Close\r\n\r\n";
$headers.="Connection: Close\r\n\r\n";
header ('Content-type: text/html; charset=utf-8');
//���������� HTTP-������ �������
fwrite ($fd, $headers);
//�������� �����
while (!feof($fd))
{
$line.=fgets($fd, 1024);
}
fclose($fd);
}
return $line;
}
$hostname="www.google.by";
$path="/search?q=����������+������+���+����&ie=utf-8&oe=utf-8&aq=t&rls=org.mozilla:ru:official&client=firefox";
//������������� ������� ����� ������
//�������- ���� ��� �������� �� ���������,
//��� �� ����� ������������
set_time_limit(180);
//�������� �������
$content=get_content($hostname, $path);
 $content=strstr($content,'<');
   //$www = preg_match_all("<cite>mikhalkevich.colony.by<cite>", $content, $cont);
 preg_match_all("/<cite>.*<\/cite>/isU", $content, $cont, PREG_PATTERN_ORDER); 
   echo '<pre>';
   print_r ($cont);
?>