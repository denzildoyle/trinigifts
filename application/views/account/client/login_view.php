<body lang="en">
	<div id="container">
    <?= form_open('client/login/validateClient');?>  
      		<h3>Login Form</h3>
      		<p>Enter your login credentials below.</p>

          <?= form_error('email'); ?>
      		<input name="email" type="text" placeholder="Email Address" />
          <?= form_error('password'); ?>
      		<input name="password" type="password" placeholder="Password" />
      		
          <p>It seems like I <?= anchor('client/forgotPass', 'forgot my password?');?></a><br>
             I never <?= anchor('client/signup', 'created an account.');?> 
          </p>
      		<input name="submit" value="Send" type="submit"/>
    <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >  
  </div>