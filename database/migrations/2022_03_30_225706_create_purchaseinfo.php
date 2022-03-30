<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseinfo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('invoice_num');
            $table->string('price');
            $table->string('purchase_date');
            $table->foreignId('equipment_id')->constrained("equipmentinfo");
            $table->foreignId('customer_id')->constrained("customers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchaseinfo');
    }
};