
<?php
include("../include/header.php");
include("../include/menu.php");
$name_tovar = "Baxi ECO-4S 1.24F";
$price_tovar = "42000";
$sklad_tovar = "10 шт";
$description_tovar = "Настенные газовые котлы ECO-4s отличаются компактностью, надежностью и простотой установки, эксплуатации и обслуживания. Модель оснащена гидравлической группой из композитных материалов, двумя раздельными теплообменниками на отопление и ГВС и турбинным датчиком протока-расходомером, который дает потребителю еще больший комфорт при пользовании горячей водой. Несомненным преимуществом котлов ECO-4s является простой и привычный интерфейс управления обеспечивающий полную информацию о работе котла и расширенную самодиагностику.";
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
					<a href="../cart_tovar/BaxiECO-4S1.24F.php"><img alt="Baxi ECO-4S 1.24F" src="../main_img/EC1.jpg"></a>
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
					<h3>ГАЗОВАЯ СИСТЕМА</h3>
					<ul>
					<li><strong>Непрерывная электронная модуляция пламени в режимах отопления и ГВС;</strong></li>
					<li><strong>Котлы адаптированы к российским условиям. Устойчиво работают при понижении входного давления природного газа до 5 мбар;</strong></li>
					<li>Плавное электронное зажигание;</li>
					<li>Рассекатели пламени на горелке изготовлены из нержавеющей стали;</li>
					<li>Запатентованная система регулирования подачи воздуха (модели с закрытой камерой);</li>
					<li>Возможна перенастройка для работы на сжиженном газе.</li>
					</ul>
					<p>&nbsp;</p>
					<h3>ГИДРАВЛИЧЕСКАЯ СИСТЕМА</h3>
					<ul>
					<li><strong>Гидравлическая группа из композитных материалов;</strong></li>
					<li><strong>Турбинный датчик протока горячей воды (расходомер);</strong></li>
					<li><strong>Энергосберегающий циркуляционный насос со встроенным автоматическим воздухоотводчиком;</strong></li>
					<li>Первичный медный теплообменник, покрытый специальным составом для дополнительной защиты от коррозии;</li>
					<li>Вторичный пластинчатый теплообменник из нержавеющей стали (двухконтурные модели);</li>
					<li>Трехходовой клапан с электрическим сервоприводом (двухконтурные модели);</li>
					<li>Манометр;</li>
					<li>Автоматический байпас;</li>
					<li>Постциркуляция насоса;</li>
					<li>Фильтр на&nbsp;входе холодной воды;</li>
					<li>Возможность подключения к&nbsp;солнечным коллекторам.</li>
					</ul>
					<p>&nbsp;</p>
					<h3>ТЕМПЕРАТУРНЫЙ КОНТРОЛЬ</h3>
					<ul>
					<li><strong>Два диапазона регулирования температуры в системе отопления: 30-85°С и 30-45°С (режим «теплые полы»);</strong></li>
					<li><strong>Встроенная погодозависимая автоматика (возможность подключения датчика уличной температуры);</strong></li>
					<li>Регулирование и&nbsp;автоматическое поддержание заданной температуры в&nbsp;контурах отопления и ГВС;</li>
					<li>Цифровая индикация температуры;</li>
					<li>Возможность подключения комнатного термостата и&nbsp;программируемого таймера.</li>
					</ul>
					<p>&nbsp;</p>
					<h3>УСТРОЙСТВА КОНТРОЛЯ И&nbsp;БЕЗОПАСНОСТИ</h3>
					<ul>
					<li><strong>Жидкокристаллический дисплей с&nbsp;кнопочным управлением;</strong></li>
					<li><strong>Электронная система самодиагностики;</strong></li>
					<li><strong>Возможность вывода сигнала о&nbsp;блокировке котла на&nbsp;пульт диспетчера;</strong></li>
					<li>Ионизационный контроль пламени;</li>
					<li>Система защиты от блокировки насоса (включается автоматически каждые 24 ч);</li>
					<li>Система защиты от блокировки трехходового клапана (включается автоматически каждые 24 ч);</li>
					<li>Защитный термостат от перегрева теплоносителя в&nbsp;первичном теплообменнике;</li>
					<li>Датчик тяги для контроля за безопасным удалением продуктов сгорания (пневмореле — для моделей с закрытой камерой сгорания, термостат — для моделей с открытой камерой);</li>
					<li>Прессостат в системе отопления — срабатывает при недостатке давления воды;</li>
					<li>Предохранительный клапан в&nbsp;контуре отопления (3&nbsp;атм.);</li>
					<li>Система защиты от замерзания в&nbsp;контурах отопления и&nbsp;ГВС.</li>
					</ul>
					<p>&nbsp;</p>
					<div class="tab-cont forprint active">
					<table class="table_ps">
					<thead>
					<tr>
					<td rowspan="2" colspan="2">
					<p><strong>Технические характеристики</strong></p>
					</td>
					<td colspan="4">
					<p align="center"><strong>Отопление и горячая вода</strong></p>
					</td>
					<td>
					<p align="center"><strong>Только отопление</strong></p>
					</td>
					</tr>
					<tr>
					<td>
					<p align="center"><strong>ECO-4s 10F</strong></p>
					</td>
					<td>
					<p align="center"><strong>ECO-4s 18F</strong></p>
					</td>
					<td>
					<p align="center"><strong>ECO-4s 24F</strong></p>
					</td>
					<td>
					<p align="center"><strong>ECO-4s 24</strong></p>
					</td>
					<td>
					<p align="center"><strong>ECO-4s 1.24F</strong></p>
					</td>
					</tr>
					<tr>
					<td colspan="2">Добавить к сравнению</td>
					<td align="center">
					<div class="jq-checkbox compare_box"><input class="compare_box" type="checkbox" value="8159">
					<div class="jq-checkbox__div">&nbsp;</div>
					</div>
					</td>
					<td align="center">
					<div class="jq-checkbox compare_box"><input class="compare_box" type="checkbox" value="8163">
					<div class="jq-checkbox__div">&nbsp;</div>
					</div>
					</td>
					<td align="center">
					<div class="jq-checkbox compare_box"><input class="compare_box" type="checkbox" value="8164">
					<div class="jq-checkbox__div">&nbsp;</div>
					</div>
					</td>
					<td align="center">
					<div class="jq-checkbox compare_box"><input class="compare_box" type="checkbox" value="8165">
					<div class="jq-checkbox__div">&nbsp;</div>
					</div>
					</td>
					<td align="center">
					<div class="jq-checkbox compare_box"><input class="compare_box" type="checkbox" value="8166">
					<div class="jq-checkbox__div">&nbsp;</div>
					</div>
					</td>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td>
					<p>Макс. полезная тепловая мощность</p>
					</td>
					<td align="center">кВт</td>
					<td align="center">10</td>
					<td align="center">18</td>
					<td align="center">24</td>
					<td align="center">24</td>
					<td align="center">24</td>
					</tr>
					<tr>
					<td>
					<p>Мин. полезная тепловая мощность</p>
					</td>
					<td align="center">кВт</td>
					<td align="center">10</td>
					<td align="center">9,3</td>
					<td align="center">9,3</td>
					<td align="center">9,3</td>
					<td align="center">9,3</td>
					</tr>
					<tr>
					<td>
					<p>Макс. потребляемая тепловая мощность</p>
					</td>
					<td align="center">кВт</td>
					<td align="center">11,3</td>
					<td align="center">20</td>
					<td align="center">25,8</td>
					<td align="center">26,3</td>
					<td align="center">25,8</td>
					</tr>
					<tr>
					<td>
					<p>Мин. потребляемая тепловая мощность</p>
					</td>
					<td align="center">кВт</td>
					<td align="center">11,3</td>
					<td align="center">10,6</td>
					<td align="center">10,6</td>
					<td align="center">10,6</td>
					<td align="center">10,6</td>
					</tr>
					<tr>
					<td>
					<p>Макс. расход природного/сжиженного газа в режиме отопления</p>
					</td>
					<td align="center">м3/ч (кг/ч)</td>
					<td align="center">1,19 (0,88)</td>
					<td align="center">2,11 (1,55)</td>
					<td align="center">2,73 (2,00)</td>
					<td align="center">2,78/(2,04)</td>
					<td align="center">2,73 (2,00)</td>
					</tr>
					<tr>
					<td>
					<p>Макс. производительность (КПД)</p>
					</td>
					<td align="center">%</td>
					<td align="center">92,9</td>
					<td align="center">92,5</td>
					<td align="center">92,9</td>
					<td align="center">91,2</td>
					<td align="center">92,9</td>
					</tr>
					<tr>
					<td>
					<p>Производительность (КПД) при 30% мощности</p>
					</td>
					<td align="center">%</td>
					<td align="center">90,4</td>
					<td align="center">89,9</td>
					<td align="center">90,4</td>
					<td align="center">89,3</td>
					<td align="center">90,2</td>
					</tr>
					<tr>
					<td>
					<p>Емкость/давление заполнения расшир. бака</p>
					</td>
					<td align="center">л/бар</td>
					<td align="center">6/0,5</td>
					<td align="center">6/0,5</td>
					<td align="center">6/0,5</td>
					<td align="center">6/0,5</td>
					<td align="center">6/0,5</td>
					</tr>
					<tr>
					<td>
					<p>Камера сгорания</p>
					</td>
					<td align="center">-</td>
					<td align="center">закр.</td>
					<td align="center">закр.</td>
					<td align="center">закр.</td>
					<td align="center">откр.</td>
					<td align="center">закр.</td>
					</tr>
					<tr>
					<td>
					<p>Диапазон регулирования температуры в контуре ГВС</p>
					</td>
					<td align="center">°С</td>
					<td align="center">35-60</td>
					<td align="center">35-60</td>
					<td align="center">35-60</td>
					<td align="center">35-60</td>
					<td align="center">35-60</td>
					</tr>
					<tr>
					<td>
					<p>Производительность горячей воды при Δt=25°C</p>
					</td>
					<td align="center">л/мин</td>
					<td align="center">13,7</td>
					<td align="center">13,7</td>
					<td align="center">13,7</td>
					<td align="center">13,7</td>
					<td align="center">-</td>
					</tr>
					<tr>
					<td>
					<p>Производительность горячей воды при Δt=35°C</p>
					</td>
					<td align="center">л/мин</td>
					<td align="center">9,8</td>
					<td align="center">9,8</td>
					<td align="center">9,8</td>
					<td align="center">9,8</td>
					<td align="center">-</td>
					</tr>
					<tr>
					<td>
					<p>Мин. расход воды в контуре ГВС</p>
					</td>
					<td align="center">л/мин</td>
					<td align="center">2</td>
					<td align="center">2</td>
					<td align="center">2</td>
					<td align="center">2</td>
					<td align="center">-</td>
					</tr>
					<tr>
					<td>
					<p>Макс./мин. давление в контуре ГВС</p>
					</td>
					<td align="center">л/мин</td>
					<td align="center">8/0,15</td>
					<td align="center">8/0,15</td>
					<td align="center">8/0,15</td>
					<td align="center">8/0,15</td>
					<td align="center">-</td>
					</tr>
					<tr>
					<td>
					<p>Диаметр дымохода</p>
					</td>
					<td align="center">мм</td>
					<td align="center">-</td>
					<td align="center">-</td>
					<td align="center">-</td>
					<td align="center">120</td>
					<td align="center">-</td>
					</tr>
					<tr>
					<td>
					<p>Диаметр дымоотвод. труб (коакс./раздельных)</p>
					</td>
					<td align="center">мм</td>
					<td align="center">(60-100)/80</td>
					<td align="center">(60-100)/80</td>
					<td align="center">(60-100)/80</td>
					<td align="center">-</td>
					<td align="center">(60-100)/80</td>
					</tr>
					<tr>
					<td>
					<p>Макс. длина дымоотвод. труб (коакс./раздельных)</p>
					</td>
					<td align="center">м</td>
					<td align="center">5/23</td>
					<td align="center">5/23</td>
					<td align="center">5/23</td>
					<td align="center">-</td>
					<td align="center">5/23</td>
					</tr>
					<tr>
					<td>
					<p>Номинальное входное давление природного газа</p>
					</td>
					<td align="center">мбар</td>
					<td align="center">13—20</td>
					<td align="center">13—20</td>
					<td align="center">13—20</td>
					<td align="center">13—20</td>
					<td align="center">13—20</td>
					</tr>
					<tr>
					<td>
					<p>Электрическая мощность/напряжение</p>
					</td>
					<td align="center">Вт/В</td>
					<td align="center">130/230</td>
					<td align="center">130/230</td>
					<td align="center">130/230</td>
					<td align="center">80/230</td>
					<td align="center">130/230</td>
					</tr>
					<tr>
					<td>
					<p>Габаритные размеры: высота</p>
					</td>
					<td align="center">мм</td>
					<td align="center">730</td>
					<td align="center">730</td>
					<td align="center">730</td>
					<td align="center">730</td>
					<td align="center">730</td>
					</tr>
					<tr>
					<td>
					<p>Габаритные размеры: ширина</p>
					</td>
					<td align="center">мм</td>
					<td align="center">400</td>
					<td align="center">400</td>
					<td align="center">400</td>
					<td align="center">400</td>
					<td align="center">400</td>
					</tr>
					<tr>
					<td>
					<p>Габаритные размеры: ширина</p>
					</td>
					<td align="center">мм</td>
					<td align="center">299</td>
					<td align="center">299</td>
					<td align="center">299</td>
					<td align="center">299</td>
					<td align="center">299</td>
					</tr>
					<tr>
					<td>
					<p>Вес НЕТТО/БРУТТО</p>
					</td>
					<td align="center">кг</td>
					<td align="center">30/33</td>
					<td align="center">30/33</td>
					<td align="center">30/33</td>
					<td align="center">29/32</td>
					<td align="center">29/32,5</td>
					</tr>
					<tr>
					<td>
					<p>Упаковочные размеры</p>
					</td>
					<td align="center">см</td>
					<td align="center">49x83x34</td>
					<td align="center">49x83x34</td>
					<td align="center">49x83x34</td>
					<td align="center">49x83x34</td>
					<td align="center">49x83x34</td>
					</tr>
					<tr>
					<td>
					<p>Рекомендованная розничная цена</p>
					</td>
					<td align="center">EURO</td>
					<td align="center">709</td>
					<td align="center">739</td>
					<td align="center">769</td>
					<td align="center">719</td>
					<td align="center">719</td>
					</tr>
					</tbody>
					</table>
					</div></div>
				</div>
				<div id="text3" class="text">
					2Настенные газовые котлы ECO-4s отличаются компактностью, надежностью и простотой установки, эксплуатации и обслуживания. Модель оснащена гидравлической группой из композитных материалов, двумя раздельными теплообменниками на отопление и ГВС и турбинным датчиком протока-расходомером, который дает потребителю еще больший комфорт при пользовании горячей водой. Несомненным преимуществом котлов ECO-4s является простой и привычный интерфейс управления обеспечивающий полную информацию о работе котла и расширенную самодиагностику.
					<br><br>
					Купить газовый настенный двухконтурный котел Baxi ECO-4s 1.24F с закрытой камерой сгорания
					можно у нас на сайте на прямую нажав на кнопку "Заказать", либо же позвонив по телефону и задать нашим специалистам все интересующие вопросы: 
					<br><br>
					 +7 (495) 984-52-34
				</div>
				<div xmlns:xlink="http://www.w3.org/TR/xlink" class="reviews"><div class="reviews_h2 h2"><div>Отзывы<span class="reviews__product-name"> о товаре "Baxi ECO4s 1.24F"</span><script type="text/javascript">
  						var product_name = jQuery('.breadcrumbs_last div').text();
  						if (product_name.length)
   							jQuery('.reviews__product-name').text(' о товаре "' + product_name + '"');
					</script></div></div><div class="reviews_list"><div class="review"><div class="review_title"><div class="review_date">03.11.2017</div><span class="review_author">Никита Довгий</span><div class="grade_stars grade-stars-"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3667_idp2128" class="text review_text">Мне понравился этот котел. Соотношение цена -качество превосходное!</div></div><div class="review"><div class="review_title"><div class="review_date">03.10.2017</div><span class="review_author">Уля Аленка</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3666_idp274272" class="text review_text">Котел вполне хороший, нам понравился, греет нормально.</div></div><div class="review"><div class="review_title"><div class="review_date">03.08.2017</div><span class="review_author">Зинаида Андрова</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3161_idp276448" class="text review_text">Он оказался одним из самых недорогих, плюс цены у них от поставщиков и к тому же очень удобным.</div></div><div class="review"><div class="review_title"><div class="review_date">13.05.2017</div><span class="review_author">Саша</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2914_idp278704" class="text review_text">Отличный котел, работает без проблем и перебоев. Я не пожалел о том, что приобрел именно его.</div></div><div class="review"><div class="review_title"><div class="review_date">09.05.2017</div><span class="review_author">Алексей Монахов</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2884_idp280944" class="text review_text">Бригада рабочих, которые делают у меня ремонт, посоветовали выбрать эту модель котла. Согласен, модель очень неплохая. Компактный (подойдет для моего небольшого помещения), и надежный.</div></div><div class="review"><div class="review_title"><div class="review_date">16.04.2017</div><span class="review_author">Константин Уткин</span><div class="grade_stars grade-stars-"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2944_idp283696" class="text review_text">Котел вполне хороший, нам понравился, греет нормально.</div></div><div class="review"><div class="review_title"><div class="review_date">18.03.2017</div><span class="review_author">Иван Гринцов</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2819_idp285872" class="text review_text">Друг посоветовал этот котёл, давно использует и нареканий никаких не возникало.Приобрёл в результате и себе, всё устраивает, качество на высоте. По цене нормально, за такую полезную вещь</div></div><div class="review"><div class="review_title"><div class="review_date">07.03.2017</div><span class="review_author">Аноним</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3395_idp288640" class="text review_text">Линия для подачи подогретой воды и линия отопления обеспечены водяными насосами. Модель оборудована аккуратным дымоходом. Отработанный воздух выводится принудительно вентилятором. Мне нравится наш умный котел тем, что когда отключили газ по техническим причинам, он начал работать в аварийном режиме, гоняя воду по батареям и не давая ей замерзнуть.<br></div></div><div class="review"><div class="review_title"><div class="review_date">05.03.2017</div><span class="review_author">Женя Мотылева</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2806_idp291920" class="text review_text">Прошлой осенью брали домой ECO-4s - этот газовый котел. Думаю пришло время дать отзыв. Котел не занимает много места. Для монтажа нанимали спецов из местной фирмы, установили без проблем. За 5 мес работы никаких сбоев не было. Понравилась функция с расходом горячей воды. Преимущественно один позитив.</div></div><div class="review"><div class="review_title"><div class="review_date">12.02.2017</div><span class="review_author">Денис Морозов</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2902_idp295088" class="text review_text">Наконец достроили свой дом! Приобрели данную модель газового котла. Очень понравился дизайн, нет ничего лишнего, функционален, доступная цена. Остались довольны!</div></div><div class="review"><div class="review_title"><div class="review_date">08.02.2017</div><span class="review_author">Аноним</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_3412_idp297472" class="text review_text">Экономичный, лёгкое управление, закрытый, дома тепло в любую погоду.</div></div><div class="review"><div class="review_title"><div class="review_date">14.01.2017</div><span class="review_author">Екатерина Трафимова</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2923_idp299680" class="text review_text">Мне понравился этот котел. Соотношение цена -качество превосходное!</div></div><div class="review"><div class="review_title"><div class="review_date">13.01.2017</div><span class="review_author">Анастасия</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2916_idp301888" class="text review_text">Хорошая техника именно в этой сети магазинов, я купила котел и теперь он у меня установлен и работает без проблем и перебоев.</div></div><div class="review"><div class="review_title"><div class="review_date">16.11.2016</div><span class="review_author">Алена Котова</span><div class="grade_stars grade-stars-5"><span class="star star-1" rel="1">&nbsp;</span><span class="star star-2" rel="2">&nbsp;</span><span class="star star-3" rel="3">&nbsp;</span><span class="star star-4" rel="4">&nbsp;</span><span class="star star-5" rel="5">&nbsp;</span></div><div class="cleaner"></div></div><div id="message_2945_idp304192" class="text review_text">Вполне нормальный котел, подойдет к любому креплению.</div></div></div></div>
			</div>
		</div>

	</div>
<?php
include("../include/footer.php");
?>