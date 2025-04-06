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
        Schema::create('daily_todos', function (Blueprint $table) {
            $table->id("daily_todo_id");
            $table->string("task");
            $table->time("start"); // dari string jadi time
            $table->time("end");   // dari string jadi time
            $table->boolean("status")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_todos');
    }
};
