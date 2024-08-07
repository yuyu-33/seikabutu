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
        Schema::create('workplaces', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('weekday_wage');
            $table->integer('weekend_wage');
            $table->integer('other_wage');
            $table->integer('extra_wage');
            $table->string('deadline', 10);
            $table->string('payday', 10);
            $table->integer('transportation_expense');
            $table->integer('wage_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workplaces');
    }
};
