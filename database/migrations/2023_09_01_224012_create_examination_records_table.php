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
        Schema::connection('form_builder_mysql')->create('formable_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formable_id');
            $table->unsignedBigInteger('field_id')->nullable();
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
        Schema::connection('form_builder_mysql')->dropIfExists('formable_records');
    }
};
