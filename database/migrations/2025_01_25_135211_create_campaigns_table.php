<?php

use App\Models\Client;
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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('description')->nullable();
            $table->enum('status', ['draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected'])->default('draft');

            $table->foreignIdFor(Client::class, 'client_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(User::class, 'created_by_id')->constrained()->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
