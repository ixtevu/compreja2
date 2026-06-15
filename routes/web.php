<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ItemPedidoController;

Route::resource('pedidos', PedidoController::class);
Route::resource('itens-pedido', ItemPedidoController::class);