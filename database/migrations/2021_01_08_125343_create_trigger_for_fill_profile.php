<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerForFillProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
                CREATE TRIGGER tr_after_user_create AFTER INSERT ON `users` FOR EACH ROW
                    BEGIN
                        INSERT INTO `profiles`(`user_id`, `bio`, `avatar`, `link`,`created_at`) VALUES (NEW.id, null, null,null,NOW());
                    END
                ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_for_fill_profile');
    }
}
