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
        DB::table('pcontracts')->insert([
            ['user_id' => '1', 'status' => '契約中'],
            ['user_id' => '3', 'status' => '未契約'],
            ['user_id' => '4', 'status' => '契約終了'],
        ]);
    }

};
