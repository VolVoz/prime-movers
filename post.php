<? 
// ----------------------------������������-------------------------- // 
 
$adminemail="lawrence69kunter@gmail.com";  // e-mail ������ 
 
 
$date=date("d.m.y"); // �����.�����.��� 
 
$time=date("H:i"); // ����:������:������� 
 
$backurl="http://primemovers.esy.es/index.html";  // �� ����� ��������� ��������� ����� �������� ������ 
 
//---------------------------------------------------------------------- // 
 
  
// ��������� ������ � ����� 


				
$subject = 'Customer waiting for estimate ';
 
$name=$_POST['name']; 
 
$phone=$_POST['phone']; 
 
$movdate=$_POST['movdate']; 

$movsize=$_POST['movsize'];

$from=$_POST['from'];

$to=$_POST['to'];

$comments=$_POST['comments'];

$message = '         
	Name: '.$name=$_POST['name'].'
	Phone: '.$phone=$_POST['phone'].'
	Date: '.$movdate=$_POST['movdate'].'
	Size: '.$movsize=$_POST['movsize'].'
	From: '.$from=$_POST['from'].'
	To: '.$to=$_POST['to'].'
	Comments: '.$comments=$_POST['comments'].' '; //����� ������ ��������� ����� ������������ HTML ����
 
 // ���������� ������ ������  
 
mail($adminemail, $subject, $message); 
 
  
  
 
// ������� ��������� ������������ 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 

<p>Message has been sent , thank you !...</p>";  
exit; 
 
 
?>
