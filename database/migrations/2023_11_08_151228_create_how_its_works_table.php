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
        Schema::create('how_its_works', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('title');
            $table->longText('description')->nullable();
            $table->integer('image')->nullable();
            $table->tinyInteger('status')->default(ACTIVE);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('how_its_works');
    }
};
