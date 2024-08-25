<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add columns if they do not already exist
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('users', 'fk_department')) {
                $table->foreignId('fk_department')->constrained('departments');
            }
            if (!Schema::hasColumn('users', 'fk_designation')) {
                $table->foreignId('fk_designation')->constrained('designations');
            }
            if (!Schema::hasColumn('users', 'phone_number')) {
                $table->string('phone_number');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop columns if needed
            $table->dropColumn('name');
            $table->dropForeign(['fk_department']);
            $table->dropColumn('fk_department');
            $table->dropForeign(['fk_designation']);
            $table->dropColumn('fk_designation');
            $table->dropColumn('phone_number');
        });
    }
};
