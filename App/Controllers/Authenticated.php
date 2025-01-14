<?php 
	
namespace App\Controllers;

/**
 * Authenticated base contrller
 *
 * PHP version 7.0
 */

abstract class Authenticated extends \Core\Controller{
	/**
	 * Require the user to be authenticated before giving access to all methods in the controller
	 *
	 * @return void
	 */
	protected function before(){
		$this->requireLogin();
	}
}