<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    //
    public function login_inicio()
    {
        return view('login');
    }

    public function login_login()
    {
        return view('loginUsu');
    }

    public function login_datos(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'usuario' => 'required',
            'correo' => 'required',
            'password' => 'required',
        ]);
        $login = new Login();
        $login->nombre = $request->nombre;    
        $login->usuario = $request->usuario;
        $login->correo = $request->correo;
        $login->password = $request->password;
        $login->save();
        return "Usuario: \n" .$request->nombre. "\nGracias por contactarnos";
    }

    public function login_usuario()
    {
        $request = request();
        $login= DB::table('login')
        ->select('nombre', 'usuario', 'correo', 'password')
        ->where ('nombre', $request->nombre)
        ->where ('password', $request->password)
        ->get();
        $aux=0;
        foreach ($login as $login) {
            $aux++;
            echo "Bienvenido: ".$login->nombre. "<br>";
            echo "<a href='/login'>Cerrar Sesion</a>";
        }
        if($aux==0){
            echo "Usuario o contraseña incorrectos";
        }
        $_SESSION
    }

    

    public function login_ordenamiento(){
        $login= DB::table('login')
        ->select('nombre', 'usuario', 'correo', 'password')
        ->orderBy('nombre', 'asc')
        ->get();
        $aux=0;
        foreach ($login as $login) {
            $aux++;
            echo "<ul>";
            echo "Nombre: ".$login->nombre. "<br>";
            echo "Usuario: ".$login->usuario. "<br>";
            echo "Correo: ".$login->correo. "<br>";
            echo "Password: ".$login->password. "<br>";
            echo "</ul>";
        }
        if($aux==0){
            echo "No hay usuarios registrados";
        }
    }

    public function login_ordenamiento_descendiente(){
        $login= DB::table('login')
        ->select('nombre', 'usuario', 'correo', 'password')
        ->orderBy('nombre', 'desc')
        ->get();
        $aux=0;
        foreach ($login as $login) {
            $aux++;
            echo "<ul>";
            echo "Nombre: ".$login->nombre. "<br>";
            echo "Usuario: ".$login->usuario. "<br>";
            echo "Correo: ".$login->correo. "<br>";
            echo "Password: ".$login->password. "<br>";
            echo "</ul>";
        }
        if($aux==0){
            echo "No hay usuarios registrados";
        }
    }

    public function login_buscar_nombre(){
        $login= DB::table('login')
        ->select('nombre', 'usuario', 'correo', 'password')
        ->where('nombre', 'hola',)
        ->get();
        $aux=0;
        foreach ($login as $login) {
            $aux++;
            echo "<ul>";
            echo "Nombre: ".$login->nombre. "<br>";
            echo "Usuario: ".$login->usuario. "<br>";
            echo "Correo: ".$login->correo. "<br>";
            echo "Password: ".$login->password. "<br>";
            echo "</ul>";
        }
        if($aux==0){
            echo "No hay usuarios registrados";
        }
    }

    public function login_actualizar_nombre(){
        $login= DB::table('login')
        ->where('nombre', 'njk')
        ->update(['nombre' => 'Kevin']);
        echo "Nombre actualizado";
    }


}

