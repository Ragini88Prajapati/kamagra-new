<?php
require_once 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$fields = DB::select('SHOW COLUMNS FROM product');
$newFields = ['usage_instructions', 'warnings', 'mechanism_of_action', 'tips'];

foreach($fields as $field) {
    if(in_array($field->Field, $newFields)) {
        echo $field->Field . ': ' . $field->Type . PHP_EOL;
    }
}

echo "Migration status:\n";
$migrations = DB::select('SELECT migration FROM migrations ORDER BY id DESC LIMIT 5');
foreach($migrations as $migration) {
    echo "- " . $migration->migration . "\n";
}