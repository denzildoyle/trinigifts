<body lang="en">
	<div id="container">
		<!-- __add accordian for mobile device -->
		<h3>How It Works</h3>

		<h4>Loyality Card</h4>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p> 
		
		<?=anchor('loyaltyCard', 'Purchase loyalty card!', 'class="inTextBtn"');?>

		<h4>Gift Card</h4>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p> 
		
		<?=anchor('giftCard', 'Purchase Gift Card!', 'class="inTextBtn"');?>

		<h4>Gift Card</h4>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p> 
		
		<?=anchor('reloadableCard', 'Purchase Reloadable Card!', 'class="inTextBtn"');?>

		<h3>How To Redeem</h3>
		
		<h4>General information</h4>	
		
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p> 
						
		<h4>Every business is different</h4>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
		Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
			
		<h4>Businesses</h4>
		
		<p>Click on the company logo below to find out how to redeem.</p>

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