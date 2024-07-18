<?php

require __DIR__ . '/Core/manual-integration.php';

$routes = new \Chisu\PhpIntegration\Repositories\Routes();

$data = $routes->authorization([
    'client_id' => 'EgBGlnIM5DLceDLl9cKBbsQa6PIaOGArwMCr5zSuJYkURUve',
    'client_secret' => 'NsL0ECP9LBTptVrqwPv9kdeRVpFwBhR13pjsFS52RTmYmQvjTCT4TenEO6RwbSuc',
]);

dump($data);