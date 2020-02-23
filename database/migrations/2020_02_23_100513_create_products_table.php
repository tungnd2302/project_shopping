<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->integer('origin_price');//Giá gốc
            $table->integer('sale_price');//Giá bán
            $table->text('description');//Mô tả
            $table->text('supplier');//Nhà cung cấp
            $table->biginteger('view_count')->default(0);//Lượt xem
            $table->bigInteger('quantity')->default(0);//Số lượng
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('category_id');
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
        Schema::dropIfExists('products');
    }
}
