<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('accounting')){
            Schema::create('accounting', function (Blueprint $table) {
                $table->id();
                $table->integer('club_id')->unsigned();
                $table->date('term');
                $table->integer('monthly_fee');
                $table->integer('space_cost');
                $table->integer('fixture_cost');
                $table->integer('insurance_cost');
                $table->integer('subsidy');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounting');
    }
};
