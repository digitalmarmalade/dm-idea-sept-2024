<?php

use Illuminate\Database\Seeder;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Admin'
        ]);
        DB::table('modules')->insert([
            'id' => 1,
            'name' => 'News'
        ]);
        
        DB::table('permissions')->insert([
            'id' => 1,
            'module' => 1,
            'name' => 'list'
        ]);
        
        DB::table('permissions')->insert([
            'id' => 2,
            'module' => 1,
            'name' => 'edit'
        ]);
        
        DB::table('permission_roles')->insert([
            'id' => 1,
            'permission' => 1,
            'role' => 1
        ]);
        
        DB::table('permission_roles')->insert([
            'id' => 2,
            'permission' => 2,
            'role' => 1
        ]);
        
        DB::table('user_roles')->insert([
            'id' => 1,
            'user' => 1,
            'role' => 1
        ]);
    }
}
