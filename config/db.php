<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.env('DB_HOST', 'localhost').';port=3306;dbname='.env('DB_SELECT', 'glonass'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', '1111'),
    'charset' => 'utf8'

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];