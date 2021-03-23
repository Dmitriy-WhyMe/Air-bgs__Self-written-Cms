<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_34;
$price_tovar = $element_vit_price_34;
$url_img_tovar = $element_vit_url_34;
$sklad_tovar = "10 шт";
$description_tovar = "Напольный  газовый  котел  с  чугунным  теплообменником.  Благодаря  специально сконструированному  теплообменнику  коэффициент полезного действия котла составляет 92%. Котел имеет открытую камеру сгорания и двухступенчатую атмосферную горелку из  нержавеющей стали. Стандартная автоматика управления  котла поддерживает  функцию погодозависимой генерации тепла (при установке наружного датчика температуры). Котлы могут эксплуатироваться в каскаде. Адаптированы к условиям эксплуатации в России.  Выходная мощность котлов варьируется от 86 кВт до 116 кВт.
<br>
- Электронный розжиг<br>
- Возможность включения в каскад<br>
-  Двухступенчатая атмосферная горелка из нержавеющей стали<br>
- Датчик  защиты от опрокидывания  тяги";
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
                        
        <table border="1" cellpadding="1" cellspacing="1" style="width: 784px; height: 307px;">
	<thead>
		<tr>
			<th class="rtecenter" scope="col">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">ТЕХНИЧЕСКИЕ&nbsp;ХАРАКТЕРИСТИКИ</span></span></span></th>
			<th class="rtecenter" scope="col">
				&nbsp;</th>
			<th class="rtecenter" scope="col">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">1.80IN</span></span></span></th>
			<th class="rtecenter" scope="col">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">1.99IN</span></span></span></th>
			<th class="rtecenter" scope="col">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">1.110IN</span></span></span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Выходная мощность</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кВт</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">82,8</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">99,4</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">115,9</span></span></strong></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Выходная мощность первой ступени горелки (60)</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кВт</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">49,7</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">59,6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">69,5</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Коэффициент полезного действия</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">%</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">92</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">92</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">92</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Кол-во секций в теплообменнике</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">6</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">7</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Емкость теплообменника</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">л</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">35</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">40</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">44</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Максимальное давление в контуре отопления</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">бар</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">5</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Расход газа G20</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">м3/ч</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">9,5</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,4</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">13,3</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Расход газа G25</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">м3/ч</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">11,1</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">13,3</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">15,5</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Температура отходящих газов</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">С</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">134</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">148</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">125</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Вид газа</span></span></span></td>
			<td class="rtecenter" colspan="4" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Природный/сжиженный газ</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Наружный диаметр дымохода</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">мм</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">202</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">202</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">252</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Масса</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">кг</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">330</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">375</span></span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">415</span></span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">Цена</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">206460.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">239922.00 РУБ</span></span></strong></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;"><span style="font-family: times new roman,times,serif;">275299.00 РУБ</span></span></strong></span></td>
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