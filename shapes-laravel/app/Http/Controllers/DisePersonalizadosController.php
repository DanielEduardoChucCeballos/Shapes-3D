<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisePersonalizadosController extends Controller
{
    public function index()
    {
        $materials = \App\Models\Filament::all();
        $colorsList = \App\Models\Color::all();
        return view('pages.personalizados', compact('materials', 'colorsList'));
    }
    public function calculate(Request $request)
    {
        $vmax = 4144;
        $tmax = 2700;
        $request->validate([
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'business' => 'required|max:100',
            'address' => 'required|max:100',
            'email' => 'required',
            'phone' => 'required|max:20',
            'model' => 'required',
            'description' => 'required|max:500',
            'height' => 'required',
            'length' => 'required',
            'width' => 'required',
            'filament' => 'required',
            'color' => 'required',
            'filling' => 'required',
            'finished' => 'required',
            'shape' => 'required',
        ]);
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $business = $request->input('business');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $description = $request->input('description');
        $height = $request->input('height');
        $length = $request->input('length');
        $width = $request->input('width');
        $filament = $request->input('filament');
        $color = $request->input('color');
        $filling = $request->input('filling');
        $finished = $request->input('finished');
        $shape = $request->input('shape');

        /* if ($shape === 'cubo') {
            $volume = $length * $height * $width;
            $tiempoMinutos = ($volume * $tmax) / $vmax;
            $tiempoMinutos = round($tiempoMinutos, 2);
            $horas = $tiempoMinutos / 60;
            $horas = round($horas, 2);
            $precio = $tiempoMinutos * $filament;
            $precio = round($precio, 2);
        } else {
            $volume = (($length * $height) / 2) * $width;
            $tiempoMinutos = ($volume * $tmax) / $vmax;
            $tiempoMinutos = round($tiempoMinutos, 2);
            $horas = $tiempoMinutos / 60;
            $horas = round($horas, 2);
            $precio = $tiempoMinutos * $filament;
            $precio = round($precio, 2);
        } */

        $descriptionM = new \App\Models\DescriptionModel();
        $descriptionM->description = $request->input('description');
        if ($request->hasFile('model')) {
            $descriptionM['model'] =
                time() .
                '_' .
                auth()->id() .
                $request->file('model')->getClientOriginalName();
            $request
                ->file('model')
                ->storeAs(
                    'Models_Folder/' . auth()->id(),
                    $descriptionM['model']
                );
        }

        $model = $descriptionM->model;

        $descriptionM->save();

        /**
         * Creación de personal-information
         */
        $personal = new \App\Models\PersonalInformation();
        $personal->name = $request->input('name');
        $personal->lastname = $request->input('lastname');
        $personal->business = $request->input('business');
        $personal->address = $request->input('address');
        $personal->email = $request->input('email');
        $personal->phone = $request->input('phone');

        $personal->save();
        /**
         * Creación de personal-information
         */

        /**
         * Creación de Details
         */
        // FIlamento ID
        $filamentID = \App\Models\Filament::where(
            'price',
            '=',
            $filament
        )->first('id');
        //Color ID
        $colorID = \App\Models\Color::where('name', '=', $color)->first('id');
        //Filament color
        $fila_color = \App\Models\FilamentColor::where(
            'color_id',
            '=',
            $colorID->id
        )
            ->where('filament_id', '=', $filamentID->id)
            ->first('id');

        //Relleno
        $fillingID = \App\Models\Filling::where('name', '=', $filling)->first(
            'id'
        );

        //Acabado
        $finishedID = \App\Models\Finish::where('name', '=', $finished)->first(
            'id'
        );

        $model3D = \App\Models\DescriptionModel::where(
            'model',
            '=',
            $model
        )->first('id');

        $vmax = 4144;
        $tmax = 2700;
        $height = $request->input('height');
        $length = $request->input('length');
        $width = $request->input('width');
        $filament = $request->input('filament');
        $shape = $request->input('shape');

        if ($shape === 'cubo') {
            $volume = $length * $height * $width;
            $tiempoMinutos = ($volume * $tmax) / $vmax;
            $tiempoMinutos = round($tiempoMinutos, 2);
            $horas = $tiempoMinutos / 60;
            $horas = round($horas, 2);
            $precio = $tiempoMinutos * $filament;
            $precio = round($precio, 2);
        } else {
            $volume = (($length * $height) / 2) * $width;
            $tiempoMinutos = ($volume * $tmax) / $vmax;
            $tiempoMinutos = round($tiempoMinutos, 2);
            $horas = $tiempoMinutos / 60;
            $horas = round($horas, 2);
            $precio = $tiempoMinutos * $filament;
            $precio = round($precio, 2);
        }

        $details = new \App\Models\Detail();
        $details->height = $request->input('height');
        $details->width = $request->input('width');
        $details->length = $request->input('length');

        $details->filament_color_id = $fila_color->id;
        $details->filling_id = $fillingID->id;
        $details->finish_id = $finishedID->id;

        $details->price = $precio;

        $details->save();

        /**
         * Creación de Details
         */

        /**
         * Creación de Prospectos
         */
        $prospect = new \App\Models\Prospect();
        $prospect->detail_id = $details->id;
        $prospect->personal_information_id = $personal->id;
        $prospect->description_model_id = $model3D->id;
        $prospect->save();
        $prospectID = $prospect->id;
        /**
         * Creación de Prospectos
         */

        $materials = \App\Models\Filament::all();
        $colorsList = \App\Models\Color::all();

        return view(
            'pages.personalizados',
            compact(
                'volume',
                'tiempoMinutos',
                'horas',
                'precio',
                'materials',
                'colorsList',
                'prospectID'

            )
        );
    }

    
}
