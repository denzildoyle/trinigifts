<body lang="en">
  <div id="container">
        <?= form_open('merchant/addUser/process');?>
          <h3>Add User</h3>
                    
          <?= form_error('username'); ?>
          <input name="username" type="text" value="<?= set_value('username');?>" placeholder="Username" />
               
          <?= form_error('fName'); ?>
          <input name="fName" type="text" value="<?= set_value('fName');?>" placeholder="First Name" />
 
          <?= form_error('lName'); ?>
          <input name="lName" type="text" value="<?= set_value('lName');?>" placeholder="Last Name" />

          <?= form_error('email'); ?>
          <input class="text" name="email" type="text" value="<?= set_value('email');?>" placeholder="Email Address" />

          <select>
			<option value="">Merchant</option>
			<option value="">Merchant View</option>
		  </select>
          
          <input name="submit" value="Sign Up" type="submit"/>
        <?= form_close();?>
  </div>