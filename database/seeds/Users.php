<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tom',
            'email' => 'tom@digitalmarmalade.co.uk',
            'password' => '$2y$10$VQH45v9VqQ3a2H/ANKMcJuyGiLN0cwhMAzCv01mXQx.ITsbtKmB/i',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'sandy',
            'email' => 'sandy@digitalmarmalade.co.uk',
            'password' => '$2y$10$CwjqGD.X8/FolHoZnGb8CuEe4jKiGeqEyvjh5gXE.t0LdUv2WpHKK',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Matthew Sheppard',
            'email' => 'matthew@digitalmarmalade.co.uk',
            'password' => '$2y$10$vCs71Z2f9bguI/Jx8b9/LuMjZh3NEfSAA26HEXYtTzkaCm0Jmqxwa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Andreas',
            'email' => 'andreas@digitalmarmalade.co.uk',
            'password' => '$2y$10$eIoj6X3trK3A.fInsf8tBeDecCNSd94N1FB2LN0UG5F2UQVlZ4dta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Jeremy',
            'email' => 'jeremy@digitalmarmalade.co.uk',
            'password' => '$2y$12$dmjeremyU3WEzjyMWQ5MjuXGloOQIAuy9kvTus0S2onneYjOPc8h2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Andy',
            'email' => 'andy@digitalmarmalade.co.uk',
            'password' => '$2y$12$dmjeremyU3WEzjyMWQ5MjuXGloOQIAuy9kvTus0S2onneYjOPc8h2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Moisis',
            'email' => 'moisis@digitalmarmalade.co.uk',
            'password' => '$2y$10$M8zN3qeXffbtcw52GxcpseWaIvz83FggrdESLNC34fwkORc8uTHte',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Dean',
            'email' => 'dean@digitalmarmalade.co.uk',
            'password' => '$2y$12$dmdeanU3WEzjyMWQ5Mjyze0wR6H8CLZWpIpVnlGTKrFKrlK3u.2ya',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'David',
            'email' => 'david@digitalmarmalade.co.uk',
            'password' => '$2y$12$dmdaveU3WEzjyMWQ5MjyzeY0RbeBwhFSAvelK7u4Fkm9dx7Cik4pG',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Marcus',
            'email' => 'marcus@digitalmarmalade.co.uk',
            'password' => '$2y$12$dmmarcusU3WEzjyMWQ5MjulNK.uwtDTabUa30yCAMDdcRmDXk1LrS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
