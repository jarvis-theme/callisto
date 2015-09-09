define(['jquery','jq_ui','jq_cycle','jq_uniform'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
		    $(document).ready(function(){		//when DOM is ready
				initQuickShop();
				initNavigationSelector();
				initSingleProductDescriptionTabs();
				initSingleProductImageSlider();
		    });
		};

		var initQuickShop = function() {
			$('.item-block-1 .button-1, .item-block-2 .button-1').click(function(){
				adjustQuickShopPopupPosition();
				$('.lightbox').animate({'opacity':'0.35'}, 0, 'linear');
				$('.quick-shop').animate({'opacity':'1'}, 0, 'linear');
				$('.lightbox, .quick-shop').css('display', 'block');
			});
			$('.lightbox, .close').live('click', function(){
				closeQuickShopPopup();
				return false;
			});
			$(window).resize(function(){
				adjustQuickShopPopupPosition();
			});
		};
		var adjustQuickShopPopupPosition = function() {
			$('.quick-shop').css({
				position: 'fixed',
				left: ($(window).width() - $('.quick-shop').outerWidth())/2,
				top: ($(window).height() - $('.quick-shop').outerHeight())/2
			});	
		};
		var closeQuickShopPopup = function() {
			$('.quick-shop').fadeOut(350);			//close popup
			$('.lightbox').hide();
		};

		var initNavigationSelector = function() {
			var selector = $('.navigationSelector');
			if(selector.length > 0)
			{
				selector.change(function(){
					window.location = $('option:selected', $(this)).attr('value');
				});
			}
		};

		var initSingleProductDescriptionTabs = function() {
			$('#description_slider').cycle({
				fx: 'scrollHorz',
				speed: '600',
				timeout: 0,
				easing: 'swing'
			});

			var navBtns = $('.button-navigation a');
			navBtns.click(function(){
				var index = navBtns.index($(this));
				navBtns.removeClass('active');
				$(this).addClass('active');
				$('#description_slider').cycle(index);
				return false;
			});
		};

		var initSingleProductImageSlider = function() {
			$('#single-product-slider').cycle({
				fx: 'scrollHorz',
				speed: '600',
				timeout: 0,
				easing: 'swing',
				slideResize: 0,
				containerResize: 1,
				slideExpr: '.image'
			});

			var navBtns = $('.main-item-wrapper .image-wrapper-4');
			navBtns.click(function(){
				var index = navBtns.index($(this));
				navBtns.removeClass('active');
				$(this).addClass('active');
				$('#single-product-slider').cycle(index);
				return false;
			});
		};
	};
});