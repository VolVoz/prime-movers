<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="lawrence69kunter@gmail.com";  // e-mail админа 
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="http://primemovers.esy.es/index.html";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
// Принимаем данные с формы 


				
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
	Comments: '.$comments=$_POST['comments'].' '; //Текст нащего сообщения можно использовать HTML теги
 
 // Отправляем письмо админу  
 
mail($adminemail, $subject, $message); 
 
  
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 

<p>Message has been sent , thank you !...</p>";  
exit; 
 
 
?>
