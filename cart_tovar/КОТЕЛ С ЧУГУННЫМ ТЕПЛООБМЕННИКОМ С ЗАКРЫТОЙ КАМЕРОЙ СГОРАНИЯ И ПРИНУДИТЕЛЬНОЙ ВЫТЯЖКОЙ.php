<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_32;
$price_tovar = $element_vit_price_32;
$url_img_tovar = $element_vit_url_32;
$sklad_tovar = "10 шт";
$description_tovar = " Котлы с чугунным теплообменником и закрытой камерой сгорания. Выпускаются одноконтурные модели и модели с накопительным баком ГВС выполненного из нержавеющей стали. Встроенная электронная система управления и диагностики обеспечивают удобство эксплуатации и обслуживания. Котлы оснащены электронной модуляцией пламени и адаптированы к условиям эксплуатации в России. Устойчиво работают при понижении входного давления  газа до 5 мбар. 
<br>
- электронная модуляция мощности<br>
- электронный розжиг<br>
- встроенные насос, расширительный бак, манометр<br>
- комнатный  термостат<br>
-  защита от  замерзания<br>
- дистанционное управление<br>
- бойлер из нержавеющей стали";
?>

<div class="main_page">
		<?php	include("../include/sidebar_vodonagrev.php"); ?>
	<div class="main_content">
		<div class="cart">
			<div class="cart_title">
				<h2><?php echo $name_tovar; ?></h2>
			</div>
			<div class="cart_right">
				<div class="cart_img">
					<a href=""><img alt="$name_tovar" src="<?php echo $url_img_tovar; ?>"></a>
				</div>
				<div class="cart_price">
					<div class="price">Цена <?php echo $price_tovar; ?>  Руб</div>
					<span>На складе <?php echo $sklad_tovar; ?></span>
					<button class="open-button" onclick="openForm()">Купить в один клик</button>
					<!-- <a class="button_buy2 basket_submit_button" href="#add_cart" >Купить в один клик</a> -->
					<div class="form-popup" id="myForm">
					  <form action="../sendform.php" method="post" class="form-container">
					    <h2>Оставьте ваши данные<br> и мы с вами свяжемся:</h2>
					    Ваш товар <br><input type="text" name="name_tovar" value='<?php echo $name_tovar; ?>'><br>
					    Ваше имя <br><input type="text" name="first_name"><br>
					    Email: <br><input type="text" name="email" required placeholder="Обязательное поле"><br>
						Номер телефона:<br><input type="text" name="number" required placeholder="Обязательное поле"><br><br>
					    <input type="submit" id="addButton3" name="submit" value="Отправить">
					    <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
					  </form>
					</div>
				</div>
			</div>
			<div class="cart_info">

				<input class="button_stock button_active" type="button" id="addButton"  value="Описание">
				<input class="button_stock" type="button" id="addButton1" value="Технические характеристики">
				<input class="button_stock" type="button" id="addButton2"  value="Документация и сертификаты">

				<div id="text1" class="text">
					<div class="text" id="description_2782_idm14763792"><p><?php echo $description_tovar; ?></p>
					<h2 style="text-align: center;">Купить  <?php echo $name_tovar; ?></h2>
					<p style="text-align: center;">можно у нас на сайте на прямую нажав на кнопку "Заказать", либо же позвонив по&nbsp;телефону&nbsp;и задать нашим специалистам все интересующие вопросы:&nbsp;</p>
					<p style="text-align: center;">&nbsp;<?php echo $number_one; ?></p></div>
				</div>
				<div id="text2" class="text">
					<div class="ckTable">
                        
        <table border="1" cellpadding="1" cellspacing="1" style="width: 806px; height: 707px;">
	<tbody>
		<tr>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</strong></span></span></span></td>
			<td class="rtecenter" colspan="5" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>ТОЛЬКО ОТОПЛЕНИЕ</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>ОТОПЛЕНИЕ И ГВС</strong></span></span></span></td>
		</tr>
		<tr>
			<td class="rtecenter" style="text-align: center;">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.230 Fі</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.300 Fі</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.230 Fi (N)</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.300 Fi (N)</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>2.300 Fi (N)</strong></span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Макс. полезная тепловая мощность</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кВт</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">22,1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">29,7</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">22,1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">29,7</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">29,7</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Мин. полезная тепловая мощность</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кВт</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,8</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,9</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,8</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,9</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,9</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Емкость бойлера / материал бака</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">л</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">60/Inox</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Кол-во горячей воді за 30 мин (Т=30С)</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">л</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">520</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Макс. производительность (КПД)</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">%</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90,2</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90,2</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Мин. производительность</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">%</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,6</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Расширительній бак</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">л/бар</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">10/1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">10/1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">10/1</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Камера сгорания</span></span></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">закр.</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">закр.</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">закр.</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">закр.</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">закр.</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Число чугунных секций</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">шт.</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Циркуляционный насос</span></span></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">+</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">+</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">+</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Объем воды в котле</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">л</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,8</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,8</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,6</span></span></span></td>
		</tr>
		<tr>
			<td>
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Диаметр дымоотвод. труб (коакс./раздельных)</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">60-100/80</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">60-100/80</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">60-100/80</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">60-100/80</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">60-100/80</span></span></span></td>
		</tr>
		<tr>
			<td>
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Макс. длина дымоотвод. труб (коакс./раздельных)</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">м</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5/10</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5/10</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5/10</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5/10</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5/10</span></span></span></td>
		</tr>
		<tr>
			<td>
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Номинальное входное давление газа (метан G20)</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мбар</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Мощность/ напряжение</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Вт/В</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">170/230</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">170/230</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">170/230</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">170/230</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">170/230</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Габаритные размеры: Высота</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">850</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">850</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">850</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">850</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">850</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">&nbsp;Ширина</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">350</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">350</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">350</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">350</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">650</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">&nbsp;Глубина</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">596</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">676</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">542</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">622</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">600</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Вес НЕТТО</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кг</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">121</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">144</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">111</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">134</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">184</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Цена</span></span></strong></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">118715.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">127966.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">103050.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">111191.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 0);"><strong><span style="font-size: 14px;">175760.00 РУБ</span></strong></span></span></td>
		</tr>
	</tbody>
</table>

            </div>
				</div>
				<div id="text3" class="text">
					
					 +7 (495) 984-52-34
				</div>
				
			</div>
		</div>
		</div>

	</div>
<?php
include("../include/footer.php");
?>