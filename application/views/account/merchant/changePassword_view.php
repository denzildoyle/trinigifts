	<div id="container">
        <?= form_open("merchant/newPassword/process");?>
		  <h3>Change Password</h3>

          <?= form_error("oldPassword"); ?>
          <input name="oldPassword" type="oldPassword" placeholder="Password" />
          
          <?= form_error("newPassword1"); ?>
          <input name="newPassword1" type="newPassword1" placeholder="New Password" />

          <?= form_error("newPassword1"); ?>
          <input name="newPassword1" type="newPassword1" placeholder="Re-type New Password" />

          <input name="submit" value="Sign Up" type="submit"/>
        <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  </div>