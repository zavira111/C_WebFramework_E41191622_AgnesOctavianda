<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer ('id_user');
            $table->string ('email');
            $table->string ('pass');
            $table->string ('nama');
            $table->string ('jenis_kelamin');
            $table->text ('alamat');
            $table->string ('nomor_wa');
            $table->integer ('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
