<?php

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule('ção', 'cao');
echo $slug->Slugify('Teste com acentuação para geração de slug', '_');