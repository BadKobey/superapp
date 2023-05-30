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
        Schema::create('armteck_products', function (Blueprint $table) {
            $table->id();
            $table->string('vkorg');
            $table->string('kunn_rg');
            $table->string('pin');
            $table->string('brand');
            $table->string('query_type');
            $table->string('kunnr_za');
            $table->string('incoterms');
            $table->string('vbeln');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
