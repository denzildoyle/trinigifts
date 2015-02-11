<body lang="en">
  <div id="container">
    <?= form_open('merchant/login/validateMerchant');?>  
          <h3>Login Form</h3>
          <p>Enter your login credentials below.</p>

          <?= form_error('email'); ?>
          <input name="email" type="text" placeholder="Email Address" />
          <?= form_error('password'); ?>
          <input name="password" type="password" placeholder="Password" />
          
          <p>It seems like I <?= anchor('merchant/forgotPass', 'forgot my password?');?></a><br>
             <?= anchor('merchant/signup', 'Request an account.');?> 
          </p>
          <input name="submit" value="Send" type="submit"/>
    <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >  
  </div>