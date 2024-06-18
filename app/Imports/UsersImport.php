<?php

namespace App\Imports;

use App\Models\UserEmprestimo;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
       
        return new UserEmprestimo([
            'nome'=>$row[0],
            'processo'=>$row[1],
            'bi'=>$row[2],
            'id_biblioteca'=> $id_biblioteca,
        ]);
    }
}
