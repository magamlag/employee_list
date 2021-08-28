<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id('id'); //you save this id in other tables
            $table->string('title');
            $table->string('src');
            $table->string('mime_type')->nullable();
            $table->string('alt')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE photos ENGINE = InnoDB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
