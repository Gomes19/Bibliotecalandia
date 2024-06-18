
         <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="vc_nome">Nome</label>
                                    <input type="text" id="marca" class="form-control" placeholder="Nome do Livro"
                                        name="vc_nome" value="{{ isset($livro->vc_nome) ? $livro->vc_nome : "" }}">
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
                             <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="rfid">TAG RFID</label>
                                  <input class="form-control" type="text" id="meu-input" name="tag">
                                </div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="inputState">Sub-Categoria</label>
                                <select id="inputState5" class="form-control" name="categoria">

                                  @foreach ($categorias as $categoria)
                                      <option name="genero" value="{{ $categoria->id }} ">{{ $categoria->vc_nome }}</option>
                                  @endforeach


                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Sub-Categoria</label>
                                <select id="inputState5" class="form-control" name="genero">

                                  @foreach ($sub_categoria as $livro)
                                      <option name="genero" value="{{ $livro->id }} ">{{ $livro->vc_nome }}</option>
                                  @endforeach


                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Partileira</label>
                                <select id="inputState5" class="form-control" name="id_partileira">

                                  @foreach ($partileiras as $partileira)
                                      <option name="genero" value="{{ $partileira->id }} ">{{ $partileira->vc_nome }}</option>
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
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="vc_livro">Livro</label>
                                    <input type="file" id="vc_livro" class="form-control" name="vc_livro"
                                        placeholder="vc_livro" value="{{ isset($livro->vc_livro) ? $livro->vc_livro : "" }}">
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
                    