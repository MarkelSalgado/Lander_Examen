<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hegaldias', function (Blueprint $table) {
            $table->id(); 
            $table->string('irteera_aireportua');
            $table->string('helmuga_aireportua');
            $table->dateTime('irteera_eguna_ordua');
            $table->string('iraupena');
            $table->string('updated_at');
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
        Schema::dropIfExists('hegaldias');
    }
};
