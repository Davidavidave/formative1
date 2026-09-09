<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'name' => 'John Cruz',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'name' => 'Mary Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'name' => 'Mark Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager01',
                'name' => 'Anna Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'cashier02',
                'name' => 'Paul Mendoza',
                'role' => 'Cashier'
            ]
        ];

        return view('users', $data);
    }
}