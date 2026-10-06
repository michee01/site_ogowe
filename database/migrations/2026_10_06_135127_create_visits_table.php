<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();

            // Informations sur la visite
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();

            // Page visitée
            $table->string('url')->nullable();
            $table->string('page')->nullable();

            // Provenance du visiteur
            $table->string('referrer')->nullable();
            $table->string('source')->nullable();
            $table->string('medium')->nullable();
            $table->string('campaign')->nullable();

            // Informations techniques
            $table->string('device')->nullable();
            $table->string('browser')->nullable();
            $table->string('platform')->nullable();

            // Localisation, si disponible
            $table->string('country')->nullable();
            $table->string('city')->nullable();

            // Identifiant permettant de regrouper les visites
            $table->string('session_id')->nullable()->index();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};