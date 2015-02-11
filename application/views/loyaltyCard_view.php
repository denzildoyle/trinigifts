<body lang="en">

	<h3 id="userMsg"><name> You wont be disappoint with your loyalty card</h3>

	<div class="container"> 
		<?= form_open('account/client/validateClient');?>  

				<p>Selest store</p><!-- Change this to jquery carousel of pictures of stores  -->
				<select>
					<option value="">Choose Store</option>
					<option value="">Store 1</option>
					<option value="">Store 2</option>
					<option value="">Store 3</option>
					<option value="">Store 4</option>
					<option value="">Store 5</option>
					<option value="">Store 6</option>
				</select>
				
				<div class="">
					<select>
						<option value="">Choose Type of card</option>
						<option value="">Gold</option>
						<option value="">platinum</option>
						<option value="">silver</option>
					</select>
				</div>

				<input name="submit" value="Done" type="submit"/>
				<!-- If the user is not signed go to the login page 
				     Prompt: To buy a loyality card you must be signed into an account if you dont 
				     have an account you can create one now  -->
				
		<?= form_close();?>
		<div class="clear"></div>
	</div>

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	<script type="text/javascript">
		$(function() {
			$( "#datepicker" ).datepicker();
		});

		function showMsg(){
			var userInput = document.getElementById('rname').value;
			document.getElementById('userMsg').innerHTML = userInput + " is going to love your TriniGifts Card?";
		}
	</script>