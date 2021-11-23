<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use PhpParser\Node\Expr\Assign;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
       $permissions = [
           //'role-list',
           //'role-create',
           //'role-edit',
           //'role-delete',
           'materia-list',
           'materia-create',
           'materia-edit',
           'materia-delete'
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
             
        }
    }
    
}
