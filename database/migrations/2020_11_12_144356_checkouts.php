<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Checkouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ref_user_id');
            $table->unsignedBigInteger('ref_book_id');
            $table->integer('status')->default(1);
            $table->timestamps();

            $table->foreign('ref_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('ref_book_id')
                ->references('id')
                ->on('books')
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
        Schema::dropIfExists('checkouts');
    }
}
