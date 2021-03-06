<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

	    // Eloquent settings
	    'db' => [
		    'driver' => 'mysql',
		    'charset' => 'utf8',
		    'collation' => 'utf8_unicode_ci',
		    'host' => '127.0.0.1',
		    'database' => 'oj_game',
		    'username' => 'root',
		    'password' => '',
	    ]
    ],
];
