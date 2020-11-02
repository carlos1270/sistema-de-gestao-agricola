@extends('layouts.app')

@section('content')
<div class="container-main">
    <div class="row upper-div-2">
        <div class="col-md-3 img-left">

        </div>
        <div class="col-md-9">
            <br>

            <h1 class="marker">Cadastro da OCS</h1>
            <br>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="padding: 0px;">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="formulario">
                <form method="post" action="{{ route('user.coordenador.cadastrarOcs.salvar') }}">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label class="label-static">CNPJ</label>
                            <input class="form-control input-stl" type="number" class="form-control" id="cpnj" name="cnpj" placeholder="CNPJ">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="label-static">Nome</label>
                            <input class="form-control input-stl" type="text" class="form-control" id="nome_entidade" name="nome_entidade" placeholder="Nome completo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label-static">Email</label>
                        <input class="form-control input-stl" type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="label-static">Órgão fiscalizador</label>
                        <input class="form-control input-stl" type="text" class="form-control" id="orgao_fiscalizador" name="orgao_fiscalizador" placeholder="Órgão fiscalizador">
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-4">
                            <label class="label-static">Rua</label>
                            <input class="form-control input-stl" type="text" class="form-control" name="nome_rua" placeholder="Rua">
                        </div>
                        <div class="col-md-2 mb-4">
                            <label class="label-static">Numero</label>
                            <input class="form-control input-stl" type="number" class="form-control" name="numero_casa" placeholder="Numero">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label class="label-static">Bairro</label>
                            <input class="form-control input-stl" type="text" class="form-control" name="bairro" placeholder="Bairro">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label class="label-static">Cidade</label>
                            <input class="form-control input-stl" type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="label-static">Estado</label>
                            <select class="custom-select input-stl" id="estado" name="estado" placeholder="Estado">
                                <option selected disabled value="">Selecionar Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="label-static" for="cep">CEP</label>
                            <input class="form-control input-stl" type="text" class="form-control" id="cep" name="cep" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-4">
                            <label class="label-static" for="data de nascimento">Telefone</label>
                            <input class="form-control input-stl" type="number" class="form-control" name="telefone" placeholder="Telefone">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label class="label-static">Celular</label>
                            <input class="form-control input-stl" type="number" class="form-control" name="celular" placeholder="Celular">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label class="label-static">Fax</label>
                            <input class="form-control input-stl" type="number" class="form-control" name="fax" placeholder="FAX">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label-static">Ponto de Referencia</label>
                        <textarea class="form-control input-stl" id="ponto_referencia" name="ponto_referencia" rows="1"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="label-static">Descrição</label>
                        <textarea class="form-control input-stl" id="descricao" name="descricao" rows="3"></textarea>
                    </div>

                    <button class="btn botao-submit" type="submit">Cadastrar</button>
                    <br>
                    <br>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
