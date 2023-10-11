<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class WelcomeController extends Controller
{
    private $names = [1 => 'Maximiliano Hernández', 2 => 'Adolfo Hittler', 3 => 'Hugo Chávez', 4 => 'Marco Aurelio'];
    //
    public function list()
    {
        return $this->names;
    }
    public function searchData(int $pos)
    {
        if (array_key_exists($pos, $this->names)) {
            return response()->json([
                $pos => $this->names[$pos]
            ]);
        } else {
            return response()->json(["data" => "El valor proporcionado no existe"]);
        }
    }

    public function saludar(Request $request)
    {

        return "Hola " . $request->input('name');
    }

}