<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveinquieryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saveinquiery', function (Blueprint $table) {
            $table->id();
            $table->string('name',250);
            $table->string('email',250)->unique();
            $table->string('mobile',50);
            $table->text('subject',250);
            $table->text('message',250);
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
        Schema::dropIfExists('saveinquiery');
    }
}
