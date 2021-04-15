<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LowonganJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Job_Code');
            $table->string('Job_Name');
            $table->string('Requirement');
            $table->timestamps();
            $table->primary('Job_COde');
                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
