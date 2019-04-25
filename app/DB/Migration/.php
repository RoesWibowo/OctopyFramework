<?php

/**
 *   ___       _
 *  / _ \  ___| |_ ___  _ __  _   _
 * | | | |/ __| __/ _ \| '_ \| | | |
 * | |_| | (__| || (_) | |_) | |_| |
 *  \___/ \___|\__\___/| .__/ \__, |
 *                     |_|    |___/.
 * @author  : Supian M <supianidz@gmail.com>
 * @link    : www.octopy.xyz
 * @license : MIT
 */

namespace App\DB\Migration;

use Octopy\Database\Migration;
use Octopy\Support\Facade\Schema;
use Octopy\Database\Migration\BluePrint;

class  extends Migration
{
    /**
     * @var int
     */
    public static $timestamp = 1556158701;

    /**
     * @return void
     */
    public function create()
    {
        Schema::create('', function (BluePrint $table) {
            $table->increment('id');
        });
    }

    /**
     * @return void
     */
    public function drop()
    {
        Schema::drop('');
    }
}
