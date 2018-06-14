<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recipient', 50);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('address', 100);
            $table->string('note', 100)->nullable();
            $table->double('total_of_money');
            $table->boolean('is_approved')->default(false);
            $table->string('approver', 50);
            $table->dateTime('order_created_at')->default(date('Y-m-d h:i:s'));
            $table->dateTime('approved_at')->nullable();
            $table->boolean('is_deliveried')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
