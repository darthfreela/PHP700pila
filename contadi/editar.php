<?php

    //INCLUDES
    include('bd.php');

    $banco = new banco;
        
    //PARCELA 1
    if(isset($_POST['parcela1'])){
            $parcela1 = $_POST['parcela1'];
            $id1 = $_POST['id1'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela1', '%d/%m/%Y') WHERE id_parcela = '$id1'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 2
    if(isset($_POST['parcela2'])){
            $parcela2 = $_POST['parcela2'];
            $id2 = $_POST['id2'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela2', '%d/%m/%Y') WHERE id_parcela = '$id2'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 3
    if(isset($_POST['parcela3'])){
            $parcela3 = $_POST['parcela3'];
            $id3 = $_POST['id3'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela3', '%d/%m/%Y') WHERE id_parcela = '$id3'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 4
    if(isset($_POST['parcela4'])){
            $parcela4 = $_POST['parcela4'];
            $id4 = $_POST['id4'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela4', '%d/%m/%Y') WHERE id_parcela = '$id4'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 5
    if(isset($_POST['parcela5'])){
            $parcela5 = $_POST['parcela5'];
            $id5 = $_POST['id5'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela5', '%d/%m/%Y') WHERE id_parcela = '$id5'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 6
    if(isset($_POST['parcela6'])){
            $parcela6 = $_POST['parcela6'];
            $id6 = $_POST['id6'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela6', '%d/%m/%Y') WHERE id_parcela = '$id6'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 7
    if(isset($_POST['parcela7'])){
            $parcela7 = $_POST['parcela7'];
            $id7 = $_POST['id7'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela7', '%d/%m/%Y') WHERE id_parcela = '$id7'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 8
    if(isset($_POST['parcela8'])){
            $parcela8 = $_POST['parcela8'];
            $id8 = $_POST['id8'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela8', '%d/%m/%Y') WHERE id_parcela = '$id8'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 9
    if(isset($_POST['parcela9'])){
            $parcela9 = $_POST['parcela9'];
            $id9 = $_POST['id9'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela9', '%d/%m/%Y') WHERE id_parcela = '$id9'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 10
    if(isset($_POST['parcela10'])){
            $parcela10 = $_POST['parcela10'];
            $id10 = $_POST['id10'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela10', '%d/%m/%Y') WHERE id_parcela = '$id10'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 11
    if(isset($_POST['parcela11'])){
            $parcela11 = $_POST['parcela11'];
            $id11 = $_POST['id11'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela11', '%d/%m/%Y') WHERE id_parcela = '$id11'";
            $banco->executa($queryExecuta);
    }
    //PARCELA 12
    if(isset($_POST['parcela12'])){
            $parcela12 = $_POST['parcela12'];
            $id12 = $_POST['id12'];
            //cadastra parcelas
           
            
            $queryExecuta = "UPDATE parcelas SET vencimento = STR_TO_DATE('$parcela12', '%d/%m/%Y') WHERE id_parcela = '$id12'";
            $banco->executa($queryExecuta);
    }


    if(isset($_POST['btPesquisa'])){
        $search = $_POST['btPesquisa'];
    }

    $queryPesquisa = "SELECT nome_empresa, nome_sindicato, DATE_FORMAT(vencimento, '%Y-%m-%d') df, numero_parcela, parcelas.id_parcela FROM empresas

    INNER JOIN sindicatos ON empresas.sindicato = sindicatos.id_sindicato
    INNER JOIN parcela_empresa ON sindicatos.id_sindicato=parcela_empresa.id_sindicato
    INNER JOIN parcelas ON parcelas.id_parcela=parcela_empresa.id_parcela
    WHERE nome_sindicato = '$search'
    ";

    $dados = $banco->pesquisa($queryPesquisa);
    $empresas = mysql_fetch_assoc($dados);
    $total = mysql_num_rows($dados);


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.metisMenu.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript">
    </script>
    <script>
       function Formatadata(Campo, teclapres){
          var tecla = teclapres.keyCode;
          var vr = new String(Campo.value);
          vr = vr.replace("/", "");
          vr = vr.replace("/", "");
          vr = vr.replace("/", "");
          tam = vr.length + 1;
          if (tecla != 8 && tecla != 8)
          {
             if (tam > 0 && tam < 2)
                Campo.value = vr.substr(0, 2) ;
            if (tam > 2 && tam < 4)
                Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2);
            if (tam > 4 && tam < 7)
                Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/' + vr.substr(4, 7);
        }
    }
</script>
<!--editar tabela-->
<script type="text/javascript">
    function tornarTabelaEditavel(tabela){
                // Obtém todas as tds da tabela fornecida.
                var tdlist = tabela.getElementsByTagName("td");

                for(var i = 4; tdlist[i]; i=i+5) {
                    // Adiciona o evento double click em cada td da tabela.
                    tdlist[i].ondblclick = function() {
                        // Se for texto, muda para input.
                        if(this.firstChild.nodeType == 3) {
                            // Cria um campo de texto editável e insere o valor da td nesse campo.
                            var campo = document.createElement("input");
                            campo.onkeyup=function(){Formatadata(this,event)};
                            campo.setAttribute('maxlength', 10);
                            campo.value = this.firstChild.nodeValue;

                            // Substitui o texto da td pelo campo.
                            this.replaceChild(campo, this.firstChild);

                            campo.select();

                            // Faz o processo inverso ao perder o foco.
                            campo.onblur = function() {
                                this.parentNode.replaceChild(document.createTextNode(campo.value), this);
                            }
                        }
                    }
                }
            }

            window.onload = function() {
                tornarTabelaEditavel(document.getElementById('idtabela'));
            }

            $(document).ready(function(){
                $('#bt').hover(function(){
                    
                    $('#h1').val($('#p1').text());
                   
                });
            });
        </script>

    </head>
    <body>
        <div id="involucro">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>CONTADI</span></a>
                </div>
            </nav>
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="assets/img/find_user.png" class="imagm-usuario img-responsive" />
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-2x"></i>Inicial</a>
                        </li>
                        <li>
                            <a href="planejamento.php"><i class="fa fa-puzzle-piece fa-2x"></i>Cadastrar Empresa</a>
                        </li>
                        <li>
                            <a class="active-menu" href="editar.php"><i class="fa fa-file-o fa-2x"></i>Editar Sindicato</a>
                        </li>
                        <li>
                            <a href="resumo.php"><i class="fa fa-newspaper-o fa-2x"></i>Resumo</a>
                        </li>
                        <li>
                            <a href="sindicato.php"><i class="fa fa-flag-o fa-2x"></i>Sindicatos</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="involucro-pagina">
                <div id="paina-interior">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Cadastro 
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <form method="POST" action="editar.php" role="form">
                                                <div class="col-md-5" style="margin-top:3%">
                                                    <label>Nome do Sindicato:</label>
                                                    <input type="text" name='btPesquisa' class="form-control">
                                                    <input style="margin-top: 3%" type="submit" id="buscar" class="btn btn-primary" value="Buscar"> 					
                                                </div>
                                                
                                                
                                                <table class="table table-striped" id="idtabela">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nome Empresa</th>
                                                            <th>Sindicato</th>
                                                            <th>Parcela</th>
                                                            <th>Vencimento</th>

                                                        </tr>
                                                    </thead>
                                                   <tbody>
                                                <!--formatar no bd assim -->
                                                <?php
                                                    if($total > 0){
                                                        $count = 1;
                                                        date_default_timezone_set('America/Sao_Paulo');
                                                        $data_atual = date("Y-m-d");
                                                        do{
                                                            $data_vencimento = $empresas['df'];
                                                            
                                                        if(strtotime($data_vencimento) >= strtotime($data_atual)) {
                                                           
                                                            

                                                ?>            
                                                                <tr class="default">
                                                                    <td><?=$count?></td>
                                                                    <td><?=$empresas['nome_empresa']?></td>
                                                                    <td><?=$empresas['nome_sindicato']?></td>
                                                                    <td><?=$empresas['numero_parcela']?></td>
                                                                    <td id="p<?=$count?>"><?=date('d/m/y', strtotime($empresas["df"]))?></td>
                                                                    <input  id="h<?=$count?>" name="parcela<?=$count?>" type="hidden" value="<?=date('d/m/y', strtotime($empresas['df']))?>" />

                                                                    <input name="id<?=$count?>" type="hidden" value="<?=$empresas['id_parcela']?>" />
                                                                </tr>
                                                            <?php
                                                            $count++;    
                                                            
                                                        }
                                                    }while($empresas = mysql_fetch_assoc($dados));
                                                    }

                                                ?>
                                            </tbody>
                                                </table>

                                                <div class="col-md-5" style="margin-top:3%">
                                                    <button type="submit" id="bt" class="btn btn-default">Salvar</button>
                                                    <button type="reset" class="btn btn-primary">Voltar</butto>
                                                    </div>


                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>




