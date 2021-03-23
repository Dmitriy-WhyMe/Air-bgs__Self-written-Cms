<?php
include("../include/header.php");
include("../include/menu.php");
include("../include/get_element_vitrina.php");
?>
<div class="main_page">
		<?php	include("../include/sidebar_vodonagrev.php"); ?>
	<div class="main_content">
		<h2>Котлы навесные BERETTA</h2>
		<div class="kategory_vitrina">

		</div>
		
		<div class="category_market">
			<div class="cart_vitrina">
				<a href="../cart_tovar/CITY 35 C.S.I.php"><img src="<?php echo $element_vit_url_31; ?>"><?php echo $element_vit_name_31; ?></a>
				<div class="price"><?php echo $element_vit_price_31; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/КОТЛЫ НАВЕСНЫЕ CITY 28 C.S.I.php"><img src="<?php echo $element_vit_url_37; ?>"><?php echo $element_vit_name_37; ?></a>
				<div class="price"><?php echo $element_vit_price_37; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/КОТЛЫ НАВЕСНЫЕ CITY 24 C.S.I.php"><img src="<?php echo $element_vit_url_38; ?>"><?php echo $element_vit_name_38; ?></a>
				<div class="price"><?php echo $element_vit_price_38; ?>  Руб</div>
			</div>
			<div class="cart_vitrina">
				<a href="../cart_tovar/КОТЛЫ НАВЕСНЫЕ CIAO 24 CSI.php"><img src="<?php echo $element_vit_url_39; ?>"><?php echo $element_vit_name_39; ?></a>
				<div class="price"><?php echo $element_vit_price_39; ?>  Руб</div>
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