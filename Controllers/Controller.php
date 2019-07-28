<?php
class Controller extends Database{ #basecontroller

	
	
	public static function CreateView($viewName,$data){

		require_once('View/' . $viewName . '.php');
	}
}