<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); $table->string('name'); $table->string('email')->unique();
            $table->string('phone'); $table->string('address');
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id(); $table->string('name'); $table->string('username')->unique();
            $table->string('email')->unique(); $table->string('role');
        });
    }
    public function down(): void {
        Schema::dropIfExists('users'); Schema::dropIfExists('customers');
    }
};
