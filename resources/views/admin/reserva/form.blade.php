<div class="container">
<div class="row">
 <div class="form-group col-md-12">
   <label for="inputState">Categoria</label>
   <select id="inputState5" class="form-control" name="id_carro">
       @isset($reserva->empresa)
         <option name="id_carro" value="{{ $reserva->id_carro }} ">{{ $reserva->carro }}</option>
       @endisset
     @foreach ($carros as $reserva)
         <option name="id_carro" value="{{ $reserva->id }} ">{{ $reserva->modelo }} {{ $reserva->marca}}</option>
     @endforeach
   </select>
 </div>



                        </div>
                    </div>
