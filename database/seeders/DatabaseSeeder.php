<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'tipusTreballador' => 'C',
        ]);
        DB::table('users')->insert([
            'name' => 'normal',
            'email' => 'normal@gmail.com',
            'password' => Hash::make('12345678'),
            'tipusTreballador' => 'N',
        ]);

        DB::table('apartaments')->insert([
            'codiApartament' => '62721',
            'refCatastral' => '52681751057105138PS',
            'ciutat' => 'Barcelona',
            'barri' => 'Sant Andreu',
            'nomCarrer' => 'Carrer València',
            'numCarrer' => '64',
            'pis' => '2',
            'numLlits' => '6',
            'numHabitacions' => '4',
            'ascensor' => 'Sí',
            'calefaccio' => 'Butà',
            'aireAcondicionat' => 'No',
        ]);

        DB::table('apartaments')->insert([
            'codiApartament' => '62722',
            'refCatastral' => '28383077648216036KP',
            'ciutat' => 'Tarragona',
            'barri' => 'Torreforta',
            'nomCarrer' => 'Prades',
            'numCarrer' => '36',
            'pis' => '4',
            'numLlits' => '2',
            'numHabitacions' => '2',
            'ascensor' => 'No',
            'calefaccio' => 'Gas natural',
            'aireAcondicionat' => 'Sí',
        ]);

        DB::table('apartaments')->insert([
            'codiApartament' => '62723',
            'refCatastral' => '62899036825679257BN',
            'ciutat' => 'Granollers',
            'barri' => 'Ponent',
            'nomCarrer' => 'Girona',
            'numCarrer' => '80',
            'pis' => '7',
            'numLlits' => '4',
            'numHabitacions' => '3',
            'ascensor' => 'Sí',
            'calefaccio' => 'Elèctrica',
            'aireAcondicionat' => 'Sí',
        ]);
        
        DB::table('clients')->insert([
            'dni' => '5170520582M',
            'nomCognoms' => 'Claúdia Tejedor',
            'edat' => '34',
            'telefon' => '628185156',
            'adreca' => 'Avinguda dels Països Catalans, 7',
            'ciutat' => 'Lliçà de Vall',
            'pais' => 'Espanya',
            'email' => 'claudia@gmail.com',
            'tipusTargeta' => 'Crèdit',
            'numTargeta' => '5810628571474139',
        ]);
        
        DB::table('clients')->insert([
            'dni' => '72806539C',
            'nomCognoms' => 'Adolfo Miguel',
            'edat' => '28',
            'telefon' => '619003581',
            'adreca' => 'Avinguda Pau Casals, 63',
            'ciutat' => 'Barcelona',
            'pais' => 'Espanya',
            'email' => 'adolfo@gmail.com',
            'tipusTargeta' => 'Crèdit',
            'numTargeta' => '6105828635019668',
        ]);
        
        DB::table('clients')->insert([
            'dni' => '129936778R',
            'nomCognoms' => 'Ines Valdivia',
            'edat' => '47',
            'telefon' => '619735910',
            'adreca' => 'Carrer dels Artillers, 14',
            'ciutat' => 'Girona',
            'pais' => 'Espanya',
            'email' => 'ines@gmail.com',
            'tipusTargeta' => 'Dèbit',
            'numTargeta' => '5810682099258156',
        ]);

    }
}
