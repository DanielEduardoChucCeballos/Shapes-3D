<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormPersonalizados extends Component
{
    public $errores = '';
    public $vmax = 4144;
    public $tmax = 2700;
    public $volume = '';
    public $name, $lastname, $business, $address, $email, $phone, $model, $descriptionion, $height, $length, $width, $filament, $filling, $finished, $shape; 
    
    
    function render()
    {
        return view('livewire.form-personalizados');
    }

    public function updatingShape($shape)
    {
        if ($shape === 'cubo') {
            if ($length or $height or $width) {
                $this->volume = $length * $height * $width;
                $this->tiempoMinutos = ($volume * $tmax) / $vmax;
                $this->horas = $tiempoMinutos / 60;
                $this->precio = $tiempoMinutos * $filament;
            }
        } else {
            if ($length or $height or $width) {
                $volume = (($length * $height) / 2) * $width;
                $tiempoMinutos = ($volume * $tmax) / $vmax;
                $horas = $tiempoMinutos / 60;
                $precio = $tiempoMinutos * $filament;
            }
        }
    }
}
