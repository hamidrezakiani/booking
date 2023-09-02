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
        Schema::connection('form_builder_mysql')->create('form_group_field_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_group_field_id')->nullable();
            $table->foreign('form_group_field_id')->references('id')->on('form_group_fields')->nullOnDelete();
            $table->string('value');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('form_builder_mysql')->dropIfExists('form_group_field_options');
    }
};
