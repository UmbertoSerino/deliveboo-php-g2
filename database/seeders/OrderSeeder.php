<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'user_address' => 'Via sevastopoli 5, 40134, Catanzaro',
                'customer' => 'Peppino de longhi',
                'status' => 1,
                'total' => 89.00,
                'user_mail' => 'PeppinoDL99@gmail.com',
                'user_phone_number' => 333333333,
            ],
        ];

        foreach ($orders as $order) {
            $newOrder = new Order();

            $newOrder->user_address = $order['user_address'];
            $newOrder->customer = $order['customer'];
            $newOrder->status = $order['status'];
            $newOrder->total = $order['total'];
            $newOrder->user_mail = $order['user_mail'];
            $newOrder->user_phone_number = $order['user_phone_number'];
            $newOrder->save();
        }
    }
}
