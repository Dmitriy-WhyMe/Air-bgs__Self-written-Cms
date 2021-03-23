<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += "responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<div class="topnav" id="myTopnav">
  <a href="../" class="active">Главная</a>
  <a href="../Доставка и оплата.php">Доставка и оплата</a>
  <a href="../Монтаж и сервис.php">Монтаж и сервис</a>
  <a href="../Гарантия.php">Гарантия</a>
  <a href="../Сотрудничество.php">Сотрудничество</a>
  <a href="../О Компании.php">О Компании</a>
  <a href="../Контакты.php">Контакты</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>
</header>
