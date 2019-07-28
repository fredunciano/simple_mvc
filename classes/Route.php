<?php

class Route{

		public static $validRoutes = array();

		public static function set($route, $function){

			self::$validRoutes[]  = $route;

			// print_r(self::$validRoutes);
			if($_GET['_p'] == $route){

				$function -> __invoke();
			}
		}
}
?>