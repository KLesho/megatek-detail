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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('name');
            $table->string('codeName');
            $table->string('structureMaterial');
            $table->string('clothMaterial');
            $table->string('color');
            $table->string('spongeQuality');
            $table->string('resitance');
            $table->string('pillowsIncluded');
            $table->boolean('isAssemblyNeeded');
            $table->integer('leftSide');
            $table->string('size');
            $table->string('description');
            $table->decimal('price');
            $table->string('qrCode');
            $table->longtext('image');

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
        Schema::dropIfExists('details');
    }
};
