 <div class="container">
        <h1>Criar evento</h1>
        <form action="{{ route('eventos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="titulo">Título do evento</label>
                <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" id="titulo" value="{{ old('titulo') }}" required>
                @error('titulo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="descricao">Descrição do evento</label>
                <textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao" id="descricao">{{ old('descricao') }}</textarea>
                @error('descricao')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="data_hora">Data e hora do evento</label>
                <input type="datetime-local" class="form-control @error('data_hora') is-invalid @enderror" name="data_hora" id="data_hora" value="{{ old('data_hora') }}" required>
                @error('data_hora')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="duracao">Duração do evento (em minutos)</label>
                <input type="number" class="form-control @error('duracao') is-invalid @enderror" name="duracao" id="duracao" value="{{ old('duracao') }}">
                @error('duracao')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="sala_id">ID da sala do Zoom</label>
                <input type="number" class="form-control @error('sala_id') is-invalid @enderror" name="sala_id" id="sala_id" value="{{ old('sala_id') }}">
                @error('sala_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="senha">Senha da sala do Zoom</label>
                <input type="text" class="form-control @error('senha') is-invalid @enderror" name="senha" id="senha" value="{{ old('senha') }}">
                @error('senha')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Criar evento</button>
        </form>
    </div>