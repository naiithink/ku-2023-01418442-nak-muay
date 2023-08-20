<?php

use App\Models\User;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->date('updated_at');
            $table->text('event_name');
            $table->double('fund');
            $table->string('currency')->default('THB')->comment('CurrencyEnum');
            $table->text('description');
            $table->datetime('date');
            $table->string('status')->default('PENDING')->comment('EventStatusEnum');
            $table->integer('attendee_capacity');
            $table->text('disapproval_reasons')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
