<body lang="en">
  <div id="container">
        <?= form_open('client/signup/process');?>
          <h3>Sign Up</h3>
          <p>Welcome to TriniGIFTS enter your details below and start shopping.</p>
          
          <?= form_error('username'); ?>
          <input name="username" type="text" value="<?= set_value('username');?>" placeholder="Username" />
               
          <?= form_error('fName'); ?>
          <input name="fName" type="text" value="<?= set_value('fName');?>" placeholder="First Name" />
 
          <?= form_error('lName'); ?>
          <input name="lName" type="text" value="<?= set_value('lName');?>" placeholder="Last Name" />

          <?= form_error('email'); ?>
          <input class="text" name="email" type="text" value="<?= set_value('email');?>" placeholder="Email Address" />

          <?= form_error('dob'); ?>
          <input name="dob" type="text" value="<?= set_value('dob');?>" placeholder="Date of Birth: dd/mm/yy" />
          
          <?= form_error('password1'); ?>
          <input name="password1" type="password" placeholder="Password" />
          
          <?= form_error('password2'); ?>
          <input name="password2" type="password" placeholder="Re-type Password" />
          
          <?= form_error('mobileNumber'); ?>
          <input name="mobileNum" type="text" value="<?= set_value('mobileNumber');?>" placeholder="Mobile Number" />
          
          <label>Receive text messages: <input name="sms" value="sms" type="checkbox"></label><br>
          
          <p>By clicking Sign Up, you agree to our <?= anchor('terms', 'Terms');?> and have read  our <?= anchor('privacy', 'Privacy Policy.');?></p>

          <input name="submit" value="Sign Up" type="submit"/>
        <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  </div>