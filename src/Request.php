<?php 
namespace Xdevpusaka\Http;

class Request {

	static function post($key = NULL) {

		$post = [];

		if(!empty($_POST)) {
			$post = $_POST;
		}else {
			$post = json_decode(file_get_contents('php://input'), True);
		}

		if($key === NULL) {		
			return $post;
		}

		if(isset($post[$key])) {
			return $post[$key];
		}

		return NULL;

	}

	static function get($key = NULL) {
		
		if($key === NULL) {
			return $_GET;
		}

		if(isset($_GET[$key])) {
			return $_GET[$key];
		}
		
		return NULL;

	}
	
}