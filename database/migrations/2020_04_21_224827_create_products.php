<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * migrations são modelos de tabelas
 * metodo up(): criar tabela, metodo down(): deletar tabela
 * comandos:
 * 1 - criar migration - php artisan make:migration
 * 2 - desfazer ultima migration - php artisan migrate:rollback
 * 3 - realizar migração
 *      migrações são rodadas e salvas no banco na tabela migrations
 *      assim o comando para fazer migrações somente cria tabelas que ainda não
 *      existem no banco
 *      php artisan migrate
 * 4 - criar um unico campo em uma tabela existente
 *      php artisan make:migration add_brand_to_products --table=products
*/

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('stock');
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
