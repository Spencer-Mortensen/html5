<?php

namespace SpencerMortensen\Autoloader;

$project = dirname(__DIR__);

$classes = [
	'SpencerMortensen\\Html5' => 'src',
];

require "{$project}/vendor/spencer-mortensen/autoloader/src/Autoloader.php";

new Autoloader($project, $classes);
