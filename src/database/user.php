<?php
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('users', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 255);
    $table->string('surname', 255);
    $table->string('username', 255);
    $table->char('password', 40);
    $table->foreignId('created_by');
    $table->foreignId('updated_by');
    $table->timestamps();
    $table->boolean('active');
    $table->unique('username');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8mb4';
    $table->collation = 'utf8mb4_unicode_ci';
});