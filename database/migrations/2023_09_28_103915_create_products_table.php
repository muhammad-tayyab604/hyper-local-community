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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('area')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('property_details_pdf')->nullable();
            $table->string('floor_plan_details_pdf')->nullable();
            $table->string('company_profile_pdf')->nullable();
            $table->string('property_video')->nullable();
            $table->string('property_size')->nullable();
            $table->string('status')->nullable();
            $table->string('year_build')->nullable();
            $table->string('property_id')->nullable();
            $table->string('number_of_bed')->nullable();
            $table->string('garadge')->nullable();
            $table->string('number_of_bath')->nullable();
            $table->string('square_feet')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->string('floor_plan_img')->nullable();
            $table->string('air_conditioning')->nullable();
            $table->string('heater')->nullable();
            $table->string('lawndry_room')->nullable();
            $table->string('lawn')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('dining_room')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
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