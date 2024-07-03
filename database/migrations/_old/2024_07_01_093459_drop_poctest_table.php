<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::dropIfExists('poctest');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('poctest', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();

            $table->id();
            $table->string('name')->comment('ユーザー氏名');
            $table->string('email')->comment('ユーザーメール');
            $table->timestamps();
        });
    }
};
