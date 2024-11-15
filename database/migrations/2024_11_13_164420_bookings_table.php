<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('provider_id')->constrained()->onDelete('cascade');
            $table->datetime('date_time');
            $table->double('latitude', 10, 8);
            $table->double('longitude', 11, 8);
            $table->string('address');
            $table->string('status')->default('pending'); // Add status column with default value
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
