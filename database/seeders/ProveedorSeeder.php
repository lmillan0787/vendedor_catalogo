<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proveedores = [
            ['nombre_proveedor' => 'CHICCO', 'imagen' => 'chicco.png'],
            ['nombre_proveedor' => 'AMY' , 'imagen' => 'amy.png'],
            ['nombre_proveedor' => 'AVISPA', 'imagen' => 'avispa.png'],
            ['nombre_proveedor' => 'FRIENDS', 'imagen' => 'friends.png'],
            ['nombre_proveedor' => 'ACTIVA', 'imagen' => 'activa.png'],
            ['nombre_proveedor' => 'SECUREZZA', 'imagen' => 'securezza.png'],
            ['nombre_proveedor' => 'SIEMPRE SECO', 'imagen' => 'siempreseco.png'],
            ['nombre_proveedor' => 'NIVEA', 'imagen' => 'nivea.png'],
            ['nombre_proveedor' => 'PONCE & BENZO', 'imagen' => 'ponce.png'],
            ['nombre_proveedor' => 'SCHICK *', 'imagen' => 'schick.png'],
            ['nombre_proveedor' => 'REVLON COLORSILK (IPECA)', 'imagen' => 'revlon.png'],
            ['nombre_proveedor' => 'CERO', 'imagen' => 'cero.png'],
            ['nombre_proveedor' => 'INSTITUTO ESPAÑOL', 'imagen' => 'instituto.png'],
            ['nombre_proveedor' => 'NUVEL', 'imagen' => 'nuvel.png'],
            ['nombre_proveedor' => 'WIKI-WIKI', 'imagen' => 'wiki.png'],
            ['nombre_proveedor' => 'VITA', 'imagen' => 'vita.png'],
            ['nombre_proveedor' => 'OTROS', 'imagen' => ''],
            ['nombre_proveedor' => 'FISA', 'imagen' => 'fisa.png'],
            ['nombre_proveedor' => 'ETERNA', 'imagen' => 'eterna.png'],
            ['nombre_proveedor' => 'SC JOHNSON', 'imagen' => 'sc.png'],
            ['nombre_proveedor' => 'DIMASSI', 'imagen' => 'dimassi.png'],
            ['nombre_proveedor' => 'REXONA-VASELINE-SAVITAL', 'imagen' => 'rexona.png'],
            ['nombre_proveedor' => 'BIVIEN', 'imagen' => 'bivien.png'],
            ['nombre_proveedor' => 'ABC', 'imagen' => 'abc.png'],
        ];
    }
}
