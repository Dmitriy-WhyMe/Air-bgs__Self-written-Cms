<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_35;
$price_tovar = $element_vit_price_35;
$url_img_tovar = $element_vit_url_35;
$sklad_tovar = "10 шт";
$description_tovar = "Котлы Baxi GALAXY 310 Fi с чугунным теплообменником и встроенным накопительным бойлером ГВС на 100 литров из нержавеющей стали.  Котлы адаптированы к условиям эксплуатации в России.  Устойчиво работают при снижении входного давления газа до 5 мбар. Незаменимы там, где необходимо большое количество горячей воды, до 600 литров в течение первых 30 мин  (при ΔТ=30°С).
<br>
- электронная модуляция мощности<br>
- электронный розжиг<br>
- комнатный  термостат<br>
-  защита от  замерзания<br>
- встроенные насосы,  расширительные баки, манометр<br>
- встроенный бойлер<br>
- дистанционное управление<br>";
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
                        
        <p>
	<span style="color:#000000;"><span style="font-size: 14px;"><strong>ТЕХНИЧЕСКИЕ&nbsp; ХАРАКТЕРИСТИКИ.</strong></span></span></p>
<table border="1" cellpadding="1" cellspacing="1" width="200">
	<tbody>
		<tr>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" colspan="3" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;">ОТОПЛЕНИЕ И ГОРЯЧАЯ ВОДА</span></strong></span></td>
		</tr>
		<tr>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">Модель</span></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;">GALAXY 310 Fi</span></strong></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Макс. полезная тепловая мощность</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">кВт</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">30,9</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Мин. полезная тепловая мощность</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">кВт</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">15,8</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Макс. потребляемая тепловая мощность</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">кВт</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">34,3</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Мин. потребляемая тепловая мощность</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">кВт</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">18</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Макс. производительность&nbsp;</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">%</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">90,08</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Расширительный бак</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">л/бар</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">8/0,5</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Камера сгорания</span></span></td>
			<td class="rtecenter">
				&nbsp;</td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">закр.</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Диапазон регулирования температуры в контуре ГВС</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">С</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">5-65</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Кол-во горячей воды Т=25С</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">л/мин</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">18</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Кол-во горячей воды за первые 30 мин (Т=30С)</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">л</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">605</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Емкость бойлера</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">л</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">100</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Максимальное давление в контуре ГВС</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">бар</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">8</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Минимальное давление в контуре ГВС</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">бар</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">0,2</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Диаметр дымохода</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">мм</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">-</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Диаметр дымоотводящих труб (коаксиальных/раздельных)</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">мм</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">60-100/80</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Макс. длина дымоотводящих труб (коаксиальных/раздельных)</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">м</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">5/30</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Номинальное входное давление газа (метан G20)</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">мбар</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">20</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Мощность/напряжение</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">Вт/В</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">170/230</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Габаритные размеры: Высота</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">мм</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">1490</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">&nbsp;Ширина</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">мм</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">600</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">&nbsp;Глубина</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">мм</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">600</span></span></td>
		</tr>
		<tr>
			<td class="rteleft">
				<span style="color:#000000;"><span style="font-size: 14px;">Вес НЕТТО</span></span></td>
			<td class="rtecenter">
				<span style="color:#000000;"><span style="font-size: 14px;">кг</span></span></td>
			<td class="rtecenter" style="text-align: center;">
				<span style="color:#000000;"><span style="font-size: 14px;">216</span></span></td>
		</tr>
		<tr>
			<td style="vertical-align: top;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;">Цена</span></strong></span></td>
			<td style="vertical-align: top;">
				&nbsp;</td>
			<td style="vertical-align: top; text-align: center;">
				<span style="color:#000000;"><strong><span style="font-size: 14px;">181138.00 РУБ</span></strong></span></td>
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