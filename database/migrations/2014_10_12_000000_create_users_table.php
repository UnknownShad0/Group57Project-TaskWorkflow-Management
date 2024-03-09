<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('usertype')->default('user');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'),
            'usertype' => 'admin',
            // Add other columns and values as needed
        ]);


        DB::table('users')->insert([
            'id' => '2',
            'name' => 'User1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('password'),
            'usertype' => 'user',
            // Add other columns and values as needed
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'client1',
            'email' => 'client1@gmail.com',
            'password' => Hash::make('password'),
            'usertype' => 'client',
            // Add other columns and values as needed
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
