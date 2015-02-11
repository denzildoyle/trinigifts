<body lang="en">	
	<div id="container">
		<!-- __remember message sent confermation -->	
		<!-- __include if message was sent from form -->
		<!-- __ -->
		<?= form_open('');?>	
			
			<h3>Contact Us</h3>
			<p>Many common questions are answered on our <?= anchor('faq', 'FAQs');?>  (Frequently Asked Questions) page. Please check before sending us an email.</p>
			<input name="name" type="text" placeholder="Full Name" autofocus />
			<input name="email" type="text" placeholder="Email Address" />
	        
	        <!-- __include progress bar for word count -->
			<textarea  name="comments"  id="comments" id="maxcharfield" rows="5" cols="20" placeholder="Comment" onKeyDown="textCounter(this,'progressbar1',200)" onKeyUp="textCounter(this,'progressbar1',200)" onFocus="textCounter(this,'progressbar1',200)" onblur="return sendMail(form)"></textarea>
			
			<p><?=$num1?> + <?=$num2?> = ?</p>
			<input name="answer" type="text" placeholder="Answer" pattern=""/>
			
			<input name="submit" value="Send" type="submit"/>
		<?= form_close();?>
				
		<div id="addressInfo">
			<h4>Address</h4>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
			<p>Address line, city, state ZIP<br>
				+123 456 789<br>
				+123 456 789<br>
			</p>
				<p>If you have any issues you could email us directly at:
				<a href="mailto:email@server.com">info@trinigift.com</a> however message sent from form will will be considered top piroity.</p><!-- If the user is sending a mail using the contact from y then are we still having email information here -->
		</div>
	</div>
	