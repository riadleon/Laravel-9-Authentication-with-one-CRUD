<!-- Required vendors -->
<script src="{{ asset('backend')}}/vendor/global/global.min.js"></script>
	<script src="{{ asset('backend')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="{{ asset('backend')}}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('backend')}}/js/custom.min.js"></script>
	<script src="{{ asset('backend')}}/js/deznav-init.js"></script>
	<script src="{{ asset('backend')}}/vendor/owl-carousel/owl.carousel.js"></script>
		
		
	
	<!-- Chart piety plugin files -->
    <script src="{{ asset('backend')}}/vendor/peity/jquery.peity.min.js"></script>
	
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('backend')}}/js/dashboard/dashboard-1.js"></script>
	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.owl-bank-wallet').owlCarousel({
				loop:true,
				autoplay:false,
				margin:0,
				nav:false,
				center:true,
				dots: false,
				navText: [''],
				responsive:{
					0:{
						items:2
					},
					
					480:{
						items:2
					},			
					
					991:{
						items:3
					},
					1200:{
						items:3
					},
					1600:{
						items:2
					}
				}
			})		
			
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:true,
				dots: false,
				center:true,
				navText: ['', '<i class="las la-long-arrow-alt-right"></i>'],
				responsive:{
					0:{
						items:3
					},
					600:{
						items:5
					},	
					991:{
						items:8
					},			
					
					1200:{
						items:8
					},
					1600:{
						items:6
					}
				}
			})			
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>