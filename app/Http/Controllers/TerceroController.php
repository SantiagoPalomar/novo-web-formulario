<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tercero;
class TerceroController extends Controller
{
    public function mostrar()
    {
        return view('formulario');
    }
    public function guardar(Request $request)
    {
        $rules = [
            'tipo_documento' => 'required',
            'documento' => 'required|unique:terceros,documento',
            'primer_nombre' => 'required',
            'email' => 'required|email|unique:terceros,email',
            'acepto_politicas' => 'accepted',
        ];

        if ($request->tipo_documento !== 'NIT' && $request->tipo_documento !== 'NIC') {
            $rules['primer_apellido'] = 'required';
        }

        $messages = [
            'documento.unique' => 'Este numero de documento ya se encuentra registrado.',
            'tipo_documento.required' => 'El tipo de documento es obligatorio.',
            'documento.required' => 'El numero de documento es obligatorio.',
            'primer_nombre.required' => 'El nombre es obligatorio.',
            'primer_apellido.required' => 'El primer apellido es obligatorio.',
            'email.required' => 'El correo electronico es obligatorio.',
            'email.email' => 'El correo electronico no es valido.',
            'email.unique' => 'Este correo electronico ya se encuentra registrado.',
            'acepto_politicas.accepted' => 'Debe aceptar el tratamiento de datos personales.',
        ];

        $request->validate($rules, $messages);

        if ($request->tipo_documento !== 'NIT' && $request->tipo_documento !== 'NIC') {
    $request->merge(['digito_verificacion' => '0']);
}

        try {
            Tercero::create($request->except('acepto_politicas'));
        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrio un error al guardar los datos. Intente de nuevo.')->withInput();
        }

        return back()->with('success', 'Registro exitoso');
    }
}