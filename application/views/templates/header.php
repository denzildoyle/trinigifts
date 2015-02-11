<!-- __include('processing/welcome.php'); -->
<!-- __include('processing/loginlogout.php');-->

<header>
	
    <nav>
    	<div class="logo"><?= anchor('home', '<img src="'.base_url().'public/img/logo.png" alt="logo"/>');?></div>
    	
    	<!-- Stores -->
    	<li><?= anchor('storeDirectory', 'Store Directory');?></li>

    	<!-- __Me Dropdown if user is not logined in change this to signup tab dont forget to add image -->
		<li><?= anchor('', 'Login/Signup');?>
            <ul class="subMenu">
                <li><?= anchor('admin/login', 'Admin login');?></li>
                <li><?= anchor('merchant/login', 'Merchant login');?></li>
                <li><?= anchor('client/login', 'Client login');?></li>
            </ul>
		</li> <!-- __picture of person if logedin and notification -->
		
		<li><?= anchor('ads', 'Ads');?></li>
		<li><?= anchor('howItWorks', 'How It Works');?></li>
		<li><?= anchor('contactUS', 'Contact Us');?></li>
		<li><?= anchor('aboutUs', 'About Us');?></li>
		<li><?= anchor('faq', 'FAQs');?></li>

		<?= form_open('search');?>	
			<input name="answer" type="text" placeholder="Search" pattern=""/>
			<input name="submit" value="GO" type="submit"/>
		<?= form_close();?>

    	

		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f1b10c5deb18f0"></script>
		<!-- AddThis Button END -->

		<!-- <div class="cart"><a href="#"><img src="<?=base_url(). "public/" ?>img/cart/empty.png">View Cart<span>0</span></a></div> -->


		<!-- replace with image and other fancyness -->
		<!-- __dont forget to add cart -->
	</nav>
	<div class="clear"></div>
</header>