<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('Name');
            $table->string('Gender');
            $table->string('Address');
            $table->string('Job');
            $table->timestamps();
            $table->primary('id_user');

        });

        Schema::table('vacancies', function($table) {
            $table->foreign('Job_COde')
            ->references('Job_COde')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
