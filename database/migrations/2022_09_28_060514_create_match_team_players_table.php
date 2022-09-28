<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_team_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id'); 
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->text('team1_starting')->nullable();
            $table->text('team2_starting')->nullable();
            $table->text('team1_reserve')->nullable();
            $table->text('team2_reserve')->nullable();
            $table->longText('team1_subtitutions')->nullable();
            $table->longText('team2_subtitutions')->nullable();
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
        Schema::dropIfExists('match_team_players');
    }
};
