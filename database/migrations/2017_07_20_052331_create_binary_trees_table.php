<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateBinaryTreesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binary_trees', function (Blueprint $table) {
            // These columns are needed for Baum's Nested Set implementation to work.
            // Column names may be changed, but they *must* all exist and be modified
            // in the model.
            // Take a look at the model scaffold comments for details.
            // We add indexes on parent_id, lft, rgt columns by default.
            $table->increments('id');
            //$table->unsignedBigInteger('parent_id')->nullable();
            /*$table->integer('lft')->nullable()->index();
            $table->integer('rgt')->nullable()->index();
            $table->integer('depth')->nullable();
            $table->string('status')->nullable();*/
            NestedSet::columns($table);

            // Add needed columns here (f.ex: name, slug, path, etc.)
            // $table->string('name', 255);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('volume_lft')->default(0);
            $table->integer('volume_rgt')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('parent_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('binary_trees');
    }

}
