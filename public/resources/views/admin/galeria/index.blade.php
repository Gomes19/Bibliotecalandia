@extends('layouts.admin.index')
@section('conteudo')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header " style="display: flex;justify-content: space-between">
            <div>
                <h4>galeria dos Produtos</h4>
            </div>
            <div>
                <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="feather icon-plus"></i>
                </button>
            </div>
        </div>
        <div>

        </div>
        <div>


        </div>
        <div class="card-body table-border-style">
            <div class="">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagem</th>
                            <th>Movel</th>

                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galerias as $galeria)
                        <tr>
                            <td>{{$galeria->id}}</td>
                            <td>
                                <img class="img-radius" src="{{$galeria->vc_path}}" width="70px"  alt="User-Profile-Image">
                            </td>
                            <td>{{$galeria->marca}} {{$galeria->modelo}}</td>

                            <td><div class="btn-group card-option">
                                <button type="button" class="btn " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">

                                     <li class="dropdown-item -"><a data-toggle="modal" data-target="#exampleModal{{$galeria->id}}" data-whatever="@getbootstrap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-refresh-cw"></i> Editar</a></li>
                                    <li class="dropdown-item "><a href="{{route('admin.galeria.delete', $galeria->id)}}"><i class="feather icon-trash"></i> Eliminar</a></li>
                                </ul>
                            </div></td>
                        </tr>
                        <div class="modal fade" id="exampleModal{{$galeria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$galeria->marca}} {{$galeria->modelo}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('admin.galeria.update',$galeria->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @include('admin.galeria.form')
                                            <div class="modal-footer">
                                                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                                <button  class="btn  btn-primary" id="ajaxSubmit" >Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

{{-- Cadastrar galeria --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.galeria.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.galeria.form')

                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                        <button  class="btn  btn-primary" id="ajaxSubmit" >Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Editar galeria --}}
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('eliminada'))
    <script>
        Swal.fire(
            'Imagem Eliminado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('editada'))
<script>
    Swal.fire(
        'Imagem editado com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('editada_f'))
<script>
Swal.fire(
    'ERro ao editar Imagem!',
    '',
    'error'
)
</script>
@endif

@if (session('status'))
<script>
    Swal.fire(
        'Imagem Ativado Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('status_f'))
<script>
Swal.fire(
    'Erro ao cadastrar imagem!',
    '',
    'success'
)
</script>
@endif

@endsection

