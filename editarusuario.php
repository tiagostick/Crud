<?php
include_once 'connect.php';

?>
<h1>Editar Usuario</h1>
<?php
    $sql= "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $res= $connect->query($sql);
    $row = $res->fetch_object();
?>
 <form action="?page=salvar&acao=editar" method="post">
     <input type="hidden" name="acao" value="editar">
     <input type="hidden" name="id" value="<?php print $row->id;?>">
           <h3>Nome</h3>
            <input class="mb-3" name="nome" type="text"  value="<?php print$row->nome;?>">
            <h3>CPF</h3>
            <input class="mb-3" name="cpf" type="integer" value="<?php print$row->cpf;?>">
            <h3>RG</h3>
            <input class="mb-3" name="rg" type="integer"  value="<?php print$row->rg;?>">
            <h3>Data de nascimento</h3>
            <input class="mb-3" name="datanasc" type="date"  value="<?php print$row->datanasc;?>">
            <h3>Nome da Mãe</h3>
            <input class="mb-3" name="nomemae" type="text" value="<?php print$row->nomemae;?>">
            <h3>Nome do Pai</h3>
            <input class="mb-3" name="nomepai" type="text" value="<?php print$row->nomepai;?>">
            <h3>Email</h3>
            <input class="mb-3" name="email" type="email"  value="<?php print$row->email;?>">
            <h3>Senha</h3>
            <input class="mb-3" name="senha" type="password" class="form-control" required><br>
            <button type="submit" class="btn btn-primary">Salvar </button>
        </form>