<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->string('user')->unique();
            $table->string('gender',1);
            $table->string('address')->nullable();
            $table->string('curp',20)->unique()->nullable();
            $table->string('phone_number',20)->nullable();
            $table->string('blood_type',10)->nullable();
            $table->string('nia',50)->nullable();
            $table->string('elementary_schoo_attended',2)->nullable();
            $table->string('elementary_school_grades',2)->nullable();
            $table->string('allergies')->nullable();
            $table->date('date_birth')->nullable();

            $table->string('grade')->nullable();
            $table->string('group')->nullable();
            $table->string('email')->unique();
            $table->string('status',2);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('type_user',2);

            $table->string('name_tutor',20)->nullable();
            $table->string('first_surname_tutor')->nullable();
            $table->string('second_surname_tutor')->nullable();
            $table->string('address_tutor')->nullable();
            $table->string('phone_number_1_tutor',15)->nullable();
            $table->string('phone_number_2_tutor',15)->nullable();
            $table->string('email_tutor',15)->nullable();

            $table->string('academic_degree')->nullable();
            $table->string('professional_license')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}