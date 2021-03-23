<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
?>
<div class="main_page">
		<?php	include("../include/sidebar_radiators.php"); ?>
	<div class="main_content">
		<h2>Принадлежности для радиаторов</h2>
		
		<div class="kategory_vitrina">

		</div>
		
		<div class="category_market">
			<div class="cart_vitrina">
				<a href="../cart_tovar/Монтажный комплект GLOBAL 1_2.php"><img src="<?php echo $element_vit_url_26; ?>"><?php echo $element_vit_name_26; ?></a>
				<div class="price"><?php echo $element_vit_price_26; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/Монтажный комплект GLOBAL 3_4.php"><img src="<?php echo $element_vit_url_70; ?>"><?php echo $element_vit_name_70; ?></a>
				<div class="price"><?php echo $element_vit_price_70; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/Универсальный монтажный набор ROYAL THERMO.php"><img src="<?php echo $element_vit_url_71; ?>"><?php echo $element_vit_name_71; ?></a>
				<div class="price"><?php echo $element_vit_price_71; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/Присоединительный набор (Кит 1_2) ROYAL THERMO.php"><img src="<?php echo $element_vit_url_72; ?>"><?php echo $element_vit_name_72; ?></a>
				<div class="price"><?php echo $element_vit_price_72; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/Присоединительный набор (Кит 3_4) ROYAL THERMO.php"><img src="<?php echo $element_vit_url_73; ?>"><?php echo $element_vit_name_73; ?></a>
				<div class="price"><?php echo $element_vit_price_73; ?>  Руб</div>
			</div>
			
		</div>
		<div class="main_txt">
			
		</div>
	</div>
</div>
<?php
include("../include/get_element_vitrina.php");
include("../include/footer.php");
?>