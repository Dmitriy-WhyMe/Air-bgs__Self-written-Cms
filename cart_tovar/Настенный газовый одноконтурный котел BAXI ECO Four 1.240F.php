
<?php
include("../include/header.php");
include("../include/menu.php");
$name_tovar = "Настенный газовый одноконтурный котел BAXI ECO Four 1.240F";
$price_tovar = "47500";
$sklad_tovar = "3 шт";
$description_tovar = "Компания БАКСИ, известная во всем мире своим тепловым оборудованием, представляет новую модель котлов четвертого поколения BAXI ECO Four 24. Устройство отличается своими компактными габаритными размерами (730х400х299 мм) и может быть установлено в самых маленьких помещениях. ЖК-дисплей агрегата отображает всю необходимую информацию о его работе в текущий момент. Монтаж оборудования может производиться самостоятельно, без помощи профессионалов. Для этого достаточно внимательно ознакомится с инструкцией к BAXI ECO Four 24, которая прилагается в комплекте.

Особенности моделей данной серии

Адаптация под переменчивые погодные условия России;
Бесперебойная работа при входном давлении в 5 м/бар;
Возможность подключения к солнечным накопителям энергии;
Теплообменник устройства надежно защищен от коррозии.
Если вы решили купить BAXI ECO Four 24, то самое время обратиться в наш интернет-магазин и узнать о дополнительных преимуществах приобретения товара у нас.";
?>

<div class="main_page">
<?php	include("../include/sidebar_kotli.php"); ?>
	<div class="main_content">
		<div class="cart">
			<div class="cart_title">
				<h2><?php echo $name_tovar; ?></h2>
			</div>
			<div class="cart_right">
				<div class="cart_img">
					<a href="../cart_tovar/BaxiECO-4S1.24F.php"><img alt="Baxi ECO-4S 1.24F" src="../main_img/ECF.jpg"></a>
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
					<h2 style="text-align: center;">Купить газовый настенный двухконтурный котел <?php echo $name_tovar; ?> с закрытой камерой сгорания</h2>
					<p style="text-align: center;">можно у нас на сайте на прямую нажав на кнопку "Заказать", либо же позвонив по&nbsp;телефону&nbsp;и задать нашим специалистам все интересующие вопросы:&nbsp;</p>
					<p style="text-align: center;">&nbsp;<?php echo $number_one; ?></p></div>
				</div>
				<div id="text2" class="text">
					<table class="table_ps" width="701" border="0"><caption>&nbsp;</caption>
<thead>
<tr>
<td rowspan="2">
<p><strong>Технические характеристики</strong></p>
</td>
<td>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td colspan="2">
<p><strong>Отопление и горячая вода</strong></p>
</td>
<td colspan="4">
<p><strong>Только отопление</strong></p>
</td>
</tr>
<tr valign="middle">
<td>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
</td>
<td>
<p><a hrf="http://baltgazservice.ru/market/kotelnoe_oborudovanie/kotli_baxi/baxi_eco_four24f/">ECO Four&nbsp;<br>24F</a></p>
</td>
<td>
<p><a hre="http://baltgazservice.ru/market/kotelnoe_oborudovanie/kotli_baxi/baxi_eco_four24/">ECO Four<br>24</a></p>
</td>
<td>
<p>ECO Four<br>1.24F</p>
</td>
<td>
<p><a hrf="http://baltgazservice.ru/market/kotelnoe_oborudovanie/kotli_baxi/baxi_eco_four1_14f/">ECO Four<br>1.14F</a></p>
</td>
<td>
<p><a hef="http://baltgazservice.ru/market/kotelnoe_oborudovanie/kotli_baxi/baxi_eco_four1_24/">ECO Four<br>1.24</a></p>
</td>
<td>
<p><a hrf="http://baltgazservice.ru/market/kotelnoe_oborudovanie/kotli_baxi/baxi_eco_four1_14/">ECO Four<br>1.14</a></p>
</td>
</tr>
</thead>
<tbody>
<tr>
<td>
<p>Макс. полезная тепловая мощность</p>
</td>
<td>
<p>кВт</p>
</td>
<td>
<p>24</p>
</td>
<td>
<p>24</p>
</td>
<td>
<p>24</p>
</td>
<td>
<p>14</p>
</td>
<td>
<p>24</p>
</td>
<td>
<p>14</p>
</td>
</tr>
<tr>
<td>
<p>Мин. полезная тепловая мощность</p>
</td>
<td>
<p>кВт</p>
</td>
<td>
<p>9,3</p>
</td>
<td>
<p>9,3</p>
</td>
<td>
<p>9,3</p>
</td>
<td>
<p>6</p>
</td>
<td>
<p>9.3</p>
</td>
<td>
<p>6</p>
</td>
</tr>
<tr>
<td>
<p>Макс. потребляемая тепловая мощность</p>
</td>
<td>
<p>кВт</p>
</td>
<td>
<p>25,8</p>
</td>
<td>
<p>26,3</p>
</td>
<td>
<p>25,8</p>
</td>
<td>
<p>15,1</p>
</td>
<td>
<p>26,3</p>
</td>
<td>
<p>15,4</p>
</td>
</tr>
<tr>
<td>
<p>Мин. потребляемая тепловая мощность</p>
</td>
<td>
<p>кВт</p>
</td>
<td>
<p>10,6</p>
</td>
<td>
<p>10,6</p>
</td>
<td>
<p>10,6</p>
</td>
<td>
<p>7,1</p>
</td>
<td>
<p>10.6</p>
</td>
<td>
<p>7,1</p>
</td>
</tr>
<tr>
<td>
<p>Макс. производительность</p>
</td>
<td>
<p>%</p>
</td>
<td>
<p>92,9</p>
</td>
<td>
<p>91,2</p>
</td>
<td>
<p>92,9</p>
</td>
<td>
<p>92,5</p>
</td>
<td>
<p>91,2</p>
</td>
<td>
<p>90,9</p>
</td>
</tr>
<tr>
<td>
<p>Расширительный бак</p>
</td>
<td>
<p>л/бар</p>
</td>
<td>
<p>6/0,5</p>
</td>
<td>
<p>6/0,5</p>
</td>
<td>
<p>6/0,5</p>
</td>
<td>
<p>6/0,5</p>
</td>
<td>
<p>6/0,5</p>
</td>
<td>
<p>6/0,5</p>
</td>
</tr>
<tr>
<td>
<p>Камера сгорания</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>закр.</p>
</td>
<td>
<p>откр.</p>
</td>
<td>
<p>закр.</p>
</td>
<td>
<p>закр.</p>
</td>
<td>
<p>откр.</p>
</td>
<td>
<p>откр.</p>
</td>
</tr>
<tr>
<td>
<p>Диапазон регулирования темп. в контуре ГВС</p>
</td>
<td>
<p>°С</p>
</td>
<td>
<p>35-60</p>
</td>
<td>
<p>35-60</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Кол-во горячей воды при ΔТ=25°С</p>
</td>
<td>
<p>л/мин</p>
</td>
<td>
<p>13,7</p>
</td>
<td>
<p>13,7</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Мин. расход воды в контуре ГВС</p>
</td>
<td>
<p>л/мин</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Макс. давление в контуре ГВС</p>
</td>
<td>
<p>бар</p>
</td>
<td>
<p>8</p>
</td>
<td>
<p>8</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Мин. давление в контуре ГВС</p>
</td>
<td>
<p>бар</p>
</td>
<td>
<p>0,15</p>
</td>
<td>
<p>0,15</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Диаметр дымохода</p>
</td>
<td>
<p>мм</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>120</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>120</p>
</td>
<td>
<p>120</p>
</td>
</tr>
<tr>
<td>
<p>Диаметр дымоотвод. труб (коакс./раздельных)</p>
</td>
<td>
<p>мм</p>
</td>
<td>
<p>60-100/80</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>60-100/80</p>
</td>
<td>
<p>60-100/80</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Макс. длина дымоотвод. труб (коакс./раздельных)</p>
</td>
<td>
<p>м</p>
</td>
<td>
<p>5/30</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>5/30</p>
</td>
<td>
<p>5/30</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Номинальное входное давление газа (метан G20)</p>
</td>
<td>
<p>мбар</p>
</td>
<td>
<p>20</p>
</td>
<td>
<p>20</p>
</td>
<td>
<p>20</p>
</td>
<td>
<p>20</p>
</td>
<td>
<p>20</p>
</td>
<td>
<p>20</p>
</td>
</tr>
<tr>
<td>
<p>Мощность/напряжение</p>
</td>
<td>
<p>Вт/В</p>
</td>
<td>
<p>130/230</p>
</td>
<td>
<p>80/230</p>
</td>
<td>
<p>130/230</p>
</td>
<td>
<p>120/230</p>
</td>
<td>
<p>80/230</p>
</td>
<td>
<p>80/230</p>
</td>
</tr>
<tr>
<td>
<p>Габаритные&nbsp;размеры:</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td>
<p>- высота</p>
</td>
<td>
<p>мм</p>
</td>
<td>
<p>730</p>
</td>
<td>
<p>730</p>
</td>
<td>
<p>730</p>
</td>
<td>
<p>730</p>
</td>
<td>
<p>730</p>
</td>
<td>
<p>730</p>
</td>
</tr>
<tr>
<td>
<p>- ширина</p>
</td>
<td>
<p>мм</p>
</td>
<td>
<p>400</p>
</td>
<td>
<p>400</p>
</td>
<td>
<p>400</p>
</td>
<td>
<p>400</p>
</td>
<td>
<p>400</p>
</td>
<td>
<p>400</p>
</td>
</tr>
<tr>
<td>
<p>- глубина</p>
</td>
<td>
<p>мм</p>
</td>
<td>
<p>299</p>
</td>
<td>
<p>299</p>
</td>
<td>
<p>299</p>
</td>
<td>
<p>299</p>
</td>
<td>
<p>299</p>
</td>
<td>
<p>299</p>
</td>
</tr>
<tr>
<td>
<p>Вес НЕТТО</p>
</td>
<td>
<p>кг</p>
</td>
<td>
<p>31,5</p>
</td>
<td>
<p>27,5</p>
</td>
<td>
<p>29,5</p>
</td>
<td>
<p>28,5</p>
</td>
<td>
<p>25,5</p>
</td>
<td>
<p>25,5</p>
</td>
</tr>
<tr>
<td>
<p><br></p></td><td></td><td></td><td></td><td></td><td></td><td></td><td>
<p><strong>&nbsp;</strong></p>
</td>
</tr>
</tbody>
</table>

				<div id="text3" class="text">
					2Настенные газовые котлы ECO-4s отличаются компактностью, надежностью и простотой установки, эксплуатации и обслуживания. Модель оснащена гидравлической группой из композитных материалов, двумя раздельными теплообменниками на отопление и ГВС и турбинным датчиком протока-расходомером, который дает потребителю еще больший комфорт при пользовании горячей водой. Несомненным преимуществом котлов ECO-4s является простой и привычный интерфейс управления обеспечивающий полную информацию о работе котла и расширенную самодиагностику.
					<br><br>
					Купить газовый настенный двухконтурный котел Baxi ECO-4s 1.24F с закрытой камерой сгорания
					можно у нас на сайте на прямую нажав на кнопку "Заказать", либо же позвонив по телефону и задать нашим специалистам все интересующие вопросы: 
					<br><br>
					 +7 (495) 984-52-34
				</div>
			
			</div>
			<div xmlns:xlink="http://www.w3.org/TR/xlink" class="reviews"><div class="reviews_h2 h2"><div>Отзывы<span class="reviews__product-name"> о товаре "Baxi ECO Four 1.24F "</span></div></div><div class="reviews_list"><div class="review"><div class="review_title"><div class="review_date">07.08.2017</div><span class="review_author">Алима Тарасова</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3176_idp258144" class="text review_text">В нашем случае котел обошелся дешево и сердито</div></div><div class="review"><div class="review_title"><div class="review_date">09.07.2017</div><span class="review_author">Наталья Орлач</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3095_idp260208" class="text review_text">Такой котел я купила в прошлом году и осталась очень довольна, что выбрала именно эту модель. Сначала хотела купить электрический котел, но у меня часто бывают проблемы с электроэнергией, поэтому и выбрала газовый котел. Хочу сказать, что этот отопительный сезон котел проработал хорошо, были моменты, когда была слабая подача газа, но на работе котла это никак не отразилось. И даже в сильные морозы в доме было тепло и уютно.</div></div><div class="review"><div class="review_title"><div class="review_date">11.06.2017</div><span class="review_author">Екатерина Цветаева</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3109_idp263488" class="text review_text">Когда выбирала газовый котел на дачу, остановилась именно на этой модели, она идеально подходила по характеристикам. И вправду, котел оказался качественный, да и цена порадовала.</div></div><div class="review"><div class="review_title"><div class="review_date">14.05.2017</div><span class="review_author">Алина Семикина</span><div class="grade_stars grade-stars-"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2930_idp266224" class="text review_text">Отличный интернет магазин газовых котлов!! Покупала тут котел! Осталась всем довольна, цены самые низкие, и работает все отлично!!</div></div><div class="review"><div class="review_title"><div class="review_date">11.04.2017</div><span class="review_author">Елена Пикалова</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3104_idp268544" class="text review_text">Установили этот отличный котёл у себя в доме, покупкой очень довольны! Котёл практически полностью автоматический, регулировка и поддержка температуры работают замечательно!</div></div><div class="review"><div class="review_title"><div class="review_date">10.03.2017</div><span class="review_author">Наталья Кузнецова</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3097_idp271264" class="text review_text">Живем с мужем в своем доме, котел стоял старый, газ уходил сотнями кубов.Теперь поменяли, так гораздо экономней и котел меньше места занимает, вообщем я рада!</div></div></div></div>
		</div>

	</div>
<?php
include("../include/footer.php");
?>