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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->sting('nome');
            $table->text('descricao');
            $table->double('preco',10,2);
            $table->string('slug');
            $table->string('image');
            $table->timestamps();
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')
            ->on('categories')->onDelete('cascade')->onUpdate('cascade'); 
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')
            ->on('users')->onDelete('cascade')->onUpdate('cascade'); 
        });
           
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
