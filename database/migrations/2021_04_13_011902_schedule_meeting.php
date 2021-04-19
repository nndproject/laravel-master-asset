<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScheduleMeeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_meeting', function (Blueprint $table) {
            $table->id();
            $table->string('type_instansi')->nullable();
            $table->string('instansi');
            $table->string('cp',50);
            $table->string('phone',20)->nullable();
            $table->enum('category', ['online', 'offline'])->default('online');
            $table->dateTime('schedule',0);
            $table->string('location')->nullable();
            $table->smallInteger('audient');
            $table->longText('description');
            $table->enum('status', ['Waiting','Approved', 'Decline', 'Finished'])->default('Waiting');
            $table->timestamps();
            $table->string('post_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_meeting');
    }
}
