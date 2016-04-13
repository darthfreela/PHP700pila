<?
//INCLUDES
    include('bd.php');

    $banco = new banco;

    $queryPesquisa = "SELECT nome_empresa, nome_sindicato, DATE_FORMAT(vencimento, '%Y-%m-%d') df, numero_parcela, parcelas.id_parcela FROM empresas

    INNER JOIN sindicatos ON empresas.sindicato = sindicatos.id_sindicato
    INNER JOIN parcela_empresa ON sindicatos.id_sindicato=parcela_empresa.id_sindicato
    INNER JOIN parcelas ON parcelas.id_parcela=parcela_empresa.id_parcela";

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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
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
                        <a href="planejamento.php"><i class="fa fa-puzzle-piece fa-2x"></i>Cadastrar Empresas</a>
                    </li>
                    <li>
                        <a href="editar.php"><i class="fa fa-file-o fa-2x"></i>Editar Sindicato</a>
                    </li>					
					<li>
                        <a class="active-menu" href="resumo.php"><i class="fa fa-newspaper-o fa-2x"></i>Resumo</a>
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
                        <h2>Relatório</h2>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Relatório
                            </div>
                            <div class="panel-body">
								<div class="row">
                                    <div class="col-md-13">
										<table class="table table-striped " id="idtabela">
											<thead>
												<tr>
													<th>#</th>
													<th>Nome Empresa</th>
													<th>Sindicato</th>
													<th>Quantidade de Parcelas</th>
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
                                                            $timestamp = strtotime("+10 days");
                                                            $dataRegistrada = strtotime($empresas["df"]);
                                                            if($dataRegistrada >= strtotime($data_atual)) {
                                                               

                                                ?>            
                                                             <tr <?if ($dataRegistrada <= $timestamp){?>class="error"<?}?>>
                                                                <td><?=$count?></td>
                                                                <td><?=$empresas['nome_empresa']?></td>
                                                                <td><?=$empresas['nome_sindicato']?></td>
                                                                <td><?=$empresas['numero_parcela']?></td>
                                                                <td><?=date('d/m/y', strtotime($empresas["df"]))?></td>
                                                            </tr>
                                                        <?php
                                                        $count++;    
                                                        }
                                                        }while($empresas = mysql_fetch_assoc($dados));
                                                    }

                                                ?>
                                            </tbody>
										</table>
                                        <form action="apbd.php">
                                            <button id="apbd" type="submit" class="btn btn-default">Limpar Banco de Dados</button>
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
