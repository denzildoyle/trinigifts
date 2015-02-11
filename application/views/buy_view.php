<body lang="en">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
	</script>

	<?= anchor('home', '<img src="'.base_url().'public/img/" alt="bannerAd" />','class="#"');?>

	<div class="topone">
		<h3 id="titleone">Who's going to love your TriniGifts Card?</h3>
	</div><!-- //Change name in content dinamically go Denzil is going to like your tango gift card -->
	
	<div class="bottomone">
		<div class="leftSection">
			<?= form_open('buy/paypal');?>  

				<p>TriniGifts is perfect because you get to choose how, where, and what to use it for! <br>
				   Enter your name, your recipient's name, optional gift message, and amount below.</p>
				
				<input name="yname" type="text" placeholder="your name" />
				<input id="rname" name="rname" type="text" placeholder="recipient name" onkeyup="showMsg()" />
				<textarea rows="4" cols="50" placeholder="enter your optional gift message (250 character limit)"></textarea>

				<select>
				  <option value="">Choose amount</option>
				  <option value="">$5</option>
				  <option value="">$10</option>
				  <option value="">$25</option>
				  <option value="">$75</option>
				  <option value="">$100</option>
				  <option value="">$200</option>
				  <option value="">others</option>
				  
				  <p class="hidderValue">$ <input name="value" type="text" placeholder="value" /></p>
				  
				  
				</select>
				<p>Please note all prices are in TT</p><!-- Change this message to display at the side of dropdown menu on hove over a question mark icon -->
		</div>
		
		<div class="rightSection">
				<img src="#" alt="#">

				<select>
				  <option value="">Choose delivery method</option>
				  <option value="" onclick="showhiddenFormEmail()">Email (Free)</option>
				  <option value="">Mobile App</option>
				  <option value="">Text Message ($2.00)</option>
				</select>

			 
				<div id="hiddenFormEmail"> 
					<p>Date: <input type="text" id="datepicker" placeholder="choose delivery date"/></p>
		 			<input name="yemail" type="text" placeholder="your email address" />
					<input name="remail" type="text" placeholder="recipent email address" />		
				</div>
		
				<div id="hiddenFormText"> 
					<p>Date: <input type="text" id="datepicker" placeholder="choose delivery date"/></p>				
			 		<input name="ynumber" type="text" placeholder="your mobile number" />
					<input name="rnumber" type="text" placeholder="recipent mobile number" />		
				</div>

				<div id="hiddenFormText"> 
					<p>Date: <input type="text" id="datepicker" placeholder="choose delivery date"/></p>
			 		<input name="yusername" type="text" placeholder="your TriniGifts username" />
					<input name="rusername" type="text" placeholder="recipent TriniGifts username" />		
				</div>

					<input name="submit" value="Review Order" type="submit"/>
			<?= form_close();?>
			<div class="clear"></div>
		</div>
	</div>
	
	<script type="text/javascript">
		function showhiddenFormEmail() {
			document.getElementById('hiddenFormEmail').style.display = "block";
		}

		function showMsg(){
			var userInput = document.getElementById('rname').value;
		  	var title = document.getElementById('titleone');

			if (userInput == ""){
				title.innerHTML = "Who's going to love your TriniGifts Card?";
			} else{
				title.innerHTML = userInput + " going to love TriniGifts Card?";
			}
		}
	</script>