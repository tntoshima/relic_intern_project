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
        if(!Schema::hasTable('affiliation')){
            Schema::create('affiliation', function (Blueprint $table) {
                $table->id();
                $table->int('club_id')->unsigned();
                $table->int('member_id')->unsigned();
                $table->text('role');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliation');
    }
};
