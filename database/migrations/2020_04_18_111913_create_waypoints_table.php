<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaypointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waypoints', function (Blueprint $table) {
            $table->id();

            $table->integer('order_id')->unsigned();
            $table->integer('recipient_id')->unsigned();

            $table->text('parcel_description');

            $table->varchar('pickup_latlong', 300);
            $table->varchar('pickup_address', 300);
            $table->varchar('dropoff_latlong', 300);
            $table->varchar('dropoff_address', 300);

            $table->integer('status_id')->unsigned();

            $table->decimal('estimated_minutes', 10, 2);
            $table->decimal('estimated_kms', 10, 2);
            $table->decimal('estimated_price', 10, 2);

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
        Schema::dropIfExists('waypoints');
    }
}
