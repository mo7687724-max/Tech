<?php 


// Products CRUD Routes
$router->get('/', [ProductController::class, 'index']);
$router->get('/products/create', [ProductController::class, 'create']);
$router->post('/products/store', [ProductController::class, 'store']);
$router->post('/products/destroy', [ProductController::class,'destroy']);
$router->get('/products/edit', [ProductController::class,'edit']);
$router->post('/products/update', [ProductController::class,'update']);