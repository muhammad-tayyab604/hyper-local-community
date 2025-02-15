<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id'); // This is the foreign key to link content with the main blog
            $table->string('sub_title')->nullable();
            $table->string('sub_image')->nullable();
            $table->text('sub_description')->nullable();
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('blog_id')
                ->references('id')
                ->on('blogs')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_contents');
    }
};