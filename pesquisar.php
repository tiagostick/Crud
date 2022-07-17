<?php
include_once 'connect.php';
include_once 'index.php';
?>
 <h1>Busca de Usuario</h1>
 <table class='table table-hover table-bordered'>
                <tbody>
                    <?php
                    $pesquisar=$_POST["pesquisar"];
                    $query = "SELECT * FROM  usuario WHERE nome LIKE '%$pesquisar%'";
                    $res = $connect->query($query);
                    $qtd=$res->num_rows;

                    if($qtd >0){
                        print "<tr>";
                        print "<th>#</th>";
                        print "<th>Nome</th>";
                        print "<th>CPF</th>";
                        print "<th>RG</th>";
                        print "<th>Data de Nascimento</th>";
                        print "<th>Nome do pai</th>";
                        print "<th>Nome da mãe</th>";
                        print "<th>Data de Cadastro</th>";
                        print "</tr>";
                        while($row = $res->fetch_object()){
                            print "<tr>";
                            print "<td>".$row->id."</td>";
                            print "<td>".$row->nome."</td>";
                            print "<td>".$row->cpf."</td>";
                            print "<td>".$row->rg."</td>";
                            print "<td>".$row->datanasc."</td>";
                            print "<td>".$row->nomepai."</td>";
                            print "<td>".$row->nomemae."</td>";
                            print "<td>".$row->datacadastro."</td>";
                           
                            print "<td> <button onclick=\"
                                location.href='?page=editar&id=".$row->id."';\"
                                class='btn btn-success'>Editar</button></td>";

                            print "<td><button onclick=\"
                                if(confirm('Tem certeza que deseja deletar?'))
                                    {location.href='?page=salvar&acao=deletar&id=".$row->id."';}
                                else{false;}\"
                                class='btn btn-danger'>Deletar</button></td>";
                            print "</tr>";
                        }
                    }else{
                        print "nenhum resultado encontrado";
                    }
                    ?>
                <?php  
                ?>
               
                </tbody>
           </table>