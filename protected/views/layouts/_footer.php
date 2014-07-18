<footer role="contentinfo" id="footer">
		<div class="wrapper">
			<div class="footerbox">
				<h3>Latest News</h3>
				<ul>
					<li>
						<i class="icon-file-text"></i> 
						<h4><a href="#">Coming soon</a></h4>
						<p class="small"><strong>TBA </strong> </p>
					</li>
		        </ul>
			</div> <!-- END .footerbox -->
			
			<div class="footerbox">
				<h3>Events</h3>
				<ul>
					<li>
						<i class="icon-calendar"></i> 
						<h4><a href="#">TBA</a></h4>
						<p class="small"><strong>TBA </strong> </p>
					</li>
					
					
				</ul>
			</div> <!-- END .footerbox -->
			
			<div class="footerbox last">
				<h3>Our newsletter</h3>
				<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
<form action="//melbourneyogathon.us7.list-manage.com/subscribe/post?u=ec52994742ed580f20fae5267&amp;id=9b4e92b60a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_ec52994742ed580f20fae5267_9b4e92b60a" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
			</div> <!-- END .footerbox -->
			<div class="clear"></div>

			<hr />
			<p class="left small">Copyright &copy;<?php echo date('Y'); ?> IAHV (Australia). <br />All rights reserved.</p>
			<div class="clear"></div>
		</div>  <!-- END .wrapper -->
	</footer>
</div> <!-- END #wrapperbox -->
<br class="clear" /> <!-- This is the end, my friend -->


<!-- Initializing scripts ______________________________________-->
	<script> 			
	jQuery(window).load(function() {
		// init Cycle for slider
		
		$('#slides').after('<div id="circle-pager">').cycle({
			fx:      'fade', 
			speed:    300, 
			timeout:  8000,
			cleartype:  true,
			cleartypeNoBg: false,
			pager: '#circle-pager',
			next:  '#slider .next1', 
			prev:  '#slider .prev1',
			slideResize: true,
			fit: 1,
			width: '100%',
			before:  function(currSlideElement, nextSlideElement) { 
				// hide elements and put them in start position		
				$(this).find('.slide-image').css({
					'opacity': '0',
					'left': '-50px'
				});
				$(this).find('.slide-text').css({
					'opacity': '0',
					'top': '0'
				});
				$(this).find('.slide-text p').css({
					'opacity': '0',
					'left': '15px'
				});
			},
			after:  function(currSlideElement, nextSlideElement) { 			
				// fade in image
				$(this).find('.slide-image').animate({
					'opacity': '1',
					'left': '0'
				}, 500, 'linear');
				// bring the text box from top
				$(this).find('.slide-text').delay(500).animate({
					'opacity': '1',
					'top': '25%'
				}, 500, 'easeOutBack');
				// bring the paragraphs in
				$(this).find('.slide-text p:eq(0)').delay(500).animate({
					'opacity': '1',
					'left': '0'
				}, 500, 'easeOutBack');
				$(this).find('.slide-text p:eq(1)').delay(700).animate({
					'opacity': '1',
					'left': '0'
				}, 500, 'easeOutBack');
				$(this).find('.slide-text p:eq(2)').delay(900).animate({
					'opacity': '1',
					'left': '0'
				}, 500, 'easeOutBack');
				$(this).find('.slide-text p:eq(3)').delay(1100).animate({
					'opacity': '1',
					'left': '0'
				}, 500, 'easeOutBack');

			} 
		});

		// init Cycle for testimonials
		$('#quotes').cycle({
			fx:      'fade', 
			speed:    400, 
			timeout:  0,
			cleartype:  false,
			next:  '#quotes-nav .next2', 
			prev:  '#quotes-nav .prev2',
			slideResize: true,
			fit: 1,
			width: '100%'
		});
		
		// init jCarousel for portfolio projects
		$('.carousel4').jcarousel({
			'visible': 4,
			'wrap': 'both'
		});
		$('#latest-projects .prev1').click(function() {
			$('.carousel4').jcarousel('scroll', '-=1');
		});
		$('#latest-projects .next1').click(function() {
			$('.carousel4').jcarousel('scroll', '+=1');
		});

		// init jCarousel for recent news
		$('.carousel-vert4').jcarousel({
			'vertical': true,
			'visible': 4,
			'wrap': 'both'
		});
		$('#recent-news .prev2').click(function() {
			$('.carousel-vert4').jcarousel('scroll', '-=1');
		});
		$('#recent-news .next2').click(function() {
			$('.carousel-vert4').jcarousel('scroll', '+=1');
		});
		 
		// init jCarousel for client logos
		$('.carousel7').jcarousel({
			'wrap': 'circular'
		}).jcarouselAutoscroll({
			'interval': 2000,
			'autostart': true,
			'target': '+=1'
		});	
	});
	</script>
	
	<!-- Your Google Analytics ______________________________________-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52936801-1', 'auto');
  ga('send', 'pageview');

</script>