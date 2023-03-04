@extends('layouts.app')

@section('content')
    <section id="cadastro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex form-box">
                    <div class="align-self-center">
                        <h2>Cadastro Cliente</h2>
                        <form class="form" action="/cadastro" method="POST">
                            @csrf
                            <label for="cpfContato">CPF:</label>
                            <input type="text" id="cpfContato" name="cpfContato" placeholder=" 354.678.984-99">
                            
                            <label for="nomeContato">Nome:</label>
                            <input type="text" id="nomeContato" name="nomeContato" placeholder=" Digite seu nome">
                            
                            <label for="dataNascContato">Data Nascimento:</label>
                            <input type="date" id="dataNascContato" name="dataNascContato">
                            
                            <label for="sexoContato">Sexo:</label>
                            <input type="radio" id="sexoM" name="sexoContato" value="M">
                            <span>Masculino</span>
                            <input type="radio" id="sexoF" name="sexoContato" value="F">
                            <span>Feminino</span>
                            <br>
                            <label for="enderecoContato">Endereço:</label>
                            <input type="text" id="enderecoContato" name="enderecoContato" placeholder=" Rua 9³/4">
                            
                            <label for="estadoContato">Estato:</label>
                            <select id="estadoContato" name="estadoContato">
                                <option value="">Selecione</option>
                                <option value="PE">PE</option>
                                <option value="SP">SP</option>
                                <option value="RJ">RJ</option>
                            </select>
                            
                            <label for="cidadeContato">Cidade:</label>
                            <select id="cidadeContato" name="cidadeContato">
                                <option value="">Selecione</option>
                                <option value="Recife">Recife</option>
                                <option value="Santos">Santos</option>
                                <option value="Niteroi">Niterói</option>
                            </select>
                            <br>
                            <div class="d-flex justify-content-end btn-cadastro">
                                <input class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
                                
                                <input class="btn btn-secondary" type="submit" name="btnLimpar" value="Limpar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
