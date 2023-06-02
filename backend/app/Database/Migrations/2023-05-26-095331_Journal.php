<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Journal extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
