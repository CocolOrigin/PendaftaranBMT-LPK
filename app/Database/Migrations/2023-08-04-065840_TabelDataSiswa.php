<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataSiswaTable extends Migration
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
            'nik' => [
                'type' => 'BIGINT',
                'constraint' => 20,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['L', 'P'],
                'default' => 'L',
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'telp' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tg_lahir' => [
                'type' => 'DATE',
            ],
            'alamat_dsn' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat_kec' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat_kab' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pend_terakhir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'lulus_tahun' => [
                'type' => 'YEAR',
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tinggi_badan' => [
                'type' => 'INT',
            ],
            'berat_badan' => [
                'type' => 'INT',
            ],
            'gol_darah' => [
                'type' => 'varchar',
                'constraint' => 5,
            ],
            'tgl_daftar' => [
                'type' => 'DATE',
            ],
            'thn_daftar' => [
                'type' => 'INT',
                'constraint' => 4,
            ],
        ]);

        $this->forge->addPrimaryKey('id'); // Set "nid" as the primary key
        $this->forge->createTable('datasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('datasiswa');
    }
}
