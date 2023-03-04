@extends('layouts.app')

@section('content')
    <section id="cadastro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center form-box">
                    <div class="align-self-center ">
                        <h2>Editar Cliente</h2>
                        <form class="form" action="{{ route('clientes.update', $clientes->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="nomeContato">Nome:</label>
                            <input type="text" name="nomeContato" value="{{ $clientes->nomeContato }}" required>

                            <label for="cpfContato">CPF:</label>
                            <input type="text" name="cpfContato" value="{{ $clientes->cpfContato }}" required>

                            <label for="dataNascContato">Data de Nascimento:</label>
                            <input type="date" name="dataNascContato" value="{{ $clientes->dataNascContato }}" required>

                            <label for="sexoContato">Sexo:</label>
                            <select name="sexoContato" required>
                                <option value="M" @if ($clientes->sexoContato == 'M') selected @endif>Masculino</option>
                                <option value="F" @if ($clientes->sexoContato == 'F') selected @endif>Feminino</option>
                            </select>

                            <label for="estadoContato">Estado:</label>
                            <input type="text" name="estadoContato" value="{{ $clientes->estadoContato }}" required>

                            <label for="cidadeContato">Cidade:</label>
                            <input type="text" name="cidadeContato" value="{{ $clientes->cidadeContato }}" required>

                            <input type="submit" value="Salvar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

