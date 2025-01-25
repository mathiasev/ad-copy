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
        Schema::create('Channels', function (Blueprint $table) {
            $table->id();

            $table->string('slug');
            $table->string('name');
            $table->string('description')->nullable();

            $table->json('settings')->nullable()->default(
                json_encode([
                    'fields' => [
                        [
                            'name' => 'Headline',
                            'type' => 'text',
                            'length' => 255,
                            'min_count' => 1,
                            'max_count' => 1,
                            'required' => true,
                        ],
                        [
                            'name' => 'Description',
                            'type' => 'textarea',
                            'length' => 255,
                            'min_count' => 1,
                            'max_count' => 1,
                            'required' => true,
                        ],
                    ]
                ])
            );

            $table->foreignIdFor(User::class, 'created_by_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Channels');
    }
};
