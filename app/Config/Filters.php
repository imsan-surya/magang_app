<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'filteradmin' => \App\Filters\FilterAdmin::class,
		'filterpengadopsi' => \App\Filters\FilterPengadopsi::class,
		'filtermitra' => \App\Filters\FilterMitra::class,
		
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'filteradmin' => [
				'except' => ['/','auth', 'auth/*','web']
			],
			'filterpengadopsi' => [
				'except' => ['/','auth', 'auth/*','web']
			],
			'filtermitra' => [
				'except' => ['/','auth', 'auth/*','web']
			],
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'filteradmin' => [
				'except' => ['home', 'home/*','web', 'admin', 'admin/*']
			],
			'filterpengadopsi' => [
				'except' => ['home', 'home/*','web', 'pengadopsi', 'pengadopsi/*']
			],
			'filtermitra' => [
				'except' => ['home', 'home/*','web', 'mitra', 'mitra/*']
			],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
