<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Powered by {{ @VERSION }}</title>
	<style type="text/css">		
                {{ Web::minify('ui/css/',array('welcome.css'),FALSE) }}
	</style>
</head>
<body>
    <br /><br />
    <h1>{{@bob}}<?//F3::get('bob')?></h1> 
    <p>
        Hello
    </p>
</body>
</html>