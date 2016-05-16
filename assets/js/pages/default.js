define(['jquery','jq_cycle','jq_uniform','bootstrap','fancybox','jquery_cookie'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			$(document).ready(function(){		//when DOM is ready
				initScrollTop();
				initAccountLogin();
				initFormElements();
				adjustCollectionItemHeight();
			});
			initAddressManage();

			$('.fancybox').fancybox({
				padding: 10,
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150
			});
			// if($.cookie('promo-artian') === undefined || $.cookie('promo-artian') == 'false'){
				// Show the exit popup
				// $('#exitpopup').modal('show');
			// }
			/*$('#close-promo').on('click',function(){
				$('#exitpopup').modal('hide');
				var date = new Date();
				date.setTime(date.getTime() + (60 * 60 * 1000 * 3));
				$.cookie('promo-artian', true, { expires: date });  // expires after 1 hour
			});*/
		};

		var initFormElements = function() {
			$("select").uniform();
		};

		var initHomepageSlider = function() {
			$('#hompage-slider_content').cycle({
				fx: 'scrollHorz',
				speed: '600',
				timeout: '5000',
				prev:   '.previous', 
				next:   '.next',
				pager: '#pager',
				activePagerClass: "active",
				easing: 'swing',
				slideResize: 0,
				containerResize: 1,
				slideExpr: '.item',
				pagerAnchorBuilder: function(idx, slide) {  return ''; }
			});

			$('.navigation .bullet').click(function(){
				var index = $('.navigation #pager a').index($(this));
				$('#hompage-slider_content').cycle(index);
				return false;
			});
		};

		var initScrollTop = function() {
			$('.back-to-the-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		};

		var initAccountLogin = function() {
			if (window.location.hash == '#recover') {
				$('#login_form').hide();
				$('#password_recovery').show();
			}
			
			$('#forgot_password').click(function() {
				$('#login_form').fadeOut(200, function(){
					$('#password_recovery').fadeIn(200);
				});
				return false;
			});
		
			$('#login').click(function() {
				$('#password_recovery').fadeOut(200, function(){
					$('#login_form').fadeIn(200);
				});
				return false;
			});
		
			$('#login_submit').click(function() {
				$('#customer_login').submit();
				return false;
			});
		
			$('#recover_submit').click(function() {
				$(this).parents('form').submit();
				return false;
			});
		};

		var initAddressManage = function() {
			$('.edit-address-btn').click(function(){
				var editForm = 'edit_' + $(this).parents('.row').attr('id');				
				$('#' + editForm ).slideDown(300);
				return false;
			});
			
			$('.address-edit-form-cancel').click(function(){
				$(this).parents('.address-edit-form').slideUp(300);
				return false;
			});
		};

		var adjustCollectionItemHeight = function() {
			var width = $(window).width();
			
			/***** 4 columns *****/
			var items = $('.items .item-block-1');
			if(items.length > 0)
			{	
				var columns = 4;	//normal
				if(width < 959 && width > 768) { columns = 3; }	//tablet
				if(width < 768) { columns = 2; }	//smartphone
			
				resizeRowItemHeight(items, columns);
			}
				
			/***** 3 columns *****/
			var items = $('.items .item-block-2');
			if(items.length > 0)
			{	
				var columns = 3;	//normal
				if(width < 768) { columns = 2; }	//smartphone
				resizeRowItemHeight(items, columns);
			}
		};
		var resizeRowItemHeight = function(items, columns) {
			var chunks = chunk(items, columns);
			
			for(var row in chunks)
			{
				chunks[row].height(''); //reset previous height
				var maxHeight = Math.max.apply(null, chunks[row].map(function ()
				{
					return $(this).height();
				}).get());
				chunks[row].height(maxHeight);
			}
		};
		var chunk = function (arr, len) {
			var chunks = [],
				i = 0,
				n = arr.length;

			while (i < n) {
				chunks.push(arr.slice(i, i += len));
			}
			return chunks;
		};
	};
});