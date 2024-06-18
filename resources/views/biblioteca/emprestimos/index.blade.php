@extends('layouts.admin.index')
@section('conteudo')
<div class="content-inner container-fluid pb-0" id="page_layout">
    
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Emprestimos</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Cadastrar Utilizador

                        <svg class="size-28 hvr-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            
                        </svg>
                    </button>
                </div>
             </div>
             <div class="card-body">
               
                <div class="table-responsive">
                   <table id="input-datatable" class="table" data-toggle="data-table-column-filter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Livro</th>
                            <th>Estudante</th>
                            <th>Data de Entrega</th>
                            <th>Estado</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emprestimos as $emprestimo)
                        <tr>
                            <td>{{$emprestimo->id}}</td>
                            <td>{{$emprestimo->livro}} </td>
                            <td>{{$emprestimo->estudante}} </td>
                            <td>{{$emprestimo->entrega}}</td>
                            @if($emprestimo->estado==0)
                              <td>Emprestado</td>
                           @elseif($emprestimo->estado==1)
                              <td>Entregue</td>
                           @else
                              <td>Cancelado</td>
                           @endif
                           @if($emprestimo->estado==0)
                            <td>
                                 <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Entregue" href="{{route('biblioteca.emprestimo.entregar', $emprestimo->id)}}">
                                    <span class="btn-inner">
                                       
                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7281 21.9137C11.8388 21.9715 11.9627 22.0009 12.0865 22C12.2103 21.999 12.3331 21.9686 12.4449 21.9097L16.0128 20.0025C17.0245 19.4631 17.8168 18.8601 18.435 18.1579C19.779 16.6282 20.5129 14.6758 20.4998 12.6626L20.4575 6.02198C20.4535 5.25711 19.9511 4.57461 19.2082 4.32652L12.5707 2.09956C12.1711 1.96424 11.7331 1.96718 11.3405 2.10643L4.72824 4.41281C3.9893 4.67071 3.496 5.35811 3.50002 6.12397L3.54231 12.7597C3.5554 14.7758 4.31448 16.7194 5.68062 18.2335C6.3048 18.9258 7.10415 19.52 8.12699 20.0505L11.7281 21.9137ZM10.7836 14.1089C10.9326 14.2521 11.1259 14.3227 11.3192 14.3207C11.5125 14.3198 11.7047 14.2472 11.8517 14.1021L15.7508 10.2581C16.0438 9.96882 16.0408 9.50401 15.7448 9.21866C15.4478 8.9333 14.9696 8.93526 14.6766 9.22454L11.3081 12.5449L9.92885 11.2191C9.63186 10.9337 9.15467 10.9367 8.8607 11.226C8.56774 11.5152 8.57076 11.98 8.86775 12.2654L10.7836 14.1089Z" fill="currentColor"></path>
                            </svg>
                        
                                    </span>
                                 </a>
                                </td>
                              @else
                              <td>Operação Trancada</td>
                              @endif
                        </tr>
                       {{-- MODAL CADASTRAR USUARIO --}}
              @endforeach
              </tbody>
              </table>
             </div>
          </div>
       </div>
    </div>
   
    
                </div>


                {{-- MODAL CADASTRAR USUARIO --}}
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"   aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title">Modal title</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                             </button>
                          </div>
                          <div class="modal-body">
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                {{-- @include('biblioteca.emprestimos.form') --}}
            
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button  class="btn  btn-primary" id="ajaxSubmit" >Cadastrar</button>
                                </div>
                            </form>
                          </div>
                          {{-- <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                          </div> --}}
                       </div>
                    </div>
                 </div>


  <script>
      setInterval(function() {
      // Obter o valor do RFID do campo de entrada ou de onde você está recebendo do Arduino
      var rfid = document.getElementById('rfid').value;
      
      // Enviar a requisição AJAX para a controller usando o Axios
      axios.post('/cadastro/emprestimo', 'rfid=' + rfid)
         .then(function(response) {
               // Manipular a resposta JSON
               var tag = response.data.tag;
               // Faça o que desejar com a tag (por exemplo, atualizar um elemento na página)
               document.getElementById('tag-info').textContent = tag;
         })
         .catch(function(error) {
               console.log(error);
         });
   }, 2000); 
 </script>      

 @if (session('entregue'))
    <script>
        Swal.fire(
            'Livro Entregue com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('entregue.erro'))
<script>
    Swal.fire(
        'Erro ao realizar operação de Entrega de Livro!',
        '',
        'success'
    )
</script>
@endif
@endsection