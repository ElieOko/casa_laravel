<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        DB::table('TDevises')->insert(
            [
            "nom" => "Dolard",
            'code' => "USD",
            "taux" => 2800,
            ]
        );

        DB::table('TTypePieces')->insert(
            [
                "nom" => "Salon",
                'description' => ""
            ],
            [
                "nom" => "Cuisine",
                'description' => ""
            ],
            [
                "nom" => "Chambre",
                'description' => ""
            ],
            [
                "nom" => "Salle de bain",
                'description' => ""
            ],
            [
                "nom" => "Veranda",
                'description' => ""
            ]
        );
        
        DB::table('TMaisonTypes')->insert(
            [
                "nom" => "Studio",
                'description' => ""
            ],
            [
                "nom" => "Maison mixte(Chambre, Salon...)",
                'description' => ""
            ],
            [
                "nom" => "Appartement",
                'description' => ""
            ],
            [
                "nom" => "Vila",
                'description' => ""
            ],
          
        );

        DB::table('TCritereBudgets')->insert([
            "devise_id" => 1,
            'amountMin' => 40,
            "amountMax" => 130,
        ],
        [
            "devise_id" => 1,
            'amountMin' => 132,
            "amountMax" => 300,
        ],
        [
            "devise_id" => 1,
            'amountMin' => 302,
            "amountMax" => 580,
        ],
        [
            "devise_id" => 1,
            'amountMin' => 582,
            "amountMax" => 700,
        ],
        [
            "devise_id" => 1,
            'amountMin' => 702,
            "amountMax" => 1000,
        ],
        [
            "devise_id" => 1,
            'amountMin' => 1002,
            "amountMax" => 3000,
        ],
        [
            "devise_id" => 1,
            'amountMin' => 3002,
            "amountMax" => 5000,
        ]
        );
    }
}
