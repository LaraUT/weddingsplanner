<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contacto::factory(10)->create(); // Ajusta el número a cuántos registros quieras generar
    }
    
}
