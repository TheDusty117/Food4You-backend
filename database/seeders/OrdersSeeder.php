<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'address' => 'Via Roma, 123, Roma',
                'name' => 'Romeo Artrosi',
                'order_price' => 15.99,
                'mail' => 'romeo.artrosi@example.com',
                'telephone_number' => '06 1234567',
                'status' => true,
            ],
            [
                'address' => 'Via Napoli, 45, Roma',
                'name' => 'Laura Bianchi',
                'order_price' => 12.50,
                'mail' => 'laura.bianchi@example.com',
                'telephone_number' => '06 9876543',
                'status' => true,
            ],
            [
                'address' => 'Via Venezia, 78, Roma',
                'name' => 'Giuseppe Verdi',
                'order_price' => 23.75,
                'mail' => 'giuseppe.verdi@example.com',
                'telephone_number' => '06 5432109',
                'status' => true,
            ],
            [
                'address' => 'Via Milano, 10, Roma',
                'name' => 'Paola Russo',
                'order_price' => 18.25,
                'mail' => 'paola.russo@example.com',
                'telephone_number' => '06 7654321',
                'status' => true,
            ],
            [
                'address' => 'Via Firenze, 32, Roma',
                'name' => 'Alessandro Conti',
                'order_price' => 9.99,
                'mail' => 'alessandro.conti@example.com',
                'telephone_number' => '06 2345678',
                'status' => true,
            ],
            [
                'address' => 'Via del Corso, 123, Roma',
                'name' => 'Maria Baldambembo',
                'order_price' => 27.50,
                'mail' => 'm.baldambembo@example.com',
                'telephone_number' => '3351234567',
                'status' => true,
            ],
            [
                'address' => 'Piazza Navona, 1, Roma',
                'name' => 'Luigi Saturno',
                'order_price' => 42.80,
                'mail' => 'l.saturno@example.com',
                'telephone_number' => '3389876543',
                'status' => true,
            ],
            [
                'address' => 'Via Condotti, 10, Roma',
                'name' => 'Giulia Capaldi',
                'order_price' => 18.90,
                'mail' => 'g.capaldi@example.com',
                'telephone_number' => '3391112222',
                'status' => false,
            ],
            [
                'address' => 'Via Veneto, 5, Roma',
                'name' => 'Marco Gialli',
                'order_price' => 35.60,
                'mail' => 'm.gialli@example.com',
                'telephone_number' => '3403334444',
                'status' => true,
            ],
            [
                'address' => 'Piazza di Spagna, 20, Roma',
                'name' => 'Laura Neri',
                'order_price' => 23.75,
                'mail' => 'l.neri@example.com',
                'telephone_number' => '3425556666',
                'status' => false,
            ],
            // Aggiungi altri ordini qui...
        ];

        foreach ($orders as $orderData) {
            Orders::create($orderData);
        }
    }
}
