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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('project_category_id')->nullable();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->longText('description')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('floor_plan_img')->nullable();
            $table->string('property_details_pdf')->nullable();
            $table->string('floor_plan_details_pdf')->nullable();
            $table->string('company_profile_pdf')->nullable();
            $table->string('property_video')->nullable();
            $table->string('time_period')->nullable();
            $table->string('downpayment')->nullable();
            $table->string('duration')->nullable();
            $table->string('start_from')->nullable();
            $table->string('end_time')->nullable();
            $table->string('price')->nullable();
            $table->string('number_of_bed')->nullable();
            $table->string('number_of_bath')->nullable();
            $table->string('garage')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('state_country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('area')->nullable();
            $table->string('country')->nullable();
            $table->string('property_id')->nullable();
            $table->string('property_size')->nullable();
            $table->string('year_built')->nullable();
            $table->string('status')->nullable();
            $table->string('air_conditioning')->nullable();
            $table->string('heater')->nullable();
            $table->string('lawndry_room')->nullable();
            $table->string('lawn')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('dining_room')->nullable();
            $table->timestamps();

            $table->foreign('agent_id')->references('id')->on('agents')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};