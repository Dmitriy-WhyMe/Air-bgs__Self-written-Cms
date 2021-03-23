<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_31;
$price_tovar = $element_vit_price_31;
$url_img_tovar = $element_vit_url_31;
$sklad_tovar = "10 шт";
$description_tovar = "Бытовой газовый двухконтурный настенный отопительный котел Beretta CITY 35 CSI мощностью 34,9 кВт с закрытой камерой сгорания и встроенной модулируемой газовой горелкой создан не только для обогрева домов, но и для организации горячего водоснабжения хозяйственно-бытового назначения. Воздух для горения котла поступает с улицы через коаксиальную трубу. Два раздельных пластинчатых теплообменника не подвержены коррозии: стальной - для отопления и из нержавеющей стали - на ГВС. Данная модель менее требовательна к качеству поступающей воды и оснащена всем необходимым оборудования для быстрого монтажа и включения. 

Особенности
Компактный и надёжный котёл для отопления и ГВС с принудительной циркуляцией
Отличное решение для поквартирного теплоснабжения в многоэтажных домах
Максимальный комфорт и эффективность
Интуитивно-понятное управление котлом, панель с ЖК-дисплеем, двумя ручками регулировки температуры и манометром
Два раздельных теплообменника. Первичный теплообменник стальной
Расширительный бак на 8 л
Функция предварительного нагрева воды
Два отверстия для подключения воздуховодов при раздельном дымоудалении и воздухозаборе
Возможность получения сигнала о блокировке для передачи его на расстояние (с использованием дополнительного аксессуара)
Встроенная функция погодозависимого регулирования (при установке датчика наружной температуры). Режимы «Лето», «Зима»
Трехскоростной циркуляционный насос Grundfos
Автоматический электророзжиг и ионизационный контроль пламени
Постоянная плавная регулировка мощности (модуляционная горелка)
Встроенная функция автоматической регулировки температуры теплоносителя (при подключении комнатного термостата)
Встроенная обвязка и системы безопасности
Встроенный стабилизатор давления газа
Защита от замерзания и блокировки насоса
Сбросной клапан
Погружной датчик NTC контура ГВС
Приоритет горячего водоснабжения
Возможность работы на сжиженном нефтяном газе
Система самодиагностики неисправностей с выводом информации на ЖК-дисплей
Возможность подключения пульта дистанционного управления";
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

				Технические характеристики
Тип котлаГазовый
Принцип работыКонвекционный
Кол-во контуровДвухконтурный
Способ крепленияНастенный
Тип камеры сгоранияЗакрытая
Тепловая мощность, кВт34.9
Встроенный расширительный бакДа
Встроенный циркуляционный насосДа
Природный газДа
Сжиженный газДа
Диаметр коаксиального дымохода, мм60/100, 80/125
Материал первичного теплообменникаМедь
ДисплейДа
УправлениеЭлектронное
Производитель                                                                                                                             Италия
				
				</div>
				<div id="text3" class="text">
					<a href="https://krimteploservis.com/files/brandrelations/Сертификат%20соответствия%20котел%20Beretta%2011.05.2019%20г..pdf">Сертификат</a>
					 +7 (495) 984-52-34
				</div>
		</div>

	</div>
<?php
include("../include/footer.php");
?>