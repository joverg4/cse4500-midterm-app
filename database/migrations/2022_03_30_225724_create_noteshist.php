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
        Schema::create('noteshist', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('equipment_id')->constrained('equipmentinfo')->onDelete('cascade');
            $table->string('services');
            $table->string('software');
            $table->string('updates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noteshist');
    }
};
