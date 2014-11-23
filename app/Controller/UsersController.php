<?php
class UsersController extends AppController {

	var $name = 'Users';
	//var $components = array('Auth'); // Pas nécessaire si déclaré dans votre contrôleur app

	/**
	 * Le Composant Auth fournit la fonctionnalité nécessaire
	 * pour le login, donc vous pouvez laisser cette fonction vide.
	*/
	function login() {
	}
	function logout() {
		$this->redirect($this->Auth->logout());
	}
}