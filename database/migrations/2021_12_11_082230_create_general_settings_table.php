<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('setting_type')->default(1);
            $table->string('setting_name', 200);
            $table->string('field_label', 200);
            $table->string('field_name', 200);
            $table->string('field_type', 200);
            $table->text('field_value')->nullable();
            $table->string('field_options')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
