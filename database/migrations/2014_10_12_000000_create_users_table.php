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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Second_name');
            $table->string('Address');
            $table->string('Category');
            $table->string('Phone');
            
            $table->string('IQGrade');
            $table->string('IQFlag');

            $table->string('EnglishGrade');
            $table->string('EnglishFlag');

            $table->string('TechnicalGrade');
            $table->string('TechnicalFlag');

            

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
