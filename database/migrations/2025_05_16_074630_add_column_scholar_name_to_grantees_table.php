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
        Schema::table('grantees', function (Blueprint $table) {
            if (Schema::hasColumn('grantees', 'scholar_name')) {
                $table->dropColumn('scholar_name');
            }
            $table->string('scholar_name')->after('lname');
            $table->foreign('scholar_name')->references('s_name')->on('scholars')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grantees', function (Blueprint $table) {
            $table->dropForeign(['scholar_name']);
            $table->dropColumn('scholar_name');
        });
    }
};
