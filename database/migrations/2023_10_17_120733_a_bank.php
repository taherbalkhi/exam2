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
                Schema::create('ABank', function (Blueprint $table) {
                    $table->id();
                    $table->string('aunser');
                    $table->bool('status',);
                    $table->foreigidfor(QBank::class);

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
