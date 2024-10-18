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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id_projects')->primary();
            $table->string('name_projects');
            $table->string('title_projects');
            $table->string('desc_projects');
            $table->string('poin_a_projects');
            $table->string('poin_b_projects');
            $table->string('poin_c_projects');
            $table->string('image_projects');
            $table->string('created_by');
            $table->string('modified_by');
            $table->timestamps();
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
