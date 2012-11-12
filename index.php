<?php



$main = require_once __DIR__.'/lib/base.php';



$main->set('CACHE',FALSE);
$main->set('DEBUG',1);

//setup path to load controller
$main->set('AUTOLOAD','controller/blog/,controller/user/');

//mysql connection 
$main->set('MYSQL',new DB('mysql:host=localhost [;port=3306] [;dbname=blog]','root',''));

// turn on debug
$main->set('DEBUG',3);

//base view folder location
$main->set('UI','ui/');

//home page
$main->route('GET /','Blog->home');

//View page
//$main->route('GET /view','Blog->view');

//login page
//$main->route('GET /login','User->login');


$main->run();

/*

function home(){
       
    F3::set('bob','I love apples do you?');
    //print 'Hello this is a test!!;
    echo Template::serve('blog/home.tpl.php');
    
};

//Template::serve('welcome.tpl.php');

F3::run();
*/
/*
require __DIR__.'/lib/base.php';

F3::set('CACHE',FALSE);
F3::set('DEBUG',1);
F3::set('UI','ui/');

F3::route('GET /',
	function() {
		F3::set('modules',
			array(
				'apc'=>
					'Cache engine',
				'gd'=>
					'Graphics plugin',
				'hash'=>
					'Framework core',
				'imap'=>
					'Authentication',
				'json'=>
					'Various plugins',
				'ldap'=>
					'Authentication',
				'memcache'=>
					'Cache engine',
				'mongo'=>
					'M2 MongoDB mapper',
				'pcre'=>
					'Framework core',
				'pdo_mssql'=>
					'SQL handler, Axon ORM, Authentication',
				'pdo_mysql'=>
					'SQL handler, Axon ORM, Authentication',
				'pdo_pgsql'=>
					'SQL handler, Axon ORM, Authentication',
				'pdo_sqlite'=>
					'SQL handler, Axon ORM, Authentication',
				'session'=>
					'Framework core',
				'sockets'=>
					'Network plugin',
				'xcache'=>
					'Cache engine'
			)
		);
		echo Template::serve('welcome.htm');
	}
);

F3::run();
*/
?>
