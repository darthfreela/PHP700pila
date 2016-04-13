<?

    //INCLUDES
    include('bd.php');

    $banco = new banco;

    if(isset($_POST['nome'])){
        $nomeEmpresa = $_POST['nome'];
        $sindicato = $_POST['sindicato'];
        
        $queryExecuta = "INSERT INTO empresas (nome_empresa, sindicato) VALUES ('$nomeEmpresa', '$sindicato')";

        $banco->executa($queryExecuta);
    }    
        $queryPesquisa = "SELECT nome_empresa, sindicato FROM empresas ";

        $dados = $banco->pesquisa($queryPesquisa);
        $empresas = mysql_fetch_assoc($dados);
        $total = mysql_num_rows($dados);

        //retorna os sindicatos
        $queryPesquisaSindicatos = "SELECT id_sindicato, nome_sindicato FROM sindicatos ";

        $dadosSindicato = $banco->pesquisa($queryPesquisaSindicatos);
        $sindicatos = mysql_fetch_assoc($dadosSindicato);
        $totalSindicatos = mysql_num_rows($dadosSindicato);
   

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
                        <a class="active-menu" href="planejamento.php"><i class="fa fa-puzzle-piece fa-2x"></i>Cadastrar Empresas</a>
                    </li>
                    <li>
                        <a href="editar.php"><i class="fa fa-file-o fa-2x"></i>Editar Sindicato</a>
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
                                        <form method="POST" action="planejamento.php" role="form">
                                            <div class="col-md-5" style="margin-top:3%">
                                                <label>Nome da Empresa:</label>
                                                <input type="text" name="nome" class="form-control">					
                                            </div>
                                            <div class="col-md-5 select-estiloso" style="margin-top:3%">
                                                <label>Sindicato:</label>
                                            </br>
                                            <select name="sindicato">
                                            <?php
                                                    if($totalSindicatos > 0){
                                                        do{

                                                ?>            
                                                            <option value="<?=$sindicatos['id_sindicato']?>"><?=$sindicatos['nome_sindicato']?></option>
                                                              
                                                        <?php    
                                                        }while($sindicatos = mysql_fetch_assoc($dadosSindicato));
                                                    }

                                                ?>
                                              
                                          </select>
                                      </div>
                                      
                                    <div class="col-md-5" style="margin-top:3%; margin-bottom: 3%">
                                        <button type="submit" class="btn btn-default">Salvar</button>
                                        <button type="reset" class="btn btn-primary">Voltar</butto>
                                        </div>
                                        <table class="table table-striped" id="idtabela">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome Empresa</th>
                                                    <th>Sindicato</th>
                                                    

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--formatar no bd assim -->
                                                <?php
                                                    if($total > 0){
                                                        $count = 1;
                                                        do{
                                                            

                                                ?>            
                                                             <tr class="default">
                                                                <td><?=$count?></td>
                                                                <td><?=$empresas['nome_empresa']?></td>
                                                                <td><?=$empresas['sindicato']?></td>
                                                            </tr>
                                                        <?php
                                                        $count++;    
                                                        }while($empresas = mysql_fetch_assoc($dados));
                                                    }

                                                ?>
                                                

                                            </tbody>
                                        </table>


                                        
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
<?php // tira o resultado da busca da memória
 mysql_free_result($dados);
 ?>
