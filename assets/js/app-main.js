var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
	urlArgs: "v=002",
    waitSeconds : 60,
	shim: {
		"bootstrap"	: {
			deps : ['jquery'],
		},
		"cart" : {
			deps : ['jquery'],
		},
		'jq_cycle' : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		'jq_uniform' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"fancybox" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		bootstrap		: '//maxcdn.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		jq_cycle		: dirTema+'/assets/js/lib/jquery.cycle.all',
		jq_placeholder	: dirTema+'/assets/js/lib/jquery.placeholder.min',
		jq_uniform		: dirTema+'/assets/js/lib/jquery.uniform',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart'
], function(router,b,main,cart){
	cart.run();
	main.run();
	
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	router.run();
});