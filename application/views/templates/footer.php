		<footer>
			<div class="footerwrap">
				
				<div class="footerBlock">
					<div class="logo"><?= anchor('home', '<img src="'.base_url().'public/img/logo.png" alt="logo"/>');?></div>
					<ul class="links">
						<li><?= anchor('giftCard', 'Gift Card');?></li>
						<li><?= anchor('loyaltyCard', 'Loyality Card');?></li>
						<li><?= anchor('reloadableCard', 'Reloadable Card');?></li>
						
						<li><?= anchor('storeDirectory', 'Store Directory');?></li>
						<li><?= anchor('howItWorks', 'How It Works');?></li>
						<li><?= anchor('contactUs', 'Contact Us');?></li>
						<li><?= anchor('aboutUs', 'About Us');?></li>
						<li><?= anchor('faq', 'FAQs');?></li>	
					</ul>
				</div>

				<div class="footerBlock">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			        <script>
			        new TWTR.Widget({
			          version: 2,
			          type: 'profile',
			          rpp: 1,
			          interval: 1000,
			          width: 250,
			          height: 300,
			          theme: {
			            shell: {
			              background: 'none',
			              color: '#ffffff'
			            },
			            tweets: {
			              background: '#000000',
			              color: '#ffffff',
			              links: '#07a3eb'
			            }
			          },
			          features: {
			            scrollbar: false,
			            loop: false,
			            live: false,
			            behavior: 'all'
			          }
			        }).render().setUser('TriniGifts').start();
			        </script>

			        <div class="fb-facepile" data-href="https://www.facebook.com/triniGifts" data-max-rows="1" data-width="300"></div>
				</div>

				<div class="footerBlock" style="width: 400px;">
					<!--
					<div class="top">
						<p>TriniGifts is just the beginging of great things</p>
						<ul class="statName">
							<li>Stat</li>
							<li>Stat</li>
							<li>Stat</li>
							<li>Stat</li>
						</ul><br>
						<ul class="statNum">
							<li>16</li>
							<li>45</li>
							<li>64</li>
							<li>23</li>
						</ul>

					</div>

					<div class="mobileQR">
						<p>Scan this qr code to download our mobile app. 
						   Have access to some of the same functionality as you would on the web on your mobile device.</p>
						<?= anchor('home', '<img src="'.base_url().'public/img/qrCode.jpg" alt="QRCode" />');?>
					</div>
					-->
				</div>

				<div class="footerBlock">
					<div class="companyLogo">
						<?= anchor('home', '<img src="'.base_url().'public/img/eanimateLogo.png" alt="eAnimateLogo" />');?>
					</div>
					<ul class="social">
						<li><?= anchor('home', '<img src="'.base_url().'public/img/social/facebook.png" alt="facebook" />');?></li>
						<li><?= anchor('home', '<img src="'.base_url().'public/img/social/googleplus.png" alt="Google Plus" />');?></li>
						<li><?= anchor('home', '<img src="'.base_url().'public/img/social/stumbleupon.png" alt="Stumble Upon" />');?></li>
						<li><?= anchor('home', '<img src="'.base_url().'public/img/social/twitter.png" alt="Twitter" />');?></li>
						<li><?= anchor('home', '<img src="'.base_url().'public/img/social/rss.png" alt="RSS" />');?></li>
					</ul>

				</div>
				<div class="clear"></div>
			</div>

			<div class="subFooterwrap">	
				<div class="info">
					<ul class="helpLinks">
						<li><?= anchor('terms', 'Terms and Conditions', 'class=""');?></li>
						<li><?= anchor('siteMap', 'Site Map', 'class=""');?></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<center><p class="copyright">Copyright 2013. TriniGifts. All rights reserved.</p></center>

			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=337391823009687";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		</footer>
	</body>
</html>