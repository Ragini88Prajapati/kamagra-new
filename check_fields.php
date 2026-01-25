<?php
require_once 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$fields = DB::select('SHOW COLUMNS FROM product');
$targetFields = [];

foreach($fields as $field) {
    $fieldName = strtolower($field->Field);
    if (strpos($fieldName, 'warn') !== false || 
        strpos($fieldName, 'mechanism') !== false || 
        strpos($fieldName, 'tip') !== false || 
        strpos($fieldName, 'usage') !== false ||
        strpos($fieldName, 'instruction') !== false) {
        $targetFields[] = $field->Field;
    }
}

echo "Found fields: " . implode(', ', $targetFields) . "\n";

// Also check for the specific fields we need
$neededFields = ['usage_instructions', 'warnings', 'mechanism_of_action', 'tips'];
$existingNeededFields = [];

foreach($fields as $field) {
    if (in_array($field->Field, $neededFields)) {
        $existingNeededFields[] = $field->Field;
    }
}

echo "Existing needed fields: " . implode(', ', $existingNeededFields) . "\n";