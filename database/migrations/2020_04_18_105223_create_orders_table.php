<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            
            $table->integer('user_id')->unsigned();
            
            $table->decimal('estimated_minutes', 10, 2);
            $table->decimal('estimated_kms', 10, 2);
            $table->decimal('estimated_price', 10, 2);
            
            $table->integer('waypoints_count')->unsigned();
            $table->integer('waypoints_completed')->unsigned();
            
            $table->integer('driver_id')->unsigned();
            $table->decimal('driver_rating', 10, 2);

            $table->integer('status_id')->unsigned();

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
