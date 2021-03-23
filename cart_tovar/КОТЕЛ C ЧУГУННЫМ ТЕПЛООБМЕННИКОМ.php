<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_33;
$price_tovar = $element_vit_price_33;
$url_img_tovar = $element_vit_url_33;
$sklad_tovar = "10 шт";
$description_tovar = "Котлы с ч у г унным теплообменником.  Выпускаются  одноконтурные и двухконтурные модели.  Двухконтурные модели оснащены эмалированным баком ГВС емкостью 50 литров. Диапазон мощностей котлов составляет от 15 до 62 кВт. Встроенная электронная система управления и диагностики обеспечивают удобство эксплуатации и обслуживания.  Современный дизайн и минимальные габаритные размеры позволяют разместить котел в любом интерьере.  Котлы оснащены электронной модуляцией пламени и адаптированы к условиям эксплуатации в России. Устойчиво работают при понижении входного давления  газа до 5 мбар.
<br>
-  защита от  замерзания<br>
- дистанционное управление<br>
- бойлер с эмалированным покрытием, манометр<br>

- электронная модуляция мощности<br>
- электронный розжиг<br>
- комнатный  термостат";
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
                        
        <table border="1" cellpadding="1" cellspacing="1" style="width: 801px; height: 640px;">
	<tbody>
		<tr>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</strong></span></span></span></td>
			<td class="rtecenter" colspan="6" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>ТОЛЬКО ОТОПЛЕНИЕ</strong></span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>ОТОПЛЕНИЕ И ГВС</strong></span></span></span></td>
		</tr>
		<tr>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<p>
					<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.230</strong></span></span><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong> iN &nbsp; </strong></span></span></span></p>
			</td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.300 iN&nbsp; </strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.400 iN</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.490 iN</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>1.620 iN</strong></span></span></span></td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>2.230 i</strong></span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="color:#000000;"><span style="font-family: times new roman,times,serif;"><strong>1.230 i</strong></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="color:#000000;"><span style="font-family: times new roman,times,serif;"><strong>1.300 i</strong></span></span></td>
			<td class="rtecenter" style="text-align: center; vertical-align: middle;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;"><strong>2.300 i</strong></span></span></span></td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">40</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">48,7</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">62,2</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">22,1</span></span></span></td>
			<td style="text-align: center;" valign="top">
				22,1</td>
			<td style="text-align: center;" valign="top">
				29,7</td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">24,5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">31,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,8</span></span></span></td>
			<td style="text-align: center;" valign="top">
				11,8</td>
			<td style="text-align: center;" valign="top">
				14,9</td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">50/эмаль</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Кол-во горячей воды за 30 мин (Т=30С)</span></span></span></td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">402</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">513</span></span></span></td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90,1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90,1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90,2</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Мин. производительность (КПД)</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">%</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">89,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">89,1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">90,3</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,6</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">87,6</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Расширительный бак</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">л/бар</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				&nbsp;</td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Камера сгорания</span></span></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" colspan="9" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">открытая</span></span></span></td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">7</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">9</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">4</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">4</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">5</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Циркуляционный насос</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">+</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
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
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">17,4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">20,2</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">25,8</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,8</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">11,8</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">14,6</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">14,6</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Диаметр дымохода</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">130</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">140</span></span></span></td>
			<td class="rtecenter" colspan="2" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">160</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">180</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">130</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">130</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">140</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">140</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Наличие группы безопасности</span></span></span></td>
			<td class="rtecenter" colspan="6">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">-</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">+</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">+</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Мощность/ напряжение</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Вт/В</span></span></span></td>
			<td class="rtecenter" colspan="5" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">15/230</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				&nbsp;</td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Габаритные размеры: Высота</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" colspan="2" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">850</span></span></span></td>
			<td class="rtecenter" colspan="2" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">1490</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">1650</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				&nbsp;</td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Ширина</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" colspan="5" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">350</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">650</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Глубина</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">600</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">680</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">635</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">715</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">875</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				&nbsp;</td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Вес НЕТТО</span></span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кг</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">103</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">126</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">150</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">174</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">224</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">155&nbsp;</span></span></span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td style="text-align: center;" valign="top">
				<span style="font-size:14px;">-</span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">&nbsp;176</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Цена</span></span></strong></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">77580.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">83872.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">99695.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">107220.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">135945.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">141780.00 РУБ</span></span></strong></span></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">93554.00 РУБ</span></strong></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">102311.00 РУБ</span></strong></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">148871.00 РУБ</span></span></strong></span></td>
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