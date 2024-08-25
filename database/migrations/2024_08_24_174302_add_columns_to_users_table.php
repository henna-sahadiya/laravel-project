<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Column for user name
            $table->foreignId('fk_department'); // Foreign key to departments table
            $table->foreignId('fk_designation'); // Foreign key to designations table
            $table->string('phone_number'); // Column for phone number
            $table->timestamps(); // Includes created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
