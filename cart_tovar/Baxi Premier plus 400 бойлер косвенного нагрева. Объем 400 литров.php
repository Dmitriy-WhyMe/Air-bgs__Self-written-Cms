<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_42;
$price_tovar = $element_vit_price_42;
$url_img_tovar = $element_vit_url_42;
$sklad_tovar = "10 шт";
$description_tovar = "Бойлер косвенного нагрева Baxi Premier plus 400 из нержавеющей стали DUPLEX.
<br>
Бойлеры PREMIER Plus внешние накопительные бойлеры из нержавеющей стали увеличенного объема спроектированы на основе современных разработок. Они сочетают в себе много инновационных решений и работают максимально эффективно, принося конечному потребителю максимум горячей воды и комфорта.
<br>
ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ:
<br>
Объем 400, 500, 800, 1000, 1250, 1450, 2000 и 2500 литров<br>
Внутренний бак изготовлен из высококачественной нержавеющей стали, обладающей повышенной стойкостью<br>
Максимальное рабочее давление — 6 бар<br>
Испытательное давление — 22,5 бар<br>
Минимальное рекомендованное давление — 1 бар<br>
Теплоизоляция выполнена из высококачественного пенополиуретана толщиной 100 мм<br>
Теплообменник (змеевик) увеличенной мощности обеспечивает нагрев воды в бойлере менее чем за 60 минут<br>
Магниевый анод — не требуется<br>
ОПЦИЯ:<br>

В качестве дополнительного оборудования предлагаются ТЭНы (от 12 кВт до 162 кВт) для более равномерного прогрева всего объема воды в бойлере
Предлагаются модели для прямого, косвенного нагрева и совместной работы с солнечными панелями ";
?>

<div class="main_page">
<?php	include("../include/sidebar_zapchasti.php"); ?>
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
				<div id="text3" class="text">
					
					 +7 (495) 984-52-34
				</div>
				
			</div>
		</div>

	</div>
<?php
include("../include/footer.php");
?>