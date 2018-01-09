<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        $data = [
            ['name' => 'Cerveja', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Carne', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Pão de alho', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Refrigerante', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Guardanapo', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Carvão', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Álcool', 'created_at' => 'now()',  'updated_at' => 'now()'],
            ['name' => 'Churrasqueira', 'created_at' => 'now()',  'updated_at' => 'now()'],
        ];

        DB::table('products')->insert($data);
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
