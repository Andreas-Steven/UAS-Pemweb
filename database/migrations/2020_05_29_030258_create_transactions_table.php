<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // https://stackoverflow.com/questions/26437342/laravel-migration-best-way-to-add-foreign-key  https://stackoverflow.com/questions/47728909/laravel-migration-errno-150-foreign-key-constraint-is-incorrectly-formed

    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('UserID');
            $table->unsignedInteger('ProductID');
            $table->integer('PurchaseAmount')->unsigned();
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ProductID')->references('ID')->on('products')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('transactions', function(Blueprint $table)
        {
            $table->dropForeign('transactions_UserID_foreign');
            $table->dropIndex('transactions_UserID_index');
            $table->dropColumn('UserID');

            $table->dropForeign('transactions_ProductID_foreign');
            $table->dropIndex('transactions_ProductID_index');
            $table->dropColumn('ProductID');
            $table->dropSoftDeletes();
        });
    }
}
