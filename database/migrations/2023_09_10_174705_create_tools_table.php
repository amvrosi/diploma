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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->double('price_per_day');
            $table->integer('availability');
            $table->string('image');
            $table->timestamps();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'tool_category_idx');
            $table->foreign('category_id','tool_category_fk')->on('categories')->references('id');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
