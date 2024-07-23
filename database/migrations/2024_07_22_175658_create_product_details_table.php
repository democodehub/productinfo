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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string("product_code", 50);
            $table->string("product_name", 100);
            $table->integer("length");
            $table->integer("height");
            $table->integer("depth");
            $table->integer("customer_id");
            $table->string("customer_name", 100);
            $table->integer("project_id");
            $table->string("project_name", 100);
            $table->string("address", 250);
            $table->date("production_date");
            $table->date("delivery_date");
            $table->text("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
