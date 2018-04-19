<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name',64)->comment('姓名');
        $table->string('email',128)->comment('邮箱');
        $table->string('phone',11)->comment('手机号');
        $table->text('contents')->comment('留言内容');
        $table->tinyInteger('status')->default(0)->comment('留言状态 0未处理');
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
        //
    }
}
