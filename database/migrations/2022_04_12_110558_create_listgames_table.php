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
        Schema::create('listgames', function (Blueprint $table) {
            $table->id();
            $table->string('id_provider');
            $table->string('file');
            $table->string('namagame');
            $table->string('jamgacor1');
            $table->string('jamgacor2');
            $table->string('winrate');
            $table->string('minstake');
            $table->string('medstake');
            $table->string('maxstake');
            $table->boolean('onfire');
            $table->boolean('isnew');
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
        Schema::dropIfExists('listgames');
    }
};
