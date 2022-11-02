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
        Schema::create('wagereports', function (Blueprint $table) {
            $table->id("WagereportId");
            $table->String("name");
            $table->String("code");
            $table->String("Manager");
            $table->String("Location");
            $table->String("SiteManager");
            $table->String("ContractNo");
            $table->String("Payroll");
            $table->String("Week");
            $table->date("Start");
            $table->date("End");
            $table->String("Names");
            $table->String("Work");
            $table->String("Mon");
            $table->String("Tue");
            $table->String("Wed");
            $table->String("Thr");
            $table->string("Fri");
            $table->String("Sat");
            $table->String("Sun");
            $table->String("Total");
            $table->String("Rate");
            $table->String("Gross");
            $table->String("Nhif");
            $table->String("Nssf");
            $table->String("Other");
            $table->String("GrandTotal");
            $table->String("Net");
            $table->String("Note");
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
        Schema::dropIfExists('wagereports');
    }
};
