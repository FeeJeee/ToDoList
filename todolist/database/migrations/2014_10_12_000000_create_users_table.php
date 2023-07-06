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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


        });

        DB::table('users')->insert(
            array(
                [
                'name' => 'User1',
                'email' => 'user1@test.com',
                'password' => Hash::make('11111111'),
                ],
                [
                    'name' => 'User2',
                    'email' => 'user2@test.com',
                    'password' => Hash::make('22222222'),
                ],
                [
                    'name' => 'User3',
                    'email' => 'user3@test.com',
                    'password' => Hash::make('33333333'),
                ],

            )
        );
    }






    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
