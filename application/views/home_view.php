<body lang="en">
	<div class="cardwrap">
		<ul class="cards">
			<li>
				<?= anchor('giftCard', '<img src="'.base_url().'public/img/cards/giftCard.png" alt="gift card" />');?>
				<h2>gift card</h2>
				<p>Nulla pellentesque arcu in lectus bibendum ut varius leo lobortis.</p>
				<?= anchor('giftCard', 'buy now', 'class="button buynow"');?>
				<?= anchor('storeDirectory', 'shop around', 'class="button shop"');?>
			</li>
			<li>
				<?= anchor('loyaltyCard', '<img src="'.base_url().'public/img/cards/loyaltyCard.png" alt="loyalty card" />');?>
				<h2>loyalty card</h2>
				<p>Nulla pellentesque arcu in lectus bibendum ut varius leo lobortis.</p>
				<?= anchor('loyaltyCard', 'buy now', 'class="button buynow"');?>
				<?= anchor('storeDirectory', 'shop around', 'class="button shop"');?>
			</li>
			<li>
				<?= anchor('rechargeableCard', '<img src="'.base_url().'public/img/cards/rechargeableCard.png" alt="reloadable card" />');?>
				<h2>rechargeable Card</h2>
				<p>Nulla pellentesque arcu in lectus bibendum ut varius leo lobortis.</p>
				<?= anchor('rechargeableCard', 'buy now', 'class="button buynow"');?>
				<?= anchor('storeDirectory', 'shop around', 'class="button shop"');?>
			</li>
		</ul>
		<div class="clear"></div>
	</div>

	<div class="clear"></div>
	
	<?= anchor('createAd', 'ADVERTISE HERE','class="button adbutton"');?> 
	<div class="clear"></div>

	<div class="ads">
		<div class="ad-block-small">
			<?= anchor('home', '<img src="'.base_url().'public/img/ad1.jpg" alt="Delete" />');?>
			<h1>Ad Title here</h1>
			<p>Etiam erat dolor, dignissim id tincidunt a, imperdiet et purus. Nulla rhoncus rhoncus purus, eu pharetra dui suscipit vulputate. Aenean in varius ipsum.</p>
			<?= anchor('storeDirestory', 'see more', 'class="button shop"');?>
			<div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
		</div>

		<div class="ad-block-small">
			<h1>Ad Title here</h1>
			<p>Etiam erat dolor, dignissim id tincidunt a, imperdiet et purus. Nulla rhoncus rhoncus purus, eu pharetra dui suscipit vulputate. Aenean in varius ipsum.</p>
			<?= anchor('storeDirestory', 'see more', 'class="button shop"');?>
			<div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
		</div>
		
		<div class="ad-block-small">
			<h1>Ad Title here</h1>
			<p>Etiam erat dolor, dignissim id tincidunt a, imperdiet et purus. Nulla rhoncus rhoncus purus, eu pharetra dui suscipit vulputate. Aenean in varius ipsum.</p>
			<?= anchor('storeDirestory', 'see more', 'class="button shop"');?>
			<div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
		</div>
	</div>
	
	<div class="ads">
		<div class="ad-block-medium">
			<h1>Ad Title here</h1>
			<p>Etiam erat dolor, dignissim id tincidunt a, imperdiet et purus. Nulla rhoncus rhoncus purus, eu pharetra dui suscipit vulputate. Aenean in varius ipsum.</p>
			<?= anchor('storeDirestory', 'see more', 'class="button shop"');?>
			<div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
		</div>
		
		<div class="ad-block-small">
			<h1>Ad Title here</h1>
			<p>Etiam erat dolor, dignissim id tincidunt a, imperdiet et purus. Nulla rhoncus rhoncus purus, eu pharetra dui suscipit vulputate. Aenean in varius ipsum.</p>
			<?= anchor('storeDirestory', 'see more', 'class="button shop"');?>
			<div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
		</div>
	</div>

<!-- 	<div class="sidebar sidebyside">
		<div class="fb-like-box" data-href="https://www.facebook.com/Trinigifts" data-width="350" data-show-faces="true" data-stream="true" data-header="true"></div>
	</div>
	 -->
	<div class="clear"></div>

	<div class="partners">
		<p> TriniGift has partnered with may mobile companies to offer the best possible shopping experience </p>
		<div id="slides">
			<div class="slidesContainer">
				
				<div class="slide">
					<div class="item">
						Item One
					</div>
					<div class="item">
						Item Two
					</div>
					<div class="item">
						Item Three
					</div>
				</div>
				
				<div class="slide">
					<div class="item">
						Item Four
					</div>
					<div class="item">
						Item Five
					</div>
					<div class="item">
						Item Six
					</div>
				</div>
				
				<div class="slide">
					<div class="item">
						Item Seven
					</div>
					<div class="item">
						Item Eight
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="<?=base_url(). "public/" ?>js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true
			});
		});
	</script>
</body>