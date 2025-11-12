<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(){
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
        $data = [
            [
                'username'      => 'admin',
                'email'         => 'admin@example.com',
                'type'          => 'admin',
                'password_hash' => $password,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'username'      => 'user1',
                'email'         => 'user1@example.com',
                'type'          => 'user',
                'password_hash' => $password,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ];

        $this->db->table('userTable')->insertBatch($data);
    }
}
