<?php

namespace Database\Seeders;

use League\Csv\Reader;
use App\Models\Producto;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('seeds/productos_ihan_imagenes_test.csv'), 'r')->setDelimiter(';');
        $csv->setHeaderOffset(0);


        foreach ($csv as $row) {

            $descripcion_producto = mb_convert_encoding($row['descripcion_producto'], 'UTF-8');
            Producto::create([
                'codigo_producto' => $row['codigo_producto'],
                'descripcion_producto' => $descripcion_producto,
                'unidades_por_caja' => $row['unidades_por_caja'],
                'precio' => number_format((float)$row['precio'], 2, '.', ''),
                'iva' => number_format((float)$row['iva'], 2, '.', ''),
                'precio_con_iva' => number_format((float)$row['precio_con_iva'], 2, '.', ''),
                'descuento_por_bultos' => $row['descuento_por_bultos'],
                'descuento_por_volumen' => $row['descuento_por_volumen'],
                'imagen_id' => $row['imagen_id'] == 'NULL' ? null : $row['imagen_id'],
                'marca_id' => (int)$row['marca_id'],
                'slug' => Str::slug($descripcion_producto)
            ]);
        }
    }
}
