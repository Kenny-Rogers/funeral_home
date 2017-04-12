<div class="main">
<div id="slider">
					<ul class="items">
						<li>
							<img src="images/img1.jpg" alt="">
							<div class="banner">
								<span class="title"><span class="color2">We Have</span><span class="color1">Propositions</span><span>For Everybody</span></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
								<a href="#" class="button1">Read More</a>
							</div>
						</li>
						<li>
							<img src="images/img2.jpg" alt="">
							<div class="banner">
								<span class="title"><span class="color2">Fresh Ideas</span><span class="color1">For Growing</span><span>Your Business</span></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
								<a href="#" class="button1">Read More</a>
							</div>
						</li>
						<li>
							<img src="images/img3.jpg" alt="">
							<div class="banner">
								<span class="title"><span class="color2">The Best</span><span class="color1">You Can Find</span><span>On The Web</span></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
								<a href="#" class="button1">Read More</a>
							</div>
						</li>
					</ul>
	</div>
</div>

<script type="text/javascript"> Cufon.now(); </script>
		<script>
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
