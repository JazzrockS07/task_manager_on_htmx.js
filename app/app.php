<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

class App {

	public function loadConfigs() {
		$folder = __DIR__ . "/config"; 
		$files = glob($folder . '/*.php'); // return array files
		foreach($files as $filename){
			require_once $filename;
		}
	}
	public function loadComponents() {
		$folder = __DIR__ . "/components"; 
		$files1 = glob($folder . '/*.php'); // return array files
		$files2 = glob($folder . '/**/*.php'); // return array files
		$files = array_merge($files1, $files2);
		foreach($files as $filename){
			require_once $filename;
		}
	}
	public function loadShortCodes() {
		$folder = __DIR__ . "/shortcodes"; 
		$files = glob($folder . '/*.php'); // return array files
		foreach($files as $filename){
			require_once $filename;
		}
	}
	public function loadHelpers() {
		$folder = __DIR__ . "/helpers"; 
		$files = glob($folder . '/*.php'); // return array files
		foreach($files as $filename){
			require_once $filename;
		}
	}

	public function loadArchives() {
		$folder = __DIR__ . "/archive"; 
		$files1 = glob($folder . '/*.php'); // return array files
		$files2 = glob($folder . '/**/*.php'); // return array files
		$files = array_merge($files1, $files2);
		foreach($files as $filename){
			require_once $filename;
		}
	}
	public function loadSingles() {
		$folder = __DIR__ . "/single"; 
		$files1 = glob($folder . '/*.php'); // return array files
		$files2 = glob($folder . '/**/*.php'); // return array files
		$files = array_merge($files1, $files2);
		foreach($files as $filename){
			require_once $filename;
		}
	}
	public function loadTaxonomies() {
		$folder = __DIR__ . "/single"; 
		$files1 = glob($folder . '/*.php'); // return array files
		$files2 = glob($folder . '/**/*.php'); // return array files
		$files = array_merge($files1, $files2);
		foreach($files as $filename){
			require_once $filename;
		}
	}

	public function init() {
		$this->loadConfigs();
		$this->loadHelpers();
		$this->loadComponents();
		$this->loadShortCodes();
		$this->loadArchives();
		$this->loadTaxonomies();
		$this->loadSingles();
	}
}

$app = new App();
$app->init();