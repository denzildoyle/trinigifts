<!-- 


	Thing this page should have
     Ask user to re-enter password before proceeding
     Username 
     user Image 
     date of birth 
     location
     phone number
     discription
     lastModified date

     sliding Carousel of stores shopped with links to their social pages (facebook) 



transactions
total points earned 
amount remaining on gift card(s)
purchased giftcards
purchased loyalty cards
 -->
<body lang="en">
	<div id="container">
		<h1>Client Dashboard</h1>
		<ul class="testerlis">
			<li><?= anchor('client/purchaseHistory', 'Purchase History', 'class=""');?></li>
			<li><?= anchor('client/transactionHistory', 'Transaction History', 'class=""');?></li>
			<li><?= anchor('client/myGiftCards', 'My Gift Cards', 'class=""');?></li>
			<li><?= anchor('client/myLoyaltyCards', 'My Loyalty Cards', 'class=""');?></li>
			<li><?= anchor('client/myRechargeCards', 'My Rechargeable Cards', 'class=""');?></li>
			<li><?= anchor('client/editProfile', 'Edit Profile', 'class=""');?></li>
			<li><?= anchor('client/changePassword', 'Change Password', 'class=""');?></li>
			<li><?= anchor('createAd', 'Create Ad', 'class=""');?></li>
			<li><?= anchor('client/viewAds', 'View Ads', 'class=""');?></li>
			<li><?= anchor('client/client/logout', 'logout');?></li>
		</ul>

		<?php if(isset($records)) : foreach($records as $row) : ?>
			<img src="<?= base_url()."public/".$row->userImage;?>">
			<p><?= $row->fName.' '.$row->lName;?> </p>
			<p><?= $row->email;?> </p>
			<p><?= $row->mobileNum;?> </p>	
			<p><?= anchor("client/dashboard/editClient", 'edit', 'class="link"');?></p> 
		<?php endforeach; ?>
		<?php else : ?>	
			<h2>No records were returned.</h2>
		<?php endif; ?>
	</div>
