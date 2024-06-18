
         <div class="row">
                           
                             <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="rfid">TAG RFID</label>
                                  <input class="form-control" type="text" id="meu-input" name="tag">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Sub-Categoria</label>
                                <select class="select2-basic-single js-states form-select form-control" name="id_user_emprestimos" style="width: 100%;">
                                    @foreach ($user_emprestimos as $estudante)
                                                <option value="{{ $estudante->id }} ">{{ $estudante->processo }}</option>
                                    @endforeach
                                 </select>
                               
                            </div>
                           
                          

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="entrega">Data de Lançamento</label>
                                    <input type="date" id="entrega" class="form-control" name="entrega"
                                        placeholder="entrega" value="{{ isset($livro->entrega) ? $livro->entrega : "" }}">
                                </div>
                            </div>
                            
                        </div>
                    