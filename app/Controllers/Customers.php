<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09123456789'
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09234567890'
            ],
            [
                'name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09345678901'
            ],
            [
                'name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'phone' => '09456789012'
            ],
            [
                'name' => 'Carlo Mendoza',
                'email' => 'carlo@gmail.com',
                'phone' => '09567890123'
            ]
        ];

        return view('Customers', $data);
    }
}