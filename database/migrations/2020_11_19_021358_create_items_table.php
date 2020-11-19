<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // $table->bigIncrements(); //(欄位名稱) 自動流水號
            // $table->boolean(); //(欄位名稱) 布林值
            // $table->integer(); //(欄位名稱) 整數
            // $table->string(); //(欄位名稱,長度) 長度為xx的字串
            // $table->text(); //(欄位名稱) 長字串
            // $table->date(); //(欄位名稱) 日期
            // $table->timestamp(); //(欄位名稱) 時間戳記
            // $table->datetime(); //(欄位名稱) 日期加時間
            $table->BidInteger('id');
            $table->string(50)('title');
            $table->Integer('price')->default(0)->unsigned;
            $table->Text('desc')->nullable;
            $table->Bool('enabled')->default(true);
            $table->Timestamp('sell-at')->nullable;
            $table->BigInteger('cgy-id');
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
