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
        Schema::create('packages', function (Blueprint $table) {
        $table->id();
        $table->string('tracking_number')->unique();
        $table->string('sendersname');
        $table->string('sendersemail');
        
        $table->string('recieversname');
        $table->string('recieversemail');
        $table->string('recievers_phone');
        
        $table->string('weight');

        $table->string('pickup_address');
        $table->decimal('pickup_lat', 10, 7);
        $table->decimal('pickup_lng', 10, 7);


        $table->string('dropoff_address');
        $table->decimal('dropoff_lat', 10, 7);
        $table->decimal('dropoff_lng', 10, 7);








        $table->date('date')->nullable(); // Expected delivery date

        $table->string('type_shipment');
        $table->string('product_name');
        $table->string('total_freight');
        $table->date('pickup_date')->nullable(); // Pickup date





        
        
        
        $table->decimal('current_lat', 10, 7)->nullable();
        $table->decimal('current_lng', 10, 7)->nullable();
        $table->string('status')->default('preparing for shipping');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
