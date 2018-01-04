<?php
/**
 * Created by PhpStorm.
 * User: kaleb
 * Date: 14/12/2017
 * Time: 14:13
 */
?>
<script type="text/javascript" src="js/cadastro.js"></script>
<form>
    <div align="center" class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label id="aviso"></label>
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div align="center" class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputName">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputName" placeholder="Nome Completo">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="inputEndereco" placeholder="Endereço">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="inputBairro" placeholder="Bairro">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputAddress2">Data de Nascimento</label>
            <input type="Date" name="nascimento" class="form-control" id="inputDate" placeholder="Nascimento">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputCity">Cargo</label>
            <select type="text" name="cargo" class="form-control" id="inputCargo">
                <option value="1">Pastor</option>
                <option value="2">Evangelista</option>
                <option value="3">Diacono</option>
                <option value="4">Diaconiza</option>
                <option value="5">Presbitero</option>
                <option value="6">Auxiliar</option>
                <option value="7">Membro</option>
                <option value="8">Empresa</option>
            </select>
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-3">
            <label for="inputCity">fisica</label>
            <input type="radio" class="form-control" onclick="tipo(this.value)" name="tipoPessoa" value="1"
                   id="inputFisica">
        </div>
        <div class="form-group col-md-3">
            <label for="inputCity">Jurídica</label>
            <input type="radio" class="form-control" onclick="tipo(this.value)" name="tipoPessoa" value="2"
                   id="inputJuridica">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row" id="cpf" style="display: none">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputCity">CPF</label>
            <input type="text" name="cpf" class="form-control" id="inputCPF">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <div class="row" id="cnpj" style="display: none">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-6">
            <label for="inputCity">CNPJ</label>
            <input type="text" name="cnpj" class="form-control" id="inputCNPJ">
        </div>
        <div class="form-group col-md-3"></div>
    </div>
    <button type="button" id="cadastra" onclick="return cadastraPessoa()" class="btn btn-primary">Cadastrar</button>
    <button type="button" id="editar" class="btn btn-primary">Editar</button>
</form>
