<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'teacher',
                'email'=>'teacher@gmail.com',
                'password'=> bcrypt('123456'),
                'role'=>'teacher',
            ],
            [
                'name'=>'student',
                'email'=>'student@gmail.com',
                'password'=> bcrypt('123456'),
                'role'=>'student',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
