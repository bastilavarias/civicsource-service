<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('property_id')
                ->nullable()
                ->constrained();
            $table->integer('outbid_count');
            $table->decimal('outbid_total_value');
            $table->integer('active_count');
            $table->decimal('active_total_value');
            $table->integer('winning_count');
            $table->decimal('winning_total_value');
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
        Schema::dropIfExists('bids');
    }
}
