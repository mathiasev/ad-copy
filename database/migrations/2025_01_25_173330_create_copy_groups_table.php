<?php

use App\Models\Campaign;
use App\Models\Channel;
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
        Schema::create('copy_groups', function (Blueprint $table) {
            $table->id();

            $table->enum('status', ['draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected'])->default('draft');

            // Campaign
            $table->foreignIdFor(Campaign::class, 'campaign_id')->constrained()->onDelete('cascade');

            //Channel
            $table->foreignIdFor(Channel::class, 'channel_id')->constrained()->onDelete('restrict');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copy_groups');
    }
};
