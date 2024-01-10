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
        Schema::table('users_credentials', function (Blueprint $table) {
            $table -> string('password') -> after('complete_address') -> nullable();
            $table -> string('email_address') -> after('phone_number') -> nullable();
            $table -> string('remember_token') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_credentials', function (Blueprint $table) {
            //
        });
    }
};
