<?php

use App\Models\Jurusan;
use App\Models\Kelas;
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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nis');
            $table->string('image');
            $table->string('password');
            $table->string('status')->default('active');
            $table->string('tanggal-lahir')->nullable();
            $table->smallInteger('no_telp')->nullable();
            $table->integer('score')->default(100);
            $table->foreignIdFor(Jurusan::class);
            $table->foreignIdFor(Kelas::class);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
