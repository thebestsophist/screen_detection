<?php

Class Extension_Screen_Detection extends Extension {

	public function about() {
    	return array(
    		'author'   	=> array(
    	  		'email'   => 'hello@enguin.com',
    			'name'	=> 'Enguin Design',
    			'website' => 'http://enguindesign.com'
    		),
    		'description'  => 'This extention adds user screen information to the symphony param pool for server-side optimizations for responsive web design.',
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

		$screen_height = !empty($_COOKIE['screen-height']) ? $_COOKIE['screen-height'] : 0;
		$context['params']['screen-height'] = $screen_height;
		$screen_width =  !empty($_COOKIE['screen-width']) ? $_COOKIE['screen-width'] : 0;
		$context['params']['screen-width'] = $screen_width;
	}
}
?>
