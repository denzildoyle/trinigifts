<body lang="en">
  <div id="container">
        <?= form_open("client/changePassword/process");?>
		      <h3>Change Password</h3>

          <?= form_error("oldPassword"); ?>
          <input name="oldPassword" type="password" placeholder="Password" />
          
          <?= form_error("newPassword1"); ?>
          <input name="newPassword1" type="password" placeholder="New Password" />

          <?= form_error("newPassword1"); ?>
          <input name="newPassword1" type="password" placeholder="Re-type New Password" />

          <input name="submit" value="Change Password" type="submit"/>
        <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  </div>