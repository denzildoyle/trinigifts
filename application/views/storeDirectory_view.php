<body lang="en">
	<div id="container">
		<h3>Store Directory</h3>
		<!-- __find by location -->
		<!-- __find by catagory -->
		<!-- __find by product type -->
		<!-- __store catagories 
		<div id="container">
			
			<div id="storeCatagories">
				<ul>
					<li class="head">Store Catagories</li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
					<li><a href=""><span>Item</span></a></li>
				</ul>
			</div>
			<div id="stores">
				<div id="storeSearch"></div>
				<div class="rows">
					<div class="store"><img src=""></div>
					<div class="store"><img src=""></div>
					<div class="store"><img src=""></div>
				</div>
				<div class="rows">
					<div class="store"><img src=""></div>
					<div class="store"><img src=""></div>
					<div class="store"><img src=""></div>
				</div>
			  	<div class="rows">
			    	<div class="store"><img src=""></div>
			    	<div class="store"><img src=""></div>
			    	<div class="store"><img src=""></div>
			  	</div>
			</div>
		</div>​-->
		<?php if(isset($records)) : foreach($records as $row) : ?>
			<img src="<?= base_url().$row->storeImage;?>">
			<p><?= $row->storeName;?> </p>
			<p><?= $row->town;?> </p>
			<p><?= $row->storeEmail;?> </p>	
			<p><?= $row->storePhone;?> </p>
			<p><?= $row->storeKeywords;?> </p>
			<p><?= anchor("storeProfile/$row->userID", 'View profile', 'class="link"');?></p> 
			<hr>
		<?php endforeach; ?>
		<?php else : ?>	
			<h2>No records were returned.</h2>
		<?php endif; ?>

		<!--<ul class="testerlis">
			<li><?= anchor('store', 'storeProfile', 'class=""');?></li>
		</ul> -->
 	</div>