<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Symfony\Component\Clock\now;
use Illuminate\Support\Facades\DB;

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
            'symbole' => "$",
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        );

        // DB::table('TDevises')->insert(
        //     [
        //     "nom" => "Dolard",
        //     'code' => "USD",
        //     "taux" => 2800,
        //     ]
        // );

        DB::table('TTypePieces')->insert([
            [
                "nom" => "Salon",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Cuisine",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Salle de bain",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Veranda",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        ]);

        DB::table('TMaisonTypes')->insert([
            [
                "nom" => "Studio",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Maison mixte(Chambre, Salon...)",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Appartement",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Vila",
                'description' => "",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
          
        ]);
        DB::table('TCritereBudgets')->insert([
            [
            "devise_id" => 1,
            'amountMin' => 40,
            "amountMax" => 130,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
            "devise_id" => 1,
            'amountMin' => 132,
            "amountMax" => 300,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
            "devise_id" => 1,
            'amountMin' => 302,
            "amountMax" => 580,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
            "devise_id" => 1,
            'amountMin' => 582,
            "amountMax" => 700,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
            "devise_id" => 1,
            'amountMin' => 702,
            "amountMax" => 1000,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
            "devise_id" => 1,
            'amountMin' => 1002,
            "amountMax" => 3000,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
            "devise_id" => 1,
            'amountMin' => 3002,
            "amountMax" => 5000,
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        ]);
    }
}
