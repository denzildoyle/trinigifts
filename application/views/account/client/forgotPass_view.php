<body lang="en">
	<div id="container">
		<?= form_open('account/client/validateClient');?>  
      		<h3>I forgot my password</h3>
      		<p>Enter your email address below and we will send you a email that will guid you 
      		   throught how to get a new password.</p>

      		<?= form_error('email'); ?>
          	<input name="email" type="text" placeholder="Email Address" />

      		<input name="submit" value="Send" type="submit"/>
    	<?= form_close();?>
        
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  	</div>