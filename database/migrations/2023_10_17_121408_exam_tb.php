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
        //
                //
                Schema::create('examtb', function (Blueprint $table) {
                    $table->id();
                    $table->integer('number');
                    $table->date('exam_date');
                    $table->foreigidfor(users::class);
                    $table->float('degree', 2, 2);
                    $table->bool('status');

                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
