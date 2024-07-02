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
        Schema::dropIfExists('poctest01');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('poctest01', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();
            $table->id();
            $table->string('username')->comment('ユーザーネーム');
            $table->string('email')->comment('メールアドレス');
            $table->timestamps();
        });
        
    }
};
