<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAstrologerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('astrologer', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('title', 250);
            $table->text('image');
            $table->text('language', 250)->nullable();
            $table->float('price')->nullable();
            $table->text('experience', 250);
            $table->text('description', 250)->nullable();
            $table->time('time')->nullable();
            $table->text('address', 250);
            $table->integer('status')->default(0)->comment('0=Active, 1=InActive');
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
        Schema::dropIfExists('astrologer');
    }
}
