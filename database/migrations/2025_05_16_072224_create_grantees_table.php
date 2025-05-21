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
        Schema::create('grantees', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('scholar_name');
            $table->string('grants');
            $table->mediumtext('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grantees');
    }
};
