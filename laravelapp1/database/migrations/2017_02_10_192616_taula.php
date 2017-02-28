<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Nombre de las tablas
//Tables: productes, categories, comandes
use App\Producto;
use App\Categoria;
use App\ProductoCategoria;
use App\Pedido;
use App\PedidosProdCat;

class Taula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	//Crear Tablas
        Schema::create('productos', function(Blueprint $table) {
            $table->increments("id");
            $table->string("nom");
            $table->string("categoria"); // + 1??
            $table->float("preu");
            $table->timestamps();
        });
        Schema::create('categorias', function(Blueprint $table) {
            $table->increments("id");
            $table->string("nom");
            $table->string("producto"); // + 1??
            $table->timestamps();
        });
        Schema::create('pedidos', function(Blueprint $table) {
            $table->increments("id");
            $table->timestamps();
        });
        Schema::create('productoCategorias', function(Blueprint $table) { 
        //Tabla intermedia por la relacio N-N de categoria y producto
            $table->increments("id_productoCategorias");
            $table->integer("id_categorias")->unsigned();
            $table->integer("id_productos")->unsigned();
        });
        Schema::create('pedidosProdCats', function(Blueprint $table) { 
        //Tabla intermedia por la relacio N-N de categoria y producto
            $table->increments("id_pedidosProdCats");
            $table->integer("id_productoCategorias")->unsigned();
            $table->integer("id_categorias")->unsigned();
            $table->integer("id_productos")->unsigned();
            $table->integer("id_pedidos")->unsigned();
        });

        //Crear FOREIGN KEY
        Schema::table('productoCategorias',function(Blueprint $table) {
            $table->foreign("id_categorias")->references('id')->on('categorias')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('productoCategorias',function(Blueprint $table) {
            $table->foreign("id_productos")->references('id')->on('productos')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('pedidosProdCats',function(Blueprint $table) {
            $table->foreign("id_productos")->references('id')->on('productos')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('pedidosProdCats',function(Blueprint $table) {
            $table->foreign("id_pedidos")->references('id')->on('pedidos')
                    ->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("productos");
        Schema::drop("categorias");
        Schema::drop("productoCategorias");
        Schema::drop("pedidos");
        Schema::drop("pedidosProdCats");
    }
}
