<?php
class Index extends Controller
{

	public function show(){
			$aa = "This is a homepage";
			echo $aa;
	}
	public function ytmp3(){
		if(isset($_GET['ytlink'])) {
			$id=strip_tags($_GET['ytlink']);
			$id=trim($id);

		}

		if(!empty($id)) {

			if (strpos($id, 'youtube.com') !== FALSE){
		   		$query = parse_url($id, PHP_URL_QUERY);
		   		parse_str($query, $params);
				$id = $params['v'];
			} 
			if (strpos($id, 'youtu.be') !== FALSE){
		    	$ex = explode('/',$id);
		    	$id = end($ex);
			} 
	
			// eval(str_rot13(gzinflate(str_rot13(base64_decode('XY5OCsIwFFH3gmooJbUVxCy6sxQ9gSAuUld+Vn4MIVp+eqU9vQYFxeXMvG6GTJSkTRCKkjo59ONRzZ2w8SCQBKoiHRBbtePcGLO1oERqtPUwZqC5o7DXZaojkpVUzn9m49APTGy+cuWJjW7Vg5wd1g8FIl1Ky1LCLI6ih9esk9LZ4s+MYBPIUKCCfV9hQ3dto3Xba/pGueRE59fqCQ==')))));
			$ytresponse = @file_get_contents("https://www.youtube.com/oemb ed?url=http%3A//youtube.com/watch%3Fv%3D$id&format=json");
		 	$ytinfo = array();
		 	$ytinfo = json_decode($ytresponse,true);
		 	$type = $ytinfo['type'];

		 	if(isset($type)){
			 	// FETCHING DATA FROM SERVER
			 	$jsonData = @file_get_contents("http://api.youtube6download.top/api/?id=$id");
			 	$links = json_decode($jsonData,TRUE);
		    }else{ 
		    	echo $error = "Error Found!"; 
		    }
 		} 
	}

}