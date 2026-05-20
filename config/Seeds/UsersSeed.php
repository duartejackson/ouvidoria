<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;

class UsersSeed extends AbstractSeed
{
    public function run(): void
    {
        $hasher = new DefaultPasswordHasher();
        $data = [
            [
                'email'    => 'admin@admin.com',
                'password' => $hasher->hash('admin'),
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
