  <div id="container">
        <?= form_open('admin/addMerchant/create');?>
          <h3>Add Merchant</h3>
          <p>Enter Merchant information below</p>
          
          <?= form_error('username'); ?>
          <input name="username" type="text" value="<?= set_value('username');?>" placeholder="Username" />
               
          <?= form_error('fName'); ?>
          <input name="fName" type="text" value="<?= set_value('fName');?>" placeholder="First Name" />
 
          <?= form_error('lName'); ?>
          <input name="lName" type="text" value="<?= set_value('lName');?>" placeholder="Last Name" />

          <?= form_error('email'); ?>
          <input class="text" name="email" type="text" value="<?= set_value('email');?>" placeholder="Email Address" />
          
          <?= form_error('mobileNumber'); ?>
          <input name="mobileNum" type="text" value="<?= set_value('mobileNumber');?>" placeholder="Mobile Number" />
          
          <input name="submit" value="Sign Up" type="submit"/>
        <?= form_close();?>
        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  </div>