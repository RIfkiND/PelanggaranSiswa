<?php

use App\Models\Category;
use App\Models\Pelanggaran;
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
        Schema::create('kejadians', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Waktu')->default(now());
            $table->foreignIdFor(Pelanggaran::class);
            $table->foreignIdFor(Category::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kejadians');
    }
};
