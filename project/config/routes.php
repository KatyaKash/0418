<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/act-1/', 'test', 'act1'),
		new Route('/act-2/', 'test', 'act2'),
		new Route('/act-3/', 'test', 'act3'),
		
	];
	
