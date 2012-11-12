<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={{ @ENCODING }}"/>
	<link rel="stylesheet" type="text/css" href="{{ @BASE }}/min?base={{ @GUI }}css/&amp;files=reset.css,demo.css"/>
	<title>{{ @layout_Sitename }}</title>
	<base href="{{ @BASE }}/"/>
</head>
<body> 
	<div id="header">
		<h2>{{ @layout_Sitename }}</h2>
		<div id="menu">
			<ul>
				<F3:repeat key="{{ @key }}" value="{{ @option }}" group="{{ @menu }}">
					<li>
						<a href="{{ @option }}" title="{{ @key }}"{{ @pagetitle==@key?' class="active"':'' }}>{{ @key }}</a>
					</li>
				</F3:repeat></p>
			</ul>
		</div>
	</div>
	<div id="content">
		<F3:include href="{{ @template }}"/>
	</div>
	<div id="footer">
		<p class="center">This site is powered by <a href="http://fatfree.sourceforge.net">F3</a> - the common sense PHP framework</p>
	</div>
</body>
</html>