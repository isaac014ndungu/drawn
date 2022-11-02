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
        Schema::create('paymentforms', function (Blueprint $table) {
            $table->id();
            $table->String("Employer");
            $table->String("Person");
            $table->String("Project");
            $table->String("Number");
            $table->String("Period");
            $table->String("Work");
            $table->String("Contract");
            $table->String("Prepared");
            $table->String("OrigiAmount");
            $table->String("NetChange");
            $table->String("TotalComplete");
            $table->String("Retain");
            $table->String("Retainage");
            $table->String("Previours");
            $table->String("Dues");
            $table->String("Balance");
            $table->String("Contractor");
            $table->String("Date");
            $table->String("County");
            $table->String("Location");
            $table->String("Day");
            $table->String("Month");
            $table->String("Expire");
            $table->String("Public");
            $table->String("AmountCert");
            $table->String("Engineer");
            $table->String("DDay");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymentforms');
    }
};
