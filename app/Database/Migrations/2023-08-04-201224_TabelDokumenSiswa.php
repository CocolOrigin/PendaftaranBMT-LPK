<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelDokumenSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nid' => [
                'type' => 'BIGINT',
                'constraint' => 20,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'nama_dokumen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'file_dokumen' => [
                'type' => 'LONGBLOB',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('dokumensiswa');
    }

    public function down()
    {
        $this->forge->dropTable('dokumensiswa');
    }
}
