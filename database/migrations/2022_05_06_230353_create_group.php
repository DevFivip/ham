<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('icon');
            $table->integer('status');
            $table->timestamps();
        });


        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('status');
            $table->timestamps();
        });


        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('status');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categories');
            $table->string('name');
            $table->string('slug');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('group_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('categoria_id')->nullable()->constrained('categories');
            $table->foreignId('subcategoria_id')->nullable()->constrained('subcategories');
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->foreignId('social_id')->constrained('socials');
            $table->foreignId('group_type_id')->constrained('group_types');
            $table->string('slug')->unique();
            $table->string('url')->unique();
            $table->string('imagen')->nullable();
            $table->string('banner')->nullable();
            $table->integer('views')->nullable();
            $table->integer('show_views')->nullable();
            $table->integer('can_access_any_location')->nullable();
            $table->integer('status')->default(1);
            $table->dateTimeTz('fecha_corte')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
