<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// BARANG
Breadcrumbs::for('home', function ($trail) {
     $trail->push('Barang', route('barang'));
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


// PEMESANAN
Breadcrumbs::for('pemesanan', function ($trail) {
     $trail->push('Pemesanan', route('pemesanan'));
});

// KEUANGAN
Breadcrumbs::for('keuangan', function ($trail) {
     $trail->push('Keuangan', route('keuangan'));
});

// PEMBELIAN
Breadcrumbs::for('pembelian', function ($trail) {
     $trail->push('Supplay Barang', route('pembelian'));
});
Breadcrumbs::for('create-pembelian', function ($trail) {
     $trail->parent('pembelian');
     $trail->push('Create Supplay Barang', route('create-pembelian'));
});


// PEMBELIAN
Breadcrumbs::for('supplier', function ($trail) {
     $trail->push('Supplier', route('supplier'));
});
Breadcrumbs::for('create-supplier', function ($trail) {
     $trail->parent('supplier');
     $trail->push('Create Supplier', route('create-supplier'));
});

// home > products > product detail
Breadcrumbs::for('product_name', function ($trail) {
     $trail->parent('products');
     $trail->push('product_name', route('product.detail'));
});
