<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class CreateTable extends Controller
{
    public function table() {
        if(!schema::hasTable('Productsl')) {
            Schema::create('Productsl', function($table) {
                $table ->increments('id');
                $table -> string('name');
                $table -> string('image');
                $table -> string('description');
                $table -> date('date');
                $table -> timestamps();
            });
        }
    }

}
