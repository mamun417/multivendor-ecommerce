<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name')->nullable();
            $table->string('name');
            $table->string('nid')->nullable();
            $table->string('trade_licence')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('type')->nullable()->comment('if you need in future add to role');
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
        Schema::dropIfExists('admins');
    }
}
