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
                            <li class="breadcrumb-item"><a href="#!">Painel Administrativo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header " style="display: flex;justify-content: space-between">
            <div>
                <h4>Livros</h4>
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
                            <th>Livro</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>Genêro</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                        <tr>
                            <td>{{$livro->id}}</td>
                            <td>{{$livro->vc_nome}} </td>
                            <td>{{$livro->autor}} </td>
                            <td>{{$livro->categoria}}</td>
                            <td>{{$livro->genero}}</td>

                            <td><div class="btn-group card-option">
                                <button type="button" class="btn " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">

                                     <li class="dropdown-item -"><a data-toggle="modal" data-target="#exampleModal{{$livro->id}}" data-whatever="@getbootstrap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-refresh-cw"></i> Editar</a></li>
                                    <li class="dropdown-item "><a href="{{route('admin.livros.delete', $livro->id)}}"><i class="feather icon-trash"></i> Eliminar</a></li>
                                </ul>
                            </div></td>
                        </tr>
                        <div class="modal fade" id="exampleModal{{$livro->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$livro->vc_nome}} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('admin.livros.update',$livro->id)}}" method="post">
                                            @csrf
                                                     <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="vc_nome">Nome</label>
                                    <input type="text" id="marca" class="form-control" placeholder="Nome do Livro"
                                        name="vc_nome" value="{{ isset($livro->marca) ? $livro->vc_nome : "" }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="autor">Autor</label>
                                    <input type="text" id="autor" class="form-control" placeholder="Autor do livro"
                                        name="autor" value="{{ isset($livro->autor) ? $livro->autor : "" }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="editora">Editora</label>
                                    <input type="text" id="editora" class="form-control" placeholder="editora do livro"
                                        name="editora" value="{{ isset($livro->editora) ? $livro->editora : "" }}">
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputState">Sub-Categoria</label>
                                <select id="inputState5" class="form-control" name="genero">

                                  @foreach ($sub_categoria as $livro)
                                      <option name="genero" value="{{ $livro->id }} ">{{ $livro->vc_nome }}</option>
                                  @endforeach


                                </select>
                            </div>
    
                          
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="qt_page">Quantida de Paginas</label>
                                    <input type="integer" id="qt_page" class="form-control" name="qt_page"
                                        placeholder="qt_page" value="{{ isset($livro->qt_page) ? $livro->qt_page : "" }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="tipo">Preço:</label>
                                    <input type="text" id="preco" class="form-control" placeholder="preco" name="preco" value="{{ isset($livro->preco) ? $livro->preco : "" }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="isbn">ISBN</label>
                                    <input type="integer" id="isbn" class="form-control" name="isbn"
                                        placeholder="isbn" value="{{ isset($livro->isbn) ? $livro->isbn : "" }}">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="ano">Data de Lançamento</label>
                                    <input type="date" id="ano" class="form-control" name="ano"
                                        placeholder="ano" value="{{ isset($livro->ano) ? $livro->ano : "" }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="quantidade">Quantidade de Copias Desponiveis (Caso seja um livro fisico)</label>
                                    <input type="number" id="quantidade" class="form-control" name="quantidade"
                                        placeholder="quantidade" value="{{ isset($livro->quantidade) ? $livro->quantidade : "" }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="vc_path">Imagem</label>
                                    <input type="file" id="vc_path" class="form-control" name="vc_path"
                                        placeholder="vc_path" value="{{ isset($livro->vc_path) ? $livro->vc_path : "" }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="vc_desc">Descrição do Livro</label>
                                    <input type="text" id="vc_desc" class="form-control" name="vc_desc"
                                        placeholder="vc_desc" value="{{ isset($livro->vc_desc) ? $livro->vc_desc : "" }}">
                                </div>
                            </div>
                        </div>
                    
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

{{-- Cadastrar carro --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.livros.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.livros.form')

                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                        <button  class="btn  btn-primary" id="ajaxSubmit" >Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
        'Livro Cadastrado Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('status_f'))
<script>
Swal.fire(
    'Erro ao cadastrar Livro!',
    '',
    'error'
)
</script>
@endif
@endsection

