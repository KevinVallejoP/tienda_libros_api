<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Científico',
                'description' => 'La ciencia se corrige a si misma, esta siempre evolucionando y se puede aplicar a todo.',
                'priority' => 1
            ],
            [
                'name' => 'Novela',
                'description' => 'Escritos por almas malditas y jodidamente solitarias. No hay mejor combustible.',
                'priority' => 2
            ],
            [
                'name' => 'Fantasía',
                'description' => 'Si diéramos a la comida, la alegría y las canciones más valor que al oro, este sería sin duda un mundo más feliz. Tolkien.',
                'priority' => 3
            ],
            [
                'name' => 'Inglés',
                'description' => 'Escritos en Ingles para lectores bilingües o angloparlantes',
                'priority' => 1
            ],
            [
                'name' => 'Ciencia Ficción',
                'description' => 'Es la crónica más fiel de nuestros tiempos y a veces también una guía premonitoria del futuro.',
                'priority' => 1
            ],
            [
                'name' => 'Programación',
                'description' => 'Es el arte de descomponer las cosas mas complejas y difusas de la realidad, en sus partes más simples. Esta habilidad majestuosa se extiende mas allá de la virtualidad, dando vida a cualquier tipo de fantasía.',
                'priority' => 1
            ]
        ];

        DB::table('categories')->insert($categories);
        //
    }
}
