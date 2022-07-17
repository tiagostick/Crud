<?php
include_once 'connect.php';
?>

<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome=$_POST["nome"];
        $cpf=$_POST["cpf"];
        $rg=$_POST["rg"];
        $datanasc=$_POST["datanasc"];
        $nomemae=$_POST["nomemae"];
        $nomepai=$_POST["nomepai"];
        $email=$_POST["email"];
        $senha=md5($_POST["senha"]);

        $sql = "INSERT INTO usuario (nome, cpf, rg, datanasc, nomemae, nomepai, email, senha)
        VALUES ('{$nome}','{$cpf}','{$rg}','{$datanasc}','{$nomemae}','{$nomepai}','{$email}','{$senha}')";
        $res = $connect->query($sql);
        if($res==true){
            print "<script>alert('Cadastro feito com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'editar':
        $nome=$_POST["nome"];
        $cpf=$_POST["cpf"];
        $rg=$_POST["rg"];
        $datanasc=$_POST["datanasc"];
        $nomemae=$_POST["nomemae"];
        $nomepai=$_POST["nomepai"];
        $email=$_POST["email"];
        $senha=md5($_POST["senha"]);

        $sql = "UPDATE usuario SET nome='{$nome}', cpf='{$cpf}', rg='{$rg}', datanasc='{$datanasc}', nomemae='{$nomemae}', 
            nomepai='{$nomepai}', email='{$email}', senha='{$senha}' WHERE id=".$_REQUEST["id"];
        $res= $connect->query($sql);
        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listarusuarios';</script>";
        }else {
            print "<script>alert('Erro ao editar');</script>";
            print "<script>location.href='?page=listarusuarios';</script>";
        }
        break;
    case 'deletar':
        $sql= "DELETE FROM usuario WHERE id=".$_REQUEST["id"];
        $res= $connect->query($sql);

        if($res==true){
            print "<script>alert('Deletado com sucesso');</script>";
            print "<script>location.href='?page=listarusuarios';</script>";
        }else {
            print "<script>alert('Erro ao deletar');</script>";
            print "<script>location.href='?page=listarusuarios';</script>";
        }
        break;
        break;
    }