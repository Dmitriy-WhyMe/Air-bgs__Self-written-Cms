<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['first_name'];
    $name_tovar = $_POST['name_tovar'];
    $subject = "Форма отправки сообщений с сайта";
    $tele = $_POST['number'];

    mail ("72vitos72@gmail.com",
      "Новое сообщение с сайта (от : $name)",
      " Имя:$name \n Email:$email \n Телефон: $tele \n Товар: $name_tovar",
      "Content-type:text/plain; charset=utf-8");
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
}
?>
<script type="text/javascript">
	var delay = 3000;
	setTimeout("document.location.href='http://air-bgs'", delay);
</script>

