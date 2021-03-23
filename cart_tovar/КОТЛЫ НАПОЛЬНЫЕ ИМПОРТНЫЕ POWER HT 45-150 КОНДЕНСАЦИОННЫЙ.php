<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
$name_tovar = $element_vit_name_36;
$price_tovar = $element_vit_price_36;
$url_img_tovar = $element_vit_url_36;
$sklad_tovar = "10 шт";
$description_tovar = "POWER HT — это высокотехнологичные напольные котлы, сочетающие в себе передовые технологии, высокую производительность и компактные размеры (ширина всех моделей 45 см). Высокий КПД (110%) котла позволяет обеспечить энергосбережение до 35% в год (по сравнению с традиционными котлами). Возможность каскадной установки котлов позволяет получить большую мощность при небольших габаритах котельной.";
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
	<input class="compare_box" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;" type="checkbox" value="923"><input class="compare_box" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;" type="checkbox" value="924"><input class="compare_box" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;" type="checkbox" value="925"><input class="compare_box" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;" type="checkbox" value="926"><input class="compare_box" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;" type="checkbox" value="927"><input class="compare_box" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;" type="checkbox" value="928"></p>
<table class="table_ps">
	<tbody>
		<tr>
			<td rowspan="2">
				<p>
					<span style="font-size:14px;"><strong>Технические характеристики</strong></span></p>
			</td>
			<td>
				&nbsp;</td>
			<td colspan="6">
				<p align="center">
					<span style="font-size:14px;"><strong>ТОЛЬКО ОТОПЛЕНИЕ</strong></span></p>
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;</td>
			<td>
				<p align="center">
					<span style="font-size:14px;"><strong>POWER HT 1.450</strong></span></p>
			</td>
			<td>
				<p align="center">
					<span style="font-size:14px;"><strong>POWER HT 1.650</strong></span></p>
			</td>
			<td>
				<p align="center">
					<span style="font-size:14px;"><strong>POWER HT 1.850</strong></span></p>
			</td>
			<td>
				<p align="center">
					<span style="font-size:14px;"><strong>POWER HT 1.1000</strong></span></p>
			</td>
			<td>
				<p align="center">
					<span style="font-size:14px;"><strong>POWER HT 1.1200</strong></span></p>
			</td>
			<td>
				<p align="center">
					<span style="font-size:14px;"><strong>POWER HT 1.1500</strong></span></p>
			</td>
		</tr>
		<tr>
			<td>
				<span style="font-size:14px;">Добавить к сравнению</span></td>
			<td>
				&nbsp;</td>
			<td align="center">
				&nbsp;</td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Макс. полез. тепл. мощность по отоплению: в режиме 75/60°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кВт</span></td>
			<td align="center">
				<span style="font-size:14px;">45</span></td>
			<td align="center">
				<span style="font-size:14px;">65</span></td>
			<td align="center">
				<span style="font-size:14px;">85</span></td>
			<td align="center">
				<span style="font-size:14px;">100</span></td>
			<td align="center">
				<span style="font-size:14px;">120</span></td>
			<td align="center">
				<span style="font-size:14px;">150</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Макс. полез. тепл. мощность по отоплению: в режиме 50/30°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кВт</span></td>
			<td align="center">
				<span style="font-size:14px;">48,7</span></td>
			<td align="center">
				<span style="font-size:14px;">70,3</span></td>
			<td align="center">
				<span style="font-size:14px;">91,6</span></td>
			<td align="center">
				<span style="font-size:14px;">107,8</span></td>
			<td align="center">
				<span style="font-size:14px;">129,7</span></td>
			<td align="center">
				<span style="font-size:14px;">162</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Мин. полез. тепл. мощность по отоплению: в режиме 75/60°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кВт</span></td>
			<td align="center">
				<span style="font-size:14px;">11,8</span></td>
			<td align="center">
				<span style="font-size:14px;">19,3</span></td>
			<td align="center">
				<span style="font-size:14px;">32,2</span></td>
			<td align="center">
				<span style="font-size:14px;">35,8</span></td>
			<td align="center">
				<span style="font-size:14px;">39</span></td>
			<td align="center">
				<span style="font-size:14px;">40,4</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Мин. полез. тепл. мощность по отоплению: в режиме 50/30°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кВт</span></td>
			<td align="center">
				<span style="font-size:14px;">12,8</span></td>
			<td align="center">
				<span style="font-size:14px;">14,5</span></td>
			<td align="center">
				<span style="font-size:14px;">34,9</span></td>
			<td align="center">
				<span style="font-size:14px;">38,8</span></td>
			<td align="center">
				<span style="font-size:14px;">42,1</span></td>
			<td align="center">
				<span style="font-size:14px;">43,7</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Макс. потребляемая тепловая мощность</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кВт</span></td>
			<td align="center">
				<span style="font-size:14px;">46,4</span></td>
			<td align="center">
				<span style="font-size:14px;">67</span></td>
			<td align="center">
				<span style="font-size:14px;">87,2</span></td>
			<td align="center">
				<span style="font-size:14px;">102,7</span></td>
			<td align="center">
				<span style="font-size:14px;">123,2</span></td>
			<td align="center">
				<span style="font-size:14px;">154</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Мин. потребляемая тепловая мощность</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кВт</span></td>
			<td align="center">
				<span style="font-size:14px;">12,2</span></td>
			<td align="center">
				<span style="font-size:14px;">13,8</span></td>
			<td align="center">
				<span style="font-size:14px;">33,1</span></td>
			<td align="center">
				<span style="font-size:14px;">36,8</span></td>
			<td align="center">
				<span style="font-size:14px;">40</span></td>
			<td align="center">
				<span style="font-size:14px;">41,5</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Макс. расход природного/сжиженного газа</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">м<sup>3</sup>/ч (кг/ч)</span></td>
			<td align="center">
				<span style="font-size:14px;">4,91 (3,6)</span></td>
			<td align="center">
				<span style="font-size:14px;">7,08 (5,2)</span></td>
			<td align="center">
				<span style="font-size:14px;">9,26 (6,77)</span></td>
			<td align="center">
				<span style="font-size:14px;">10,4 (7,69)</span></td>
			<td align="center">
				<span style="font-size:14px;">13,08 (9,56)</span></td>
			<td align="center">
				<span style="font-size:14px;">16,35 (11,95)</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Производительность (КПД): в режиме 75/60°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">%</span></td>
			<td align="center">
				<span style="font-size:14px;">97,5</span></td>
			<td align="center">
				<span style="font-size:14px;">97,5</span></td>
			<td align="center">
				<span style="font-size:14px;">97,5</span></td>
			<td align="center">
				<span style="font-size:14px;">97,4</span></td>
			<td align="center">
				<span style="font-size:14px;">97,4</span></td>
			<td align="center">
				<span style="font-size:14px;">97,4</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Производительность (КПД): в режиме 50/30°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">%</span></td>
			<td align="center">
				<span style="font-size:14px;">107,5</span></td>
			<td align="center">
				<span style="font-size:14px;">107,5</span></td>
			<td align="center">
				<span style="font-size:14px;">107</span></td>
			<td align="center">
				<span style="font-size:14px;">107</span></td>
			<td align="center">
				<span style="font-size:14px;">108</span></td>
			<td align="center">
				<span style="font-size:14px;">107</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Диапазон температур в контуре отопления</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">°С</span></td>
			<td align="center">
				<span style="font-size:14px;">25—90</span></td>
			<td align="center">
				<span style="font-size:14px;">25—90</span></td>
			<td align="center">
				<span style="font-size:14px;">25—90</span></td>
			<td align="center">
				<span style="font-size:14px;">25—90</span></td>
			<td align="center">
				<span style="font-size:14px;">25—90</span></td>
			<td align="center">
				<span style="font-size:14px;">25—90</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Номинальная циркуляция воды через котел при Δt=20°С</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">м<sup>3</sup>/ч</span></td>
			<td align="center">
				<span style="font-size:14px;">1,94</span></td>
			<td align="center">
				<span style="font-size:14px;">2,8</span></td>
			<td align="center">
				<span style="font-size:14px;">3,7</span></td>
			<td align="center">
				<span style="font-size:14px;">4,3</span></td>
			<td align="center">
				<span style="font-size:14px;">5,2</span></td>
			<td align="center">
				<span style="font-size:14px;">6,5</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Диаметр дымоотвод. труб</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">мм</span></td>
			<td align="center">
				<span style="font-size:14px;">80</span></td>
			<td align="center">
				<span style="font-size:14px;">80</span></td>
			<td align="center">
				<span style="font-size:14px;">100</span></td>
			<td align="center">
				<span style="font-size:14px;">100</span></td>
			<td align="center">
				<span style="font-size:14px;">100</span></td>
			<td align="center">
				<span style="font-size:14px;">100</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Макс. длина дымоотвод. труб</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">м</span></td>
			<td align="center">
				<span style="font-size:14px;">30</span></td>
			<td align="center">
				<span style="font-size:14px;">20</span></td>
			<td align="center">
				<span style="font-size:14px;">20</span></td>
			<td align="center">
				<span style="font-size:14px;">20</span></td>
			<td align="center">
				<span style="font-size:14px;">20</span></td>
			<td align="center">
				<span style="font-size:14px;">20</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Номинальное входное давление природного газа</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">мбар</span></td>
			<td align="center">
				<span style="font-size:14px;">5—20</span></td>
			<td align="center">
				<span style="font-size:14px;">5—20</span></td>
			<td align="center">
				<span style="font-size:14px;">5—20</span></td>
			<td align="center">
				<span style="font-size:14px;">5—20</span></td>
			<td align="center">
				<span style="font-size:14px;">5—20</span></td>
			<td align="center">
				<span style="font-size:14px;">5—20</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Электрическая мощность/напряжение</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">Вт/В</span></td>
			<td align="center">
				<span style="font-size:14px;">90/230</span></td>
			<td align="center">
				<span style="font-size:14px;">110/230</span></td>
			<td align="center">
				<span style="font-size:14px;">100/230</span></td>
			<td align="center">
				<span style="font-size:14px;">160/230</span></td>
			<td align="center">
				<span style="font-size:14px;">135/230</span></td>
			<td align="center">
				<span style="font-size:14px;">235/230</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Габаритные размеры: высота</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">мм</span></td>
			<td align="center">
				<span style="font-size:14px;">850</span></td>
			<td align="center">
				<span style="font-size:14px;">850</span></td>
			<td align="center">
				<span style="font-size:14px;">850</span></td>
			<td align="center">
				<span style="font-size:14px;">850</span></td>
			<td align="center">
				<span style="font-size:14px;">850</span></td>
			<td align="center">
				<span style="font-size:14px;">850</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Габаритные размеры: ширина</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">мм</span></td>
			<td align="center">
				<span style="font-size:14px;">450</span></td>
			<td align="center">
				<span style="font-size:14px;">450</span></td>
			<td align="center">
				<span style="font-size:14px;">450</span></td>
			<td align="center">
				<span style="font-size:14px;">450</span></td>
			<td align="center">
				<span style="font-size:14px;">450</span></td>
			<td align="center">
				<span style="font-size:14px;">450</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Габаритные размеры: глубина</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">мм</span></td>
			<td align="center">
				<span style="font-size:14px;">621</span></td>
			<td align="center">
				<span style="font-size:14px;">693</span></td>
			<td align="center">
				<span style="font-size:14px;">801</span></td>
			<td align="center">
				<span style="font-size:14px;">871</span></td>
			<td align="center">
				<span style="font-size:14px;">1024</span></td>
			<td align="center">
				<span style="font-size:14px;">1132</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Вес НЕТТО/БРУТТО</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">кг</span></td>
			<td align="center">
				<span style="font-size:14px;">60/70</span></td>
			<td align="center">
				<span style="font-size:14px;">68/78</span></td>
			<td align="center">
				<span style="font-size:14px;">75/85</span></td>
			<td align="center">
				<span style="font-size:14px;">83/93</span></td>
			<td align="center">
				<span style="font-size:14px;">95/105</span></td>
			<td align="center">
				<span style="font-size:14px;">103/113</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Упаковочные размеры</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">см</span></td>
			<td align="center">
				<span style="font-size:14px;">48x93x72</span></td>
			<td align="center">
				<span style="font-size:14px;">48x93x79</span></td>
			<td align="center">
				<span style="font-size:14px;">48x93x87</span></td>
			<td align="center">
				<span style="font-size:14px;">48x93x94</span></td>
			<td align="center">
				<span style="font-size:14px;">48x93x109</span></td>
			<td align="center">
				<span style="font-size:14px;">48x93x120</span></td>
		</tr>
		<tr>
			<td>
				<p>
					<span style="font-size:14px;">Рекомендованная розничная цена</span></p>
			</td>
			<td align="center">
				<span style="font-size:14px;">EURO</span></td>
			<td align="center">
				<span style="font-size:14px;">3369</span></td>
			<td align="center">
				<span style="font-size:14px;">3719</span></td>
			<td align="center">
				<span style="font-size:14px;">4149</span></td>
			<td align="center">
				<span style="font-size:14px;">4789</span></td>
			<td align="center">
				<span style="font-size:14px;">6299</span></td>
			<td align="center">
				<span style="font-size:14px;">7579</span></td>
		</tr>
		<tr>
			<td valign="top">
				<strong><span style="font-size:14px;">Цена:</span></strong></td>
			<td valign="top">
				&nbsp;</td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">197367.00 РУБ</span></strong></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">218253.00 РУБ</span></strong></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">243507.00 РУБ</span></strong></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">280910.00 РУБ</span></strong></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">369659.00 РУБ</span></strong></td>
			<td style="text-align: center;" valign="top">
				<strong><span style="font-size:14px;">444466.00 РУБ</span></strong></td>
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