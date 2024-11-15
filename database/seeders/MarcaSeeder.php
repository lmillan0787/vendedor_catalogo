<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $marcas = [
            /** 1 */
            ['nombre_marca' => 'CHICCO', 'imagen' => 'chicco.png'],
            /** 2 */
            ['nombre_marca' => 'AMY', 'imagen' => 'amy.png'],
            /** 3 */
            ['nombre_marca' => 'AVISPA', 'imagen' => 'avispa.png'],
            /** 4 */
            ['nombre_marca' => 'FRIENDS', 'imagen' => 'friends.png'],
            /** 5 */
            ['nombre_marca' => 'ACTIVA', 'imagen' => 'activa.png'],
            /** 6 */
            ['nombre_marca' => 'SECUREZZA', 'imagen' => 'securezza.png'],
            /** 7 */
            ['nombre_marca' => 'SIEMPRE SECO', 'imagen' => 'siempreseco.png'],
            /** 8 */
            ['nombre_marca' => 'NIVEA', 'imagen' => 'nivea.png'],
            /** 9 */
            ['nombre_marca' => 'PONCE & BENZO', 'imagen' => 'ponce.png'],
            /** 10 */
            ['nombre_marca' => 'SCHICK *', 'imagen' => 'schick.png'],
            /** 11 */
            ['nombre_marca' => 'REVLON COLORSILK (IPECA)', 'imagen' => 'revlon.png'],
            /** 12 */
            ['nombre_marca' => 'CERO', 'imagen' => 'cero.png'],
            /** 13 */
            ['nombre_marca' => 'INSTITUTO ESPAÑOL', 'imagen' => 'instituto.png'],
            /** 14 */
            ['nombre_marca' => 'NUVEL', 'imagen' => 'nuvel.png'],
            /** 15 */
            ['nombre_marca' => 'WIKI-WIKI', 'imagen' => 'wiki.png'],
            /** 16 */
            ['nombre_marca' => 'VITA', 'imagen' => 'vita.png'],
            /** 17 */
            ['nombre_marca' => 'OTROS', 'imagen' => ''],
            /** 18 */
            ['nombre_marca' => 'FISA', 'imagen' => 'fisa.png'],
            /** 19 */
            ['nombre_marca' => 'ETERNA', 'imagen' => 'eterna.png'],
            /** 20 */
            ['nombre_marca' => 'SC JOHNSON', 'imagen' => 'sc.png'],
            /** 21 */
            ['nombre_marca' => 'DIMASSI', 'imagen' => ''],
            /** 22 */
            ['nombre_marca' => 'REXONA-VASELINE-SAVITAL', 'imagen' => 'rexona.png'],
            /** 23 */
            ['nombre_marca' => 'BIVIEN', 'imagen' => 'bivien.png'],
            /** 24 */
            ['nombre_marca' => 'ABC', 'imagen' => 'abc.png'],
        ];


        foreach ($marcas as $marca) {
            $marca['slug'] = Str::slug($marca['nombre_marca']);
            Marca::create($marca);
        }
    }
}
