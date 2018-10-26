<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorsera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('coursera', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('courseType', 20)->nullable();
            $table->string('id', 100)->unique();
            $table->string('slug', 100)->nullable();
            $table->string('name', 15)->nullable();
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
        Schema::dropIfExists('coursera');
    }
}
