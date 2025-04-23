<?php
// includes/config.php

declare(strict_types=1);

require_once __DIR__ . 'vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// Validate required env vars
$required = ['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'DB_CHARSET'];
foreach ($required as $var) {
    if (empty($_ENV[$var] ?? null)) {
        throw new RuntimeException(sprintf('Environment variable %s is not set.', $var));
    }
}

try {
    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=%s',
        $_ENV['DB_HOST'],
        $_ENV['DB_NAME'],
        $_ENV['DB_CHARSET']
    );

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS'], $options);

} catch (PDOException $e) {
    // In production, you might log this and show a generic error
    throw new RuntimeException('Database connection failed: ' . $e->getMessage());
}
