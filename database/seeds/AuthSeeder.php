<?php

use Illuminate\Database\Seeder;
use App\AuthMediator;
use App\User;
use App\Role;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = array(
        //     array ( 
        //         'email' => 'sample@sample.com',
        //         'username' => 'sample',
        //         'password' =>  bcrypt('000000') 
        //     ),
        //     array ( 
        //         'email' => 'sample@sample.com1',
        //         'username' => 'sample1',
        //         'password' =>  bcrypt('000000') 
        //     )
        // );

        // foreach($users as $user){
        //     User::create($user);
        // }


        $usersAuthMeds = array(
            array ( 
                'email' => 'appVtrz.co@gmail.com',
                'username' => 'appVtrz0717',
                'phone_number' => '9126545289',
                'status' => true,
                'terms_policy' => true,
                
                    array (
                        'email' => 'appVtrz.co@gmail.com',
                        'username' => 'appVtrz0717',
                        'password' =>  bcrypt('000000'),
                        'last_online' => null,
                        'role_type' => 0, // super_admin
                        // 'role_description' => "Super Admin"
                    )
            ),
            array ( 
                'email' => 'seller@gmail.com',
                'username' => 'seller0717',
                'phone_number' => '9126545288',
                'status' => true,
                'terms_policy' => true,
                
                    array (
                        'email' => 'seller@gmail.com',
                        'username' => 'seller0717',
                        'password' =>  bcrypt('000000'),
                        'last_online' => null,
                        'role_type' => 1, // seller
                        // 'role_description' => "Seller"
                    )
            ),
            array ( 
                'email' => 'runner@gmail.com',
                'username' => 'runner0717',
                'phone_number' => '9126545287',
                'status' => true,
                'terms_policy' => true,
               
                    array (
                        'email' => 'runner@gmail.com',
                        'username' => 'runner0717',
                        'password' =>  bcrypt('000000'),
                        'last_online' => null,
                        'role_type' => 2, // courier
                        // 'role_description' => "Courier"
                    )
            ),
            array ( 
                'email' => 'buyer@gmail.com',
                'username' => 'buyer0717',
                'phone_number' => '9126545286',
                'status' => true,
                'terms_policy' => true,
        
                    array (
                        'email' => 'buyer@gmail.com',
                        'username' => 'buyer0717',
                        'password' =>  bcrypt('000000'),
                        'last_online' => null,
                        'role_type' => 3, // buyer
                        // 'role_description' => "Buyer"
                    )
            ),
        );

        $users = $usersAuthMeds;
        $user_count = count( $usersAuthMeds );
        $count = 0;

        for ( $x = 0; $x<$user_count; $x++) {

            $authMediator = new AuthMediator;
            $authMediator->email = $usersAuthMeds[$x]['email'];
            $authMediator->username = $usersAuthMeds[$x]['username'];
            $authMediator->phone_number = $usersAuthMeds[$x]['phone_number'];
            $authMediator->status = $usersAuthMeds[$x]['status'];
            $authMediator->terms_policy = $usersAuthMeds[$x]['terms_policy'];
            $authMediator->save();

            for ( $y = 0; $y<1; $y++) { 

                $user = new User;
                $user->email = $usersAuthMeds[$x][$y]['email'];
                $user->username = $usersAuthMeds[$x][$y]['username'];
                $user->password = $usersAuthMeds[$x][$y]['password'];
                $user->last_online = $usersAuthMeds[$x][$y]['last_online'];
                $user->auth_mediator_id = $authMediator->id;
                $user->save();

                $role = new Role;
                $role->role_type = $usersAuthMeds[$x][$y]['role_type'];
                // $role->description = $usersAuthMeds[$x][$y]['role_description'];
                $role->status = true;
                $role->auth_mediator_id = $authMediator->id;
                $role->save();

            }

        }
    }
}
