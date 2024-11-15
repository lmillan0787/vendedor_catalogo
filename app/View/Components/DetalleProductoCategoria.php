<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DetalleProductoCategoria extends Component
{
    /**
     * Create a new component instance.
     */
    public $producto;
    public $marca;
    public function __construct($producto, $marca)
    {
        $this->producto = $producto;
        $this->marca = $marca;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detalle-producto-categoria', ['producto' => $this->producto, 'marca' => $this->marca]);
    }
}
