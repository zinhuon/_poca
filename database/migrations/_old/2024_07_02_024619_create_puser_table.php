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
        Schema::create('puser', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('氏名');
            $table->timestamps();
        });
        Schema::create('pcontracts', function (Blueprint $table) {
            $table->string('user_id')->comment('ユーザーID');
            $table->string('status')->comment('ステータス');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puser');
        Schema::dropIfExists('pcontracts');
    }
};
