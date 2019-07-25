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
            $table->bigIncrements('id');
            $table->string('ten');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img');
            $table->tinyInteger('muctieu_id');
            $table->tinyInteger('gioitinh_id');
            $table->tinyInteger('honnhan_id');
            $table->tinyInteger('hocvan_id');
            $table->integer('tuoi');
            $table->integer('chieucao');
            $table->integer('cannang');
            $table->integer('diachi_id');
            $table->text('toila');
            $table->text('timnguoi');
            $table->integer('luotxem')->default(0);
            $table->string('slug');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
