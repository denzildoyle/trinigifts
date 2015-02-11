<body lang="en">

	<h3 id="userMsg">Who's going to love your TriniGifts Card?</h3>

	<div class="container"> 
		<?= form_open('buy/paypal');?>  
			<div class="leftSection sidebyside">
				<p>TriniGifts is perfect because you get to choose how, where, and what to use it for! Enter your name, your recipient's name, optional gift message, and amount below.</p>
					
				<input name="yname" type="text" placeholder="your name" />
				<input name="rname" id="rname" type="text" placeholder="recipient name" onkeyup="showMsg()"/>

				<textarea rows="4" cols="50" placeholder="enter your optional gift message (250 character limit)"></textarea>

				<select id="amount" onchange="showValueInput()">
					<option value="">Choose amount</option>
					<option value="5">$5</option>
					<option value="10">$10</option>
					<option value="25">$25</option>
					<option value="75">$75</option>
					<option value="100">$100</option>
					<option value="200">$200</option>
					<option value="others">others</option>
				</select>
				<div id="hiddenValueInput">$ <input name="value" type="text" placeholder="value" /></div>	  
				<p>Please note that all prices are in TT</p><!-- Change this message to display at the side of dropdown menu on hove over a question mark icon -->
			</div>

			<div class="rightSection sidebyside">
				<img src="#" alt="#">

				<select id="deliveryMethod" onchange="showDiv()" >
					<option value="none">Choose delivery method</option>
					<option value="email">Email (Free)</option>
					<option value="mobile">Mobile App</option>
					<option value="text">Text Message ($2.00)</option>
				</select>

				<div id="hiddenEmail"> 
					<p>Date: <input type="text" id="datepicker" placeholder="choose delivery date"/></p>
			 		<input name="yemail" type="text" placeholder="your email address" />
					<input name="remail" type="text" placeholder="recipent email address" />		
				</div>

				<div id="hiddenText"> 
					<p>Date: <input type="text" id="datepicker" placeholder="choose delivery date"/></p>
			 		<input name="ynumber" type="text" placeholder="your mobile number" />
					<input name="rnumber" type="text" placeholder="recipent mobile number" />		
				</div>

				<div id="hiddenMobile"> 
					<p>Date: <input type="text" id="datepicker" placeholder="choose delivery date"/></p>
					
		 			<input name="yusername" type="text" placeholder="your TriniGifts username" />
					<input name="rusername" type="text" placeholder="recipent TriniGifts username" />		
				</div>

				<input name="submit" value="Review Order" type="submit"/>
			</div>
		
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
			var userMsg = document.getElementById('userMsg');
			if(userInput == ""){
				userMsg.innerHTML = userInput + "Who's is going to love your TriniGifts Card?";
			}else{
				userMsg.innerHTML = userInput + " is going to love your TriniGifts Card?";
			}
		}

		function showDiv(){
  			var method = document.getElementById('deliveryMethod').value;
  			//set all visable div to hidden
  			document.getElementById('hiddenEmail').style.display = "none";
			document.getElementById('hiddenMobile').style.display = "none";
			document.getElementById('hiddenText').style.display = "none";

  			switch(method){
				case "email":
				  document.getElementById('hiddenEmail').style.display = "block";
				  break;
				case "mobile":
				  document.getElementById('hiddenMobile').style.display = "block";
				  break;
				case "text":
				  document.getElementById('hiddenText').style.display = "block";
				  break;
				default:
			}
		}

		function showValueInput(){
			var amount = document.getElementById('amount').value;

			switch(amount){
				case "5":

				  break;
				case "10":

				  break;
				case "25":

				  break;
				case "75":

				  break;
				case "100":

				  break;
				case "200":

				  break;
				case "200":

				  break;
				case "others":
				  document.getElementById('hiddenValueInput').style.display = "block";
				  break;
				default:
			}
		}
	</script>