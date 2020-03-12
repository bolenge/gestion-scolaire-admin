<?php

	/****************************************************************\
	 * CE FICHEIR EST RESERVE AUX FONTIONS A AJOUTER DANS LE PROJET *
	\****************************************************************/

	if (!function_exists('get_flash')) {
		/**
		 * Permet de renvoyer le message flash
		 */
		function get_flash() {
			
		}
	}

	if (!function_exists('set_flash')) {
		/**
		 * Permet de modifier ou enregistrer un message flash
		 * @param string $type Le type de message flash
		 * @param string $message Le message flash à sauver
		 * @return void
		 */
		function set_flash(string $type, string $message) {
			\session('flas', [
				'type' => $type,
				'message' => $message
			]);
		}
	}