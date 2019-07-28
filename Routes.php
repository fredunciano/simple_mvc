<?php

Route::set('about-us', function(){

	// Aboutus::CreateView('aboutus');
	Aboutus::test('aboutus');

});

Route::set('contact-us', function(){

	Contactus::CreateView('contactus');
});

Route::set('', function(){

	Index::CreateView('index');
  ##Class::function inside class(viewname)
});
?>