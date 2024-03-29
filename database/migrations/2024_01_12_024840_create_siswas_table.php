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
            $table->integer('nis');
            $table->string('image')->nullable();
            $table->string('status')->default('active')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->integer('barcode_code');
            $table->string('gender');
            $table->integer('no_telp')->nullable();
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
