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
        Schema::create('royalty_splits', function (Blueprint $table) {
            $table->id();
            $table->integer('track_id');
            $table->integer('release_id');
            $table->integer('owner_id');
            $table->string('name');
            $table->string('email');
            $table->integer('share');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('royalty_splits');
    }
};
