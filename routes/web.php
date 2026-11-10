<?php

use App\Livewire\Auth\Login;
use App\Livewire\Categorias\CategoriaCreate;
use App\Livewire\Categorias\CategoriaEdit;
use App\Livewire\Categorias\CategoriaIndex;
use App\Livewire\Fornecedor\FornecedorCreate;
use App\Livewire\Fornecedor\FornecedorEdit;
use App\Livewire\Fornecedor\FornecedorIndex;
use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Produtos\ProdutoCreate;
use App\Livewire\Produtos\ProdutoEdit;
use App\Livewire\Produtos\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class )->name('login');

Route::get('/categorias', CategoriaIndex::class)->name('categorias.index');
Route::get('/categorias/create', CategoriaCreate::class)->name('categorias.create');
Route::get('/categorias/edit/{id}', CategoriaEdit::class)->name('categorias.edit');

Route::get('/produtos', ProdutoIndex::class)->name('produtos.index');
Route::get('/produtos/create', ProdutoCreate::class)->name('produtos.create');
Route::get('/produtos/edit/{id}', ProdutoEdit::class)->name('produtos.edit');

Route::get('/fornecedor', FornecedorIndex::class)->name('fornecedor.index');
Route::get('/fornecedor/create', FornecedorCreate::class)->name('fornecedor.create');
Route::get('/fornecedor/edit/{id}', FornecedorEdit::class)->name('fornecedor.edit');

Route::get('/movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');