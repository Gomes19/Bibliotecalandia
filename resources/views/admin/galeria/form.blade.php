
                              <div class="form-group col-md-6">
                                <label for="inputState">Carro</label>
                                <select id="inputState5" class="form-control" name="id_carro">

                                  @foreach ($carros as $carro)
                                      <option name="id_carro" value="{{ $carro->id }} ">{{ $carro->marca }} {{ $carro->modelo }}</option>
                                  @endforeach
                                </select>
                              </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="vc_path">Imagem</label>
                                    <input type="file" id="vc_path" class="form-control" name="vc_path"
                                        placeholder="vc_path" value="{{ isset($galeria->vc_path) ? $galeria->vc_path : "" }}">
                                </div>
                            </div>


