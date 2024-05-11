<?php
// DEMO
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

function installedPath()
{
    return 'core/storage/LICENCE.txt';
}

// Check if the application is installed by checking the existence of LICENCE.txt
// If not installed, redirect to the installation page
if (!file_exists(installedPath())) {
    header('Location: install/index.php');
    exit(); // Use exit instead of die for consistency
}

// Check if the application is under maintenance
if (file_exists(__DIR__ . '/core/storage/framework/down')) {
    require __DIR__ . '/core/storage/framework/maintenance.php';
}

// Register The Auto Loader
require __DIR__ . '/core/vendor/autoload.php';

// Run The Application
$app = require_once __DIR__ . '/core/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

// Handle the incoming request using the application's HTTP kernel
$response = $kernel->handle(
    $request = Request::capture()
);

// Send the response back to the client's browser
$response->send();

// Terminate the request
$kernel->terminate($request, $response);
