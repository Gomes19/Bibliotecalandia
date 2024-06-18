<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\reservas;
use App\Models\User;
use App\Models\motorista;
use Illuminate\Support\Facades\Auth;

class ReservasController extends Controller
{
    public function index()
    {   
        $id = Auth::user()->id;
        $reservas = reservas::join('users', 'reservas.id_user', 'users.id')
            ->join('carros', 'reservas.id_carro', 'carros.id_user')
            ->select('reservas.*', 'carros.modelo as modelo', 'carros.marca as marca', 'users.name as cliente')
            ->where('reservas.id_user',$id)
            ->get(); 
        return view('layouts.site.reserva.index', compact('reservas'));
    }

    public function store(Request $req)
    {

        try {

            $carro=$req->id_carro;

            $id_user=carros::where('id',$carro)->first('id_user');

            $user=User::where('id',$id_user->id_user)->first('name');
            $motorista=$user->name;
            $user = Auth::user()->id;
            reservas::create([
                'id_user' => $user,
                'id_carro' => $req->id_carro,
                'motorista'=>$motorista,
                'estado' => 0,
                'pagamento' => 0,
            ]);
            return redirect()->back()->with('status', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("status_f", '1');
        }
    }

    
    public function update($id, Request $req)
    {
        try {
            $user = Auth::user()->id;
            reservas::where('id', $id)->update([
                'id_user' => $user,
                'id_carro' => $req->id_carro,
                'estado' => $req->estado,
                'pagamento' => $req->pagamento,
            ]);
            return redirect()->back()->with('editada', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("editada_f", '1');
        }
    }
    public function delete($id)
    {
        try {
            reservas::destroy($id);
            return redirect()->back()->with('eliminada', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("eliminada_f", '1');
        }
    }
    public function e_realizado($id)
    {
        try {
            reservas::where('id', $id)->update([
                'estado' => 1
            ]);
            return redirect()->back()->with('e_realizado', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("e_realizado_f", '1');
        }
    }
    public function e_n_realizado($id)
    {
        try {
            reservas::where('id', $id)->update([
                'estado' => 2
            ]);
            return redirect()->back()->with('e_n_realizado', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("e_n_realizado_f", '1');
        }
    }
    public function p_realizado($id)
    {
        try {
            reservas::where('id', $id)->update([
                'pamento' => 1
            ]);
            return redirect()->back()->with('p_realizado', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("p_realizado_f", '1');
        }
    }
    public function p_n_realizado($id)
    {
        try {
            reservas::where('id', $id)->update([
                'pamento' => 2
            ]);
            return redirect()->back()->with('p_n_realizado', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with("p_n_realizado_f", '1');
        }
    }
}
