@extends('layouts.app')

@section('content')
    @include('components/flash-menssage')

    <section id="pesquisa">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex form-box">
                    <div class="align-self-center">
                        <h2>Consulta Cliente</h2>
                        <form class="form"action="{{ route('consulta.index') }}" method="GET">
                            @csrf
                            <label for="cpfContato">CPF:</label>
                            <input type="text" id="cpfContato" name="cpfContato" placeholder=" 354.678.984-99" value="{{ request('cpfContato') }}">
                            
                            <label for="nomeContato">Nome:</label>
                            <input type="text" id="nomeContato" name="nomeContato" placeholder=" Digite seu nome" value="{{ request('nomeContato') }}">
                            
                            <label for="dataNascContato">Data Nascimento:</label>
                            <input type="date" id="dataNascContato" name="dataNascContato" value="{{ request('dataNascContato') }}">
                            
                            <label for="sexoContato">Sexo:</label>
                            <input type="radio" id="sexoM" name="sexoContato" value="M">
                            <span>Masculino</span>
                            <input type="radio" id="sexoF" name="sexoContato" value="F">
                            <span>Feminino</span>
                            <br>
                            <label for="enderecoContato">Endereço:</label>
                            <input type="text" id="enderecoContato" name="enderecoContato" placeholder=" Rua 9³/4" value="{{ request('enderecoContato') }}">
                            
                            <label for="estadoContato">Estato:</label>
                            <select id="estadoContato" name="estadoContato">
                                <option value="">Selecione</option>
                                <option value="{{ request('estadoContato') }}">PE</option>
                                <option value="{{ request('estadoContato') }}">SP</option>
                                <option value="{{ request('estadoContato') }}">RJ</option>
                            </select>
                            
                            <label for="cidadeContato">Cidade:</label>
                            <select id="cidadeContato" name="cidadeContato">
                                <option value="">Selecione</option>
                                <option value="{{ request('cidadeContato') }}">Recife</option>
                                <option value="{{ request('cidadeContato') }}">Santos</option>
                                <option value="{{ request('cidadeContato') }}">Niterói</option>
                            </select>
                            <br>
                            <div class="d-flex justify-content-end btn-cadastro">
                                <input class="btn btn-primary" type="submit" name="btnPesquisa" value="Pesquisar">
                                
                                <input class="btn btn-secondary" type="submit" name="btnLimpar" value="Limpar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cadastro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center consultaBox">
                    <div class="align-self-center">
                        <h2>Resultado da Pesquisa</h2>
                        <table>
                            <thead>
                                <th></th>
                                <th></th>
                                <!--<th>ID</th>-->
                                <th>Cliente</th>
                                <th>CPF</th>
                                <th>Data de Nasc</th>
                                <th>Estato</th>
                                <th>Cidade</th>
                                <th>Sexo</th>
                                
                            </thead>
                            <tbody>
                            @foreach ($consulta as $cadastro)
                                <tr>
                                    <td><a class="btn btn-success" href="{{ route('clientes.edit', $cadastro->id) }}">Editar</a></td>
                                    <td>
                                    <form action="{{ route('cliente.destroy', $cadastro->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                    </td>
                                    <!--<td>{{ $cadastro->id }}</td>-->
                                    <td>{{ $cadastro->nomeContato }}</td>
                                    <td>{{ $cadastro->cpfContato }}</td>
                                    <td>{{ $cadastro->dataNascContato }}</td>
                                    <!--<td>{{ $cadastro->enderecoContato }}</td>-->
                                    <td>{{ $cadastro->estadoContato }}</td>
                                    <td>{{ $cadastro->cidadeContato }}</td>
                                    <td>{{ $cadastro->sexoContato }}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>                
    
@endsection
