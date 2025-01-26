<?php

use App\Models\CopyGroup;
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
        Schema::create('copy_variations', function (Blueprint $table) {
            $table->id();

            $table->json('data')->nullable();

            $table->enum('status', ['draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected'])->default('draft');

            // Copy Group
            $table->foreignIdFor(CopyGroup::class, 'copy_group_id')->constrained()->onDelete('cascade');

            // Created By
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
        Schema::dropIfExists('copy_variations');
    }
};
