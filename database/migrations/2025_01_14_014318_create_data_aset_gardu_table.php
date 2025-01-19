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
        Schema::create('data_aset_gardu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ulp');
            $table->integer('id_transpower');
            $table->integer('phase');
            $table->string('location');
            $table->string('penyulang');
            $table->string('keypoint');
            $table->string('section');
            $table->string('segment');
            $table->decimal('latitude',10,8);
            $table->decimal('longitude',11,8);
            $table->string('spec_fabrication');
            $table->integer('spec_transtap')->nullable();
            $table->integer('spec_voltage')->nullable();
            $table->integer('spec_current')->nullable();
            $table->integer('spec_year')->nullable();
            $table->string('spec_wiring')->nullable();
            $table->string('spec_mineraloil')->nullable();
            $table->string('spec_cooling_type')->nullable();   
            $table->integer('spec_oilweight')->nullable();   
            $table->integer('spec_transweight')->nullable();
            $table->integer('test_earth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aset_gardu');
    }
};
