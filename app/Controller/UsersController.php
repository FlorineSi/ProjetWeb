<?php
class UsersController extends AppController {

	var $name = 'Users';
	//var $components = array('Auth'); // Pas n�cessaire si d�clar� dans votre contr�leur app

	/**
	 * Le Composant Auth fournit la fonctionnalit� n�cessaire
	 * pour le login, donc vous pouvez laisser cette fonction vide.
	*/
	function login() {
	}
	function logout() {
		$this->redirect($this->Auth->logout());
	}
}