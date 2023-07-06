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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamps();
            $table->string('name');
        });

        DB::table('tasks')->insert(
            array(
                [
                    'name' => 'Task1',
                    'user_id' => '1',
                ],
                [
                    'name' => 'Task2',
                    'user_id' => '1',
                ],
                [
                    'name' => 'Task3',
                    'user_id' => '1',
                ],
                [
                    'name' => 'Task1',
                    'user_id' => '2',
                ],
                [
                    'name' => 'Task2',
                    'user_id' => '2',
                ],
                [
                    'name' => 'Task3',
                    'user_id' => '2',
                ],
                [
                    'name' => 'Task1',
                    'user_id' => '3',
                ],
                [
                    'name' => 'Task2',
                    'user_id' => '3',
                ],
                [
                    'name' => 'Task3',
                    'user_id' => '3',
                ],

            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
