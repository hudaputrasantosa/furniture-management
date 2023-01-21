<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// BARANG
Breadcrumbs::for('home', function ($trail) {
     $trail->push('Home', route('barang'));
});
Breadcrumbs::for('create', function ($trail) {
     $trail->parent('home');
     $trail->push('Create', route('create'));
});
Breadcrumbs::for('edit', function ($trail) {
     $trail->parent('home');
     $trail->push('Edit', route('edit', ''));
});


// PENJUALAN
Breadcrumbs::for('penjualan', function ($trail) {
     $trail->push('Penjualan', route('penjualan'));
});
Breadcrumbs::for('create-penjualan', function ($trail) {
     $trail->parent('penjualan');
     $trail->push('Create Penjualan', route('create-penjualan'));
});



// home > products > product detail
Breadcrumbs::for('product_name', function ($trail) {
     $trail->parent('products');
     $trail->push('product_name', route('product.detail'));
});
