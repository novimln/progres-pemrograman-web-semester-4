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
        Schema::create('kasirs', function (Blueprint $table) {
          //  $table->id();
            $table->char('idkasirs',7);
            $table->string('namabarang',100);
            $table->enum('transaksi',['offline','online']);
            $table->string('address',100);
            $table->string('emailaddres',100);
            $table->char('notlpn',20);
            $table->primary('idkasirs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs');
    }
};
