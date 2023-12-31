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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('user_name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            //어떤 유저의 아이디냐
            $table->foreignId('article_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            //어떤 게시글의 아이디냐
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
