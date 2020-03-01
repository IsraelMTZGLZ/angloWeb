(function($) {
    "use strict";

    var tpj = jQuery;
    var revapi24;
	
	
  // Preloader 
    jQuery(window).on('load', function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(350).fadeOut("slow");
    });
	
	
	 // on ready function
    jQuery(document).ready(function($) {

			function quick_search(){
				'use strict';
				/* Quik search in header on click function */
				var quikSearch = $("#quik-search-btn");
				var quikSearchRemove = $("#quik-search-remove");
				
				quikSearch.on('click',function() {
					$('.dez-quik-search').animate({'width': '100%' });
					$('.dez-quik-search').delay(500).css({'left': '0'  });
				});
				
				quikSearchRemove.on('click',function() {
					$('.dez-quik-search').animate({'width': '0%' ,  'right': '0'  });
					$('.dez-quik-search').css({'left': 'auto'  });
				});	
				/* Quik search in header on click function End*/
			}
			quick_search();
			
			
			
			// Main Slider Animation //

				(function($) {

            //Function to animate slider captions 
            function doAnimations(elems) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function() {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function() {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load 
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.carousel-item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel 
            $myCarousel.carousel();

            //Animate captions in first slide on page load 
            doAnimations($firstAnimatingElems);

            //Pause carousel  
            $myCarousel.carousel('pause');


            //Other slides to be animated on carousel slide event 
            $myCarousel.on('click slide.bs.carousel', function(e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });


        })(jQuery);
		

				//----------- team slider js -------------//
	
	$(document).ready(function() {
              $('.team_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
				autoplay:true,
				smartSpeed: 1200,
                responsiveClass: true,
				navText : ['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: true
                  },
                  900: {
                    items: 2,
                    nav: true
                  },
                  1000: {
                    items: 2,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
            })

			
					
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 100) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(200);
            }
        });
        $('#return-to-top').on('click', function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });
		
			
			
				
	$('.about_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay:true,
				 smartSpeed: 1200,
                responsiveClass: true,
				navText : ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: true
                  },
                  1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              });
			
			
			$('.related_work_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay:true,
				 smartSpeed: 1200,
                responsiveClass: true,
				navText : ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: true
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              });
			
			//------ progress bar js -----//
				var wind = $(window);
	$(".loading").fadeOut(500);


    wind.on('scroll', function () {
        $(".skills-progress span").each(function () {
            var bottom_of_object = 
            $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = 
            $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if(bottom_of_window > bottom_of_object) {
                $(this).css({
                  width : myVal
                });
            }
        });
    });
			
			
			 // partners js //
			
			$(document).ready(function() {
            $('.pn_slider_wraper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsiveClass: true,
                smartSpeed: 1200,
               	navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
					500: {
                        items: 2,
                        nav: true
                    },
                    700: {
                        items: 4,
                        nav: true
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })
		


			// custom overlay js //
			
			    var fast = 200;
    $(".service_cntnt, .portfolio_item").hover(function(e) {
        var liPos = $(this).offset();
        var bord = comingMouse(e.pageX - liPos.left, e.pageY - liPos.top, $(this).width(), $(this).height());
        var overlay =  $(this).find($(".service_overlay, .portfolio_overlay"));
        switch (bord) {
            case "left":
              overlay.css({"top":0,"left":"-105%"});
              overlay.stop().animate({"left":0},fast,"linear");
              break;
            case "right":
              overlay.css({"top":0,"left":"100%"});
              overlay.stop().animate({"left":0},fast,"linear");          
              break;
            case "top":
              overlay.css({"top":"-105%","left":0});
              overlay.stop().animate({"top":0},fast,"linear");
              break;
            case "bottom":
              overlay.css({"top":"100%","left":0});
              overlay.stop().animate({"top":0},fast,"linear");
              break;
        }
    }, function(e) {
        var liPos = $(this).offset();
        var bord = comingMouse(e.pageX - liPos.left, e.pageY - liPos.top, $(this).width(), $(this).height());
        var overlay =  $(this).find($(".service_overlay, .portfolio_overlay"));
      switch (bord) {
            case "left":
              overlay.stop().animate({"left":"-105%"},fast);
              break;
            case "right":
              overlay.stop().animate({"left":"100%"},fast);         
              break;
            case "top":
              overlay.stop().animate({"top":"-105%"},fast);
              break;
            case "bottom":
              overlay.stop().animate({"top":"100%"},fast);
              break;
        }
    });

	function comingMouse(hor,vert,larg,haut) {
        var top = Math.abs(vert),
            bottom = Math.abs(vert-haut),
            left = Math.abs(hor),
            right = Math.abs(hor-larg);

        var min = Math.min(top,bottom,left,right);
        switch (min) {
            case left:
                return "left";
            case right:
                return "right";
            case top:
                return "top";
            case bottom:
                return "bottom";
			}
		}
   
   
    //------------ counter-js------------// 

    $('.counter_section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find('.timer').each(function () {
                var $this = $(this);
                $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            $(this).off('inview');
        }
    });
	
	
	
		//* Isotope js
 

    function protfolioIsotope(){
        if ( $('.gallery_wrapper').length ){ 
            // Activate isotope in container
            $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
                $(".protfoli_inner, .portfoli_inner").isotope({
                    layoutMode: 'masonry',  
                }); 
            });  
            
            // Add isotope click function 
            $(".protfoli_filter li").on('click',function(){
                $(".protfoli_filter li").removeClass("active");
                $(this).addClass("active"); 
                var selector = $(this).attr("data-filter");
                $(".protfoli_inner, .portfoli_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });  
        };
    }; 

 protfolioIsotope (); 
 
	
	
			
			// Magnific popup-video

	$('.test-popup-link').magnificPopup({ 
    type: 'iframe',
    iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            '<div class="mfp-title">Some caption</div>'+
            '</div>',
        patterns: {
            youtube: {
                index: 'youtube.com/', 
                id: 'v=',
                src: 'https://www.youtube.com/embed/ryzOXAO0Ss0'
            }
        }
    }
    // other options
});


	// Contact Form Submition
	function checkRequire(formId , targetResp){
		targetResp.html('');
		var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
		var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
		var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
		var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
		var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
		var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
		var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
		var check = 0;
		$('#er_msg').remove();
		var target = (typeof formId == 'object')? $(formId):$('#'+formId);
		target.find('input , textarea , select').each(function(){
			if($(this).hasClass('require')){
				if($(this).val().trim() == ''){
					check = 1;
					$(this).focus();
					targetResp.html('You missed out some fields.');
					$(this).addClass('error');
					return false;
				}else{
					$(this).removeClass('error');
				}
			}
			if($(this).val().trim() != ''){
				var valid = $(this).attr('data-valid');
				if(typeof valid != 'undefined'){
					if(!eval(valid).test($(this).val().trim())){
						$(this).addClass('error');
						$(this).focus();
						check = 1;
						targetResp.html($(this).attr('data-error'));
						return false;
					}else{
						$(this).removeClass('error');
					}
				}
			}
		});
		return check;
	}
	$(".submitForm").on("click", function() {
		var _this = $(this);
		var targetForm = _this.closest('form');
		var errroTarget = targetForm.find('.response');
		var check = checkRequire(targetForm , errroTarget);
		if(check == 0){
			var formDetail = new FormData(targetForm[0]);
			formDetail.append('form_type' , _this.attr('form-type'));
			$.ajax({
				method : 'post',
				url : 'ajax.php',
				data:formDetail,
				cache:false,
				contentType: false,
				processData: false
			}).done(function(resp){
				if(resp == 1){
					targetForm.find('input').val('');
					targetForm.find('textarea').val('');
					errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
				}else{
					errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
				}
			});
		}
	});

	
	 // testimonial wrapper js //
	 $(document).ready(function() {
            $('.testimonial_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: false,
                responsiveClass: true,
                smartSpeed: 1200,
                navText: ['<i class="flaticon-left-arrow" aria-hidden="true"></i>', '<i class="flaticon-right-arrow" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })
	


 });

})(jQuery);	