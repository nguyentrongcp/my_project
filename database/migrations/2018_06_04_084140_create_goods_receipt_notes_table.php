<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsReceiptNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_receipt_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->date('date');
            $table->integer('admin_id')->unsigned();
            $table->string('supplier_name', 100)->nullable();
            $table->integer('supplier_id')->unsigned();
            $table->integer('goods_receipt_note_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('goods_receipt_note_id')->references('id')->on('goods_receipt_notes');
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('good_receipt_notes');
    }
}
