@extends('layouts.admin.index')
@section('conteudo')
<div class="content-inner container-fluid pb-0" id="page_layout">
    
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Registro de Actividades</h4>
                </div>
                <div>
                  
                </div>
             </div>
             <div class="card-body">
               
                <div class="table-responsive">
                   <table id="input-datatable" class="table" data-toggle="data-table-column-filter">
                    <thead>
                        <tr>
                            <th>#</th>
                          
                            <th>Usuario</th>
                            <th>Descrição</th>
                            <th>Dispositivo</th>
                            <th>IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                        <tr>
                            <td>{{$log->id}}</td>
                            <td>{{$log->usuario}} </td>
                            <td>{{$log->vc_descricao}} </td>
                            <td>{{$log->vc_dispositivo}}</td>
                            <td>{{$log->vc_endereco}}</td>
                          

                         
                        </tr>
                        @endforeach
                       {{-- MODAL CADASTRAR USUARIO --}}
            
             </div>
          </div>
       </div>
    </div>
   
    
                </div>


             
   @endsection