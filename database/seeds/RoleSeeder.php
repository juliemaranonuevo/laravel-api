<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array ( 
                'role_type' => 0,
                'description' => 'Super Admin',
            ),
            array ( 
                'role_type' => 1,
                'description' => 'Seller',
            ),
            array ( 
                'role_type' => 2,
                'description' => 'Courier',
            ),
            array ( 
                'role_type' => 3,
                'description' => 'Buyer',
            ),
        );

        foreach($roles as $role){
            Role::create($role);
        }
    }
}
