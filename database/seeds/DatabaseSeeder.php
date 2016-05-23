<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('RolesTableSeeder');
        $this->call('UserTableSeeder');
    }
}
class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert([
                ['title'=>'admin'],
                ['title'=>'editor'],
                ['title'=>'user']
        ]);
    }
}
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_admin = Role::where('title','admin')->first();
        $role_editor = Role::where('title','editor')->first();
        
        DB::table('users')->insert([[
            'name'=>'admin',
            'surname'=>'admin',
            'email'=>'admin@lsv.lv',
            'password'=>bcrypt('admin'),
            'role_id'=>$role_admin->id,
        ],
                [
            'name'=>'editor',
            'surname'=>'editor',
            'email'=>'editor@lsv.lv',
            'password'=>bcrypt('editor'),
            'role_id'=>$role_editor->id,
        ]]);
    }
}