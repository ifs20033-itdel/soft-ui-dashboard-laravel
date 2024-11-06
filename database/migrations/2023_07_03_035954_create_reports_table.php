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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tra");
            $table->string("trb");
            $table->string("traa");
            $table->string("trba");
            $table->integer("sum");
            $table->string("status");
            $table->string("trab");
            $table->string("trbb");
            $table->string("sum2");
            $table->string("status2");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
