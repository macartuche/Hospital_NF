<?php

namespace Database\Seeders;

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
        $rol1  = Role::create(['name' => 'Administrador']);
        $rol2  = Role::create(['name' => 'Cliente']);
        $rol3  = Role::create(['name' => 'Medico']);

        //funcionalidades
        Permission::create(['name' => 'admin.home'])->syncRoles([$rol1]);//menu
        Permission::create(['name' => 'admin.paciente'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.citas'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.medicos'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.especialidades.index'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.especialidades.create'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.especialidades.edit'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.especialidades.destroy'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.especialidades.update'])->syncRoles([$rol1]);

        Permission::create(['name' => 'cliente.home'])->syncRoles([$rol2]);
        Permission::create(['name' => 'cliente.citas'])->syncRoles([$rol2]);
        Permission::create(['name' => 'cliente.historial'])->syncRoles([$rol2]);
        Permission::create(['name' => 'cliente.pedidosmed'])->syncRoles([$rol2]);
        Permission::create(['name' => 'cliente.regpaciente'])->syncRoles([$rol2]);
 

    }
}
