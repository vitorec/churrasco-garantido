<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $data = [
            [
                'email' => 'aaa@aaa.com',
                'password' => '$2y$10$QRx8G9Ykhr5yuPneCxx0aeHhU6BV5MxP7T050a11ZnxlqYmoGVIOu',
                'remember_token' => 'L8dzID2o2zvrHKQHFhVC6zBJfVoh8xiRVE2wTRO4tbAJnKeQajE313mnXkgg',
                'created_at' => 'now()',
                'updated_at' => 'now()'
            ],
        ];

        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
