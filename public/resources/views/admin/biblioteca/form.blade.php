<div class="container">
<div class="row">
 <div class="form-group col-md-6">
   <label for="inputState">Categoria</label>
   <select id="inputState5" class="form-control" name="id_categoria">
       @isset($sub_categoria->categoria)
         <option name="id_categoria" value="{{ $sub_categoria->id_categoria }} ">{{ $sub_categoria->categoria }}</option>
       @endisset
     @foreach ($categorias as $categoria)
         <option name="id_categoria" value="{{ $categoria->id }} ">{{ $categoria->vc_nome }}</option>
     @endforeach
   </select>
 </div>
     <div class="col-md-6 col-12">
   <div class="form-group">
       <label for="vc_path">Sub-Categoria</label>
       <input type="text" id="vc_nome" class="form-control" name="vc_nome"
           placeholder="Sub-Categoria" value="{{ isset($sub_categoria->vc_nome) ? $sub_categoria->vc_nome : "" }}">
   </div>
                            </div>


                        </div>
                    </div>
