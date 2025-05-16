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
            if (Schema::hasColumn('grantees', 'description')) {
                $table->dropColumn('description');
            }
            $table->mediumText('description')->after('scholar_name'); // No foreign key
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grantees', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

};
