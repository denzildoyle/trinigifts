
<body lang="en">	
		<div id="container">
			<h3>Edit Profile</h3>
			<p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		
			<?php if(isset($records)) : foreach($records as $row) : ?>

				<!-- <?= $uploadError;?>  -->
				<?= form_open_multipart('client/editProfile/saveImg');?>  
					<img src="<?= base_url()."public/".$row->userImage;?>"> 
					<br>
					<input type="file" name="save" onClick="editImg()">
      				<section id="saveImg">
      					<input name="save" value="Save" type="submit"/>
      				</section>
    			<?= form_close();?>
				
				<?= form_open('client/editProfile/saveUsername');?>
					<p><label>Username: </label><?= $row->userName?><a href="#" onClick="editUsername()"> Edit</a></p>
					<section id="saveUsername">
						<?= form_error('username'); ?>
						<input name="username" type="text" value="<?= set_value('username');?>"/> 
      					<input name="save" value="Save" type="submit"/>
					</section>
    			<?= form_close();?>

    			<?= form_open('client/editProfile/saveFname');?> 
    				<p><label>First Name: </label><?= $row->fName?><a href="#" onClick="editFname()"> Edit</a></p>
    				<section id="saveFname">
    					<?= form_error('fname'); ?>
						<input name="fName" type="text" value="<?= set_value('fName');?>"/>
						<input name="save" value="Save" type="submit"/>
    				</section>
    			<?= form_close();?>


    			<?= form_open('client/editProfile/saveLname');?> 
    				<p><label>Last Name: </label><?= $row->lName?><a href="#" onClick="editLname()"> Edit</a></p>
    				<section id="saveLname">
						<?= form_error('lName'); ?>
						<input name="lName" type="text" value="<?= set_value('lName');?>"/>
						<input name="save" value="Save" type="submit"/>
    				</section>
    			<?= form_close();?>


    			<?= form_open('client/editProfile/saveEmail');?> 
    				<p><label>Email Address: </label><?= $row->email;?><a href="#" onClick="editEmail()"> Edit</a></p>
    				<section id="saveEmail">
    					<?= form_error('email'); ?>
						<input name="email" type="text" value="<?= set_value('email');?>"/>
						<input name="save" value="Save" type="submit"/>
    				</section>
    			<?= form_close();?>

    			<?= form_open('client/editProfile/saveDob');?> 
    				<p><label>Date Of Birth: </label><?= $row->bday;?><a href="#" onClick="editDob()"> Edit</a></p>
    				<section id="saveDob">
          				<?= form_error('dob'); ?>
          				<input name="dob" type="text" value="<?= set_value('dob');?>"/>
          				<input name="save" value="Save" type="submit"/>
    				</section>
    			<?= form_close();?>

    			<?= form_open('client/editProfile/saveMobileNum');?> 
    				<p><label>Mobile Number: </label><?= $row->mobileNum;?><a href="#" onClick="editMobileNum()"> Edit</a></p> 
    				<section id="saveMobileNum">
    					<?= form_error('mobileNum'); ?>
						<input name="mobileNum" type="text" value="<?= set_value('mobileNum');?>"/>
						<input name="save" value="Save" type="submit"/>
    				</section>
    			<?= form_close();?>

    			<?= form_open('client/editProfile/saveSms');?> 
					<label>SMS updates</label>
					<input name="sms" id="sms" type="checkbox" onChange="editSms()"/>
					<section id="saveSms">
						<input name="save" value="Save" type="submit"/>
					</section>		
    			<?= form_close();?>

			<?php endforeach; ?>
			<?php else : ?>	
				<h2>No records were returned.</h2>
			<?php endif; ?>

			<script type="text/javascript">
				function editImg(){
					if(document.getElementById('saveImg').style.display == "block"){
						document.getElementById('saveImg').style.display = "none";
					} else {
						document.getElementById('saveImg').style.display = "block";
					}
				}

				function editUsername(){
					if(document.getElementById('saveUsername').style.display == "block"){
						document.getElementById('saveUsername').style.display = "none";
					} else {
						document.getElementById('saveUsername').style.display = "block";
					}
				}

				function editFname(){
					if(document.getElementById('saveFname').style.display == "block"){
						document.getElementById('saveFname').style.display = "none";
					} else {
						document.getElementById('saveFname').style.display = "block";
					}
				}

				function editLname(){
					if(document.getElementById('saveLname').style.display == "block"){
						document.getElementById('saveLname').style.display = "none";
					} else {
						document.getElementById('saveLname').style.display = "block";
					}
				}

				function editEmail(){
					if(document.getElementById('saveEmail').style.display == "block"){
						document.getElementById('saveEmail').style.display = "none";
					} else {
						document.getElementById('saveEmail').style.display = "block";
					}
				}

				function editDob(){
					if(document.getElementById('saveDob').style.display == "block"){
						document.getElementById('saveDob').style.display = "none";
					} else {
						document.getElementById('saveDob').style.display = "block";
					}
				}

				function editMobileNum(){
					if(document.getElementById('saveMobileNum').style.display == "block"){
						document.getElementById('saveMobileNum').style.display = "none";
					} else {
						document.getElementById('saveMobileNum').style.display = "block";
					}
				}

				function editSms(){
					if(document.getElementById('saveSms').style.display == "block"){
						document.getElementById('saveSms').style.display = "none";
					} else {
						document.getElementById('saveSms').style.display = "block";
					}
				}
			</script>
		</div>