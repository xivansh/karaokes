<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => 'Karaoke - Membuat'],
            ['name' => 'Karaoke - Edit'],
            ['name' => 'Karaoke - Hapus'],
            ['name' => 'Ekspedisi - Melihat']
        ];

        foreach($permissions as $permission) {
            $item = Permission::where('name', $permission['name'])->first();
            if(!$item) {$item = New Permission;}

            $item->name = $permission['name'];
            $item->save();
        }

        $roles = [
            ['name' => 'Admin'],
            ['name' => 'User']
        ];

        foreach($roles as $role) {
            $item = Role::where('name', $role['name'])->first();
            if(!$item) {$item = New Role;}

            $item->name = $role['name'];
            $item->save();

            if($item->name == 'Admin' | $item->name == 'User'){
                $item->syncPermissions(Permission::all());
            }
            if($item->name == 'User') {
                $item->revokePermissionTo(['Karaoke - Membuat','Karaoke - Edit', 'Karaoke - Hapus', 'Ekspedisi - Melihat']);
            }
            
        }

        $users = [
            [
                'name' => 'Luxodev',
                'email' => 'dev@luxodev.com',
                'password' => 'lux0dev'
            ],
            [
                'name' => 'Coba',
                'email'=> 'coba@luxodev.com',
                'password' => 'lux0dev'
            ]
        ];

        foreach ($users as $user) {
            $us = User::firstOrCreate(  ['email' =>  $user['email']],
            ['name' => $user['name'], 'password' => bcrypt($user['password'])]);
            
            if($us->name == 'Admin' | $us->name == 'Luxodev') {
         // if(User::all()) {
             $us->assignRole('Admin');
            }
            if($us->name == 'Coba') {
                   $us->assignRole('User');
            };
        }     
    }

}
