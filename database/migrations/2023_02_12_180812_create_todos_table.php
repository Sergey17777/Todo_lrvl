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
        Schema::create('todos',static function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->default('Новая задача');
            $table->string('description', 250)->default('Описание задачи…');
            $table->datetime('created_at')->default('2021-01-17 19:19:47');
            $table->datetime('updated_at')->default('2021-01-17 19:19:47');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
