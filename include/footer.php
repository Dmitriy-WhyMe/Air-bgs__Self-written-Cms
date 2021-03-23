<footer>
	<div>
		© 2005 – 2020, БалтГазСервис <br>
		Не нашли нужный товар?<br>
		Звоните! <?php echo $number_two; ?> - возможно он есть на складе.
	</div>
</footer>
</div>
<script>

		window.onload = init;
		function init(){
			var button = document.getElementById("addButton")
		    button.onclick = handleButtonClick;
		    var button1 = document.getElementById("addButton1")
		    button1.onclick = handleButtonClick1;
		    var button2 = document.getElementById("addButton2")
    		button2.onclick = handleButtonClick2;

		}
		function handleButtonClick() {
			addButton.classList.add("button_active");
			addButton1.classList.remove("button_active");
			addButton2.classList.remove("button_active");
			document.getElementById("text2").style.display = "none";
		    document.getElementById("text1").style.display = "block";
		    document.getElementById("text3").style.display = "none";
		}
		function handleButtonClick1() {
			addButton1.classList.add("button_active");
			addButton.classList.remove("button_active");
			addButton2.classList.remove("button_active");
			document.getElementById("text2").style.display = "block";
		    document.getElementById("text1").style.display = "none";
		    document.getElementById("text3").style.display = "none";
		}
		function handleButtonClick2() {
			addButton2.classList.add("button_active");
			addButton1.classList.remove("button_active");
			addButton.classList.remove("button_active");
			document.getElementById("text2").style.display = "none";
		    document.getElementById("text1").style.display = "none";
		    document.getElementById("text3").style.display = "block";
		}

		function openForm() {
   		document.getElementById("myForm").style.display = "block"; }

   		function closeForm() {
    	document.getElementById("myForm").style.display = "none";}


</script>
</body>
</html>