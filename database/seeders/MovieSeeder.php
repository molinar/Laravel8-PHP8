<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie();
        $movie->title = 'Soul';
        $movie->description = '¿Alguna vez te has preguntado de dónde provienen tu pasión, tus sueños y tus intereses? ¿Qué es lo que te hace ser... tú? Pixar te lleva en un viaje desde las calles de Nueva York a los reinos cósmicos para descubrir las respuestas a las preguntas más importantes de la vida.';
        $movie->genre = 'Animación';
        $movie->year = '2020';

        $movie->save();

        $movie2 = new Movie();
        $movie2->title = 'Tenet';
        $movie2->description = 'Armado con tan solo una palabra –Tenet– el protagonista de esta historia deberá pelear por la supervivencia del mundo entero en una misión que le lleva a viajar a través del oscuro mundo del espionaje internacional, y cuya experiencia se desdoblará más allá del tiempo lineal.';
        $movie2->genre = 'Ciencia Ficción';
        $movie2->year = '2020';

        $movie2->save();
    }
}
