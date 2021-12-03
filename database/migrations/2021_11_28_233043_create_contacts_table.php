<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',255)->comment('お名前');
            $table->tinyInteger('gender')->comment('性別：１：男性２：女性');
            $table->string('email',255)->comment('メールアドレス');
            $table->string('postcode',8)->comment('郵便番号');
            $table->string('address',255)->comment('住所');
            $table->string('building_name',255)->nullable()->comment('建物名');
            $table->text('opinion')->comment('ご意見');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
