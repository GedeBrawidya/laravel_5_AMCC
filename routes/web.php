<?php
use app\http\Controllers\produkcontroller;
use Illuminate\Support\Facades\Route;

route::get(url:'/produk', action: [produkcontroller::class, 'index']);
 