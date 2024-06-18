@extends('layouts.admin.index')
@section('conteudo')
<div class="content-inner container-fluid pb-0" id="page_layout">
    
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
               
                   <h4 class="card-title">Cadastrar Emprestimo </h4>
                </div>
               
             </div>
             <div class="card-body">
        <div class="card-body table-border-style">
            <div class="">
                <form action="{{route('biblioteca.emprestimo.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('biblioteca.emprestimos.form')

                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                        <button  class="btn  btn-primary" id="ajaxSubmit" >Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

{{-- <script src="{{ asset('js/app.js') }}"></script>
<script src="https://js.pusher.com/8.0/pusher.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
 var rfidValue = '';
$(document).ready(function() {
  setInterval(function() {
    $.ajax({
      url: '/e_rfid',
      type: 'GET',
      success: function(response) {
        console.log(response.valor);
          $('#rfid-input').val(response.rfid);
           rfidValue = response.valor; 
          // Obtém o elemento input pelo ID
          document.getElementById('meu-input').value = response.valor;
         
      },
      error: function() {
        console.log('Falha ao atualizar a tag RFID.');
      }
    });
  }, 2000); // Intervalo de 2 segundos (2000 milissegundos)
});
</script>


{{-- Editar carro --}}
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('eliminada'))
    <script>
        Swal.fire(
            'Livro Eliminado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('editada'))
<script>
    Swal.fire(
        'Livro editado com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('editada_f'))
<script>
Swal.fire(
    'ERro ao editar Livro!',
    '',
    'error'
)
</script>
@endif

@if (session('status'))
<script>
    Swal.fire(
        'Emprestimo Realizado com sucesso Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('status_f'))
<script>
Swal.fire(
    'Erro ao realizar Emprestimo!',
    '',
    'error'
)
</script>
@endif
@endsection

