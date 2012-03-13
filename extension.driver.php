<?php

Class Extension_Screen_Detection extends Extension {

	public function about() {
    	return array(
    		'author'   	=> array(
    	  		'email'   => 'hello@enguin.com',
    			'name'	=> 'Enguin Design',
    			'website' => 'http://enguindesign.com'
    		),
    		'description'  => 'This extension adds user screen information to the symphony param pool for server-side optimizations for responsive web design.',
    		'name' 		=> 'Screen Detection',
    		'release-date' => '2012-03-06',
    		'version'  	=> '2012.03.01'
    	);
    }

	public function install() {
	  	Symphony::Configuration()->set('screen_detection_enabled', 'true', 'screen_detection');
	}

	public function uninstall() {
  		Symphony::Configuration()->remove('screen_detection');
	}

	public function getSubscribedDelegates(){
  		return array(
		
			array(
  				'page' 	=> '/frontend/',
  				'delegate' => 'FrontendParamsResolve',
  				'callback' => 'addParam'
			)
		);
	}

	public function addParam($context) {

		$window_height = !empty($_COOKIE['window-height']) ? $_COOKIE['window-height'] : 0;
		$context['params']['window-height'] = $window_height;
		$window_width =  !empty($_COOKIE['window-width']) ? $_COOKIE['window-width'] : 0;
		$context['params']['window-width'] = $window_width;
		$screen_height = !empty($_COOKIE['screen-height']) ? $_COOKIE['screen-height'] : 0;
		$context['params']['screen-height'] = $screen_height;
		$screen_width =  !empty($_COOKIE['screen-width']) ? $_COOKIE['screen-width'] : 0;
		$context['params']['screen-width'] = $screen_width;
		$pixel_density = !empty($_COOKIE['pixel-density']) ? $_COOKIE['pixel-density'] : 1;
		$context['params']['pixel-density'] = $pixel_density;
		$screen_orientation = !empty($_COOKIE['screen-orientation']) ? $_COOKIE['screen-orientation'] : 0;
		$context['params']['screen-orientation'] = $screen_orientation;		
	}
}
?>
