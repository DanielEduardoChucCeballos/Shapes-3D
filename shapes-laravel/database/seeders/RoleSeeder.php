<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);

        $permission = Permission::create(['name' => 'adminDashboard','description' =>'Acceder al Dashboard'])->assignRole($role);
        $permission = Permission::create(['name' => 'crud.index','description' =>'Ver crud'])->assignRole($role);
        $permission = Permission::create(['name' => 'crud.create','description' =>'Crear en crud'])->assignRole($role);
        $permission = Permission::create(['name' => 'crud.edit','description' =>'Editar en crud'])->assignRole($role);
        $permission = Permission::create(['name' => 'crud.destroy','description' =>'Destruir '])->assignRole($role);

    }
}
