<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateWxUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wx_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('姓名');
            $table->string('phone')->default('')->comment('手机号');
            $table->string('avatar',200)->nullable()->comment("头像");
            $table->integer('add_time')->comment('添加时间');
            /* $table->string('logistics_company')->default('')->comment('物流公司');
            $table->string('car_number')->default('')->comment('车牌号');
            $table->string('heng_car_number')->default('')->comment('挂车号'); */
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement("ALTER TABLE `wx_user` comment '用户列表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wx_user');
    }
}
