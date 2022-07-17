<?php
include_once 'connect.php';
?>
 <h1>Cadastrar Usuario</h1>

 <form action="?page=salvar" method="post">
     <input type="hidden" name="acao" value="cadastrar">
           <h3>Nome</h3>
            <input class="mb-3" name="nome" type="text" id="nome" placeholder="Nome completo">
            <h3>CPF</h3>
            <input class="mb-3" name="cpf" type="integer" id="cpf" placeholder="CPF">
            <h3>RG</h3>
            <input class="mb-3" name="rg" type="integer" id="rg" placeholder="RG">
            <h3>Data de nascimento</h3>
            <input class="mb-3" name="datanasc" type="date" id="datanasc" placeholder="Data de Nascimento">
            <h3>Nome da Mãe</h3>
            <input class="mb-3" name="nomemae" type="text" id="nomemae" placeholder="Nome da mãe">
            <h3>Nome do Pai</h3>
            <input class="mb-3" name="nomepai" type="text" id="nomepai" placeholder="Nome do pai">
            <h3>Email</h3>
            <input class="mb-3" name="email" type="email" id="login" placeholder="Email">
            <h3>Senha</h3>
            <input class="mb-3" name="senha" type="password" id="senha" placeholder="Senha"><br>
            <button type="submit" class="btn btn-primary">enviar </button>
        </form>