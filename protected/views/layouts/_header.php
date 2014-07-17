<!-- HEADER ______________________________________-->
	<header role="banner">
		
		<div class="wrapper">
			<!-- Logo ______________________________________-->
			<div id="logo">
				<h1>
					<a href="/"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/iahv.jpg" alt="IAHV Australia" /></a>
					</h1>
			</div>
			
			<!-- Address Microdata ______________________________________-->
			<div id="address-block" itemscope itemtype="http://schema.org/Organization"> 
			  <a href="mailto:contact@iahv.org.au" itemprop="email"><i class="icon-envelope"></i> contact@iahv.org.au</a>
			</div>	
			<!-- Social icons ______________________________________-->
			<div id="social-block">
				<ul>
					<li><a href="#" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>
					<li><a href="#" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
					<li><a href="#" target="_blank" title="Google Plus"><i class="icon-google-plus"></i></a></li>
				</ul>
			</div>
		</div>  <!-- END .wrapper -->
		
		<!-- Main menu ______________________________________-->
		<nav id="mainmenu" role="navigation">
			<ul>
			  <li><?php echo CHtml::link('HOME',array('/site/')); ?></li>
			  <li><?php echo CHtml::link('ABOUT US',array('/site/about')); ?></li>
			  <li><?php echo CHtml::link('Programs',array('/site/programs')); ?></li>
			  <li><?php echo CHtml::link('Founder',array('/site/founder')); ?></li>
 		      <li><?php echo CHtml::link('News',array('/site/news')); ?></li>
              <li><?php echo CHtml::link('FAQ',array('/site/faq')); ?></li>
              <li><?php echo CHtml::link('Contact',array('/contact/create')); ?></li>
 		   </ul>		
   		<!-- Search box ______________________________________-->
			<div id="sitesearch">
				<i class="icon-search"></i>
			</div>
			<div id="search-results">
				<script>
				  (function() {
					var cx = '017683756184911932766:rvnzs1j9m1g';
					var gcse = document.createElement('script');
					gcse.type = 'text/javascript';
					gcse.async = true;
					gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
						'//www.google.com/cse/cse.js?cx=' + cx;
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
				<div id="search-box">
					<div class="gcse-search"></div>
				</div>
			</div>
		</nav> <!-- END #mainmenu -->
	</header>