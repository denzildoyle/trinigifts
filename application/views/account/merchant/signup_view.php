<body lang="en">
	<div id="container">
        <?= form_open("merchant/signupTools/signup");?>
		      <h3>Merchant Signup</h3>
		      <p>Sign up to be a TriniGifts Merchant</p>
          
          <h4>Account Info</h4>
          <?= form_error("username"); ?>
          <input name="username" type="text" value="<?= set_value("username");?>" placeholder="Username" />
               
          <?= form_error("fName"); ?>
          <input name="fName" type="text" value="<?= set_value("fName");?>" placeholder="First Name" />
 
          <?= form_error("lName"); ?>
          <input name="lName" type="text" value="<?= set_value("lName");?>" placeholder="Last Name" />

          <?= form_error("email"); ?>
          <input class="text" name="email" type="text" value="<?= set_value("email");?>" placeholder="Email Address" />
          
          <?= form_error("password1"); ?>
          <input name="password1" type="password" placeholder="Password" />
          
          <?= form_error("password2"); ?>
          <input name="password2" type="password" placeholder="Re-type Password" />
          
          <?= form_error("mobileNumber"); ?>
          <input name="mobileNum" type="text" value="<?= set_value("mobileNumber");?>" placeholder="Mobile Number" />
          
          <h4>Store Info</h4>

          <?= form_error("storeName"); ?>
          <input name="storeName" type="text" value="<?= set_value("storeName");?>" placeholder="Store Name" />        
	
          <?= form_error("storeEmail"); ?>
          <input name="storeEmail" type="text" value="<?= set_value("storeEmail");?>" placeholder="Store Email" /> 

          <?= form_error("storePhone"); ?>
          <input name="storePhone" type="text" value="<?= set_value("storePhone");?>" placeholder="Store Phone" />  	

          <p>Enter list of words that best describes the items you sells in your store, preferably separated by commas. eg shoes, clothes, ect</p>
          <?= form_error("storeKeywords"); ?>
          <textarea rows="4" cols="50" name="storeKeywords"><?= set_value("storeKeywords");?></textarea>

          <h4>Location info</h4>

           <?= form_error("street1"); ?>
          <input name="street1" type="text" value="<?= set_value("street1");?>" placeholder="Street 1" />
    
          <?= form_error("street2"); ?>
          <input name="street2" type="text" value="<?= set_value("street2");?>" placeholder="Street 2" />

          <?= form_error("town"); ?>
          <input name="town" type="text" value="<?= set_value("town");?>" placeholder="town" /> 

          <p>If you are in the current location of your store click on the button to get current location</p>
          <?= form_error("latitude"); ?>
          <input name="latitude" type="text" value="<?= set_value("latitude");?>" placeholder="latitude" /> 

          <?= form_error("longitude"); ?>
          <input name="longitude" type="text" value="<?= set_value("longitude");?>" placeholder="longitude" /> 

          <input name="submit" value="Get Location" type="submit"/>
          
          <p>By clicking Sign Up, you agree to our <?= anchor("terms", "Terms");?> and have read  our <?= anchor("privacy", "Privacy Policy.");?></p>

          <input name="submit" value="Sign Up" type="submit"/>
        <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  </div>
  <!-- Message has been sent and is waiting on approvial -->