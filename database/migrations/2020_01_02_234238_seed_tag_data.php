<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SeedTagData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tags = [
            [
                'name'        => 'Eloquent',
                'description' => '',
            ],
            [
                'name'        => 'Migration',
                'description' => '',
            ],
            [
                'name'        => 'Artisan',
                'description' => '',
            ],
            [
                'name'        => 'Queue',
                'description' => '',
            ],
            [
                'name'        => 'ORM',
                'description' => '',
            ],
        ];
        DB::table('tags')->insert($tags);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tags')->truncate();
    }
}
