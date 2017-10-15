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
            $table->bigIncrements('id');

            // Columns needed for math model
            NestedSet::columns($table);

            // Add needed columns here (f.ex: name, slug, path, etc.)
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->tinyInteger('side')->default(0);
            $table->string('status')->default('active');
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
