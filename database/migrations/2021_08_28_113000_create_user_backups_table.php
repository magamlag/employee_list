<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBackupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_backups', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('name');
            $table->unsignedBigInteger('position_id')->nullable(false);
            $table->date('date_employment');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->float('salary');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('user_backups', function($table) {
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_backups');
    }
}
