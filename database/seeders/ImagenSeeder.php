<?php

namespace Database\Seeders;

use App\Models\ProductoImagen;
use League\Csv\Reader;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('seeds/imagenes.csv'), 'r')->setDelimiter(';');
        $csv->setHeaderOffset(0);


        foreach ($csv as $row) {
            ProductoImagen::create([
                'imagen' => $row['imagen'],
                'descripcion_imagen' => $row['descripcion_imagen'],
                'marca_id' => $row['marca_id']
            ]);
        }
    }
}
