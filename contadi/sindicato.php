<?php
    //INCLUDES
    include('bd.php');

    $banco = new banco;
    $numero_parcela = 1;
    if(isset($_POST['nome'])){
        $nomeSindicato = $_POST['nome'];

        //cadastra sindicatos
        $queryExecuta = "INSERT INTO sindicatos (nome_sindicato) VALUES ('$nomeSindicato')";
        $idSindicato = $banco->executaid($queryExecuta);
        //PARCELA 1
        if(isset($_POST['parcela1'])){
            $parcela1 = $_POST['parcela1'];
            //cadastra parcelas
            
            
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela1', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);
                   

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 2
        if(isset($_POST['parcela2'])){
            $parcela2 = $_POST['parcela2'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela2', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 3
        if(isset($_POST['parcela3'])){
            $parcela3 = $_POST['parcela3'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela3', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 4
        if(isset($_POST['parcela4'])){
            $parcela4 = $_POST['parcela4'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela4', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 5
        if(isset($_POST['parcela5'])){
            $parcela5 = $_POST['parcela5'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela5', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

           //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
         //PARCELA 6
        if(isset($_POST['parcela6'])){
            $parcela6 = $_POST['parcela6'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela6', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 7
        if(isset($_POST['parcela7'])){
            $parcela7 = $_POST['parcela7'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela7', '%d/%m/%Y')";
           $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 8
        if(isset($_POST['parcela8'])){
            $parcela8 = $_POST['parcela8'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela8', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 9
        if(isset($_POST['parcela9'])){
            $parcela9 = $_POST['parcela9'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela9', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 10
        if(isset($_POST['parcela10'])){
            $parcela10 = $_POST['parcela10'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela10', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 11
        if(isset($_POST['parcela11'])){
            $parcela11 = $_POST['parcela11'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela11', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        //PARCELA 12
        if(isset($_POST['parcela12'])){
            $parcela12 = $_POST['parcela12'];
            //cadastra parcelas
            $queryExecuta = "INSERT INTO parcelas SET vencimento = STR_TO_DATE('$parcela12', '%d/%m/%Y')";
            $idParcela = $banco->executaid($queryExecuta);

            //relaciona parcela com sindicato
            $queryExecuta = "INSERT INTO parcela_empresa (id_parcela, id_sindicato, numero_parcela) VALUES ('$idParcela' ,'$idSindicato', '$numero_parcela')";
            $banco->executa($queryExecuta);

            $numero_parcela++;
        }
        
        
        
    }    
        $queryPesquisa = "SELECT nome_sindicato FROM sindicatos ";

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
                        <a href="resumo.php"><i class="fa fa-newspaper-o fa-2x"></i>Resumo</a>
                    </li>
                    <li>
                        <a class="active-menu" href="sindicato.php"><i class="fa fa-flag-o fa-2x"></i>Sindicatos</a>
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
								Cadastro de Sindicato
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <form role="form" method="POST" action="sindicato.php">
											<div class="col-md-10" style="margin-top:3%">
												<label>Nome do Sindicato:</label>
												<input type="text" name="nome" class="form-control">								
                                            </div>
                                           <!--
                                            <div class="col-md-10" style="margin-top:3%">
                                                <label>Sindicato:</label>
                                                <input type="text" class="form-control">    
                                            </div>
                                            <div class="col-md-10" style="margin-top:3%">
												<label>Quantidade de Parcelas:</label>
												<input type="text" name="dta_ocorrencia" maxlength="10"  class="form-control"/>
											</div>
											
											</br>
											</br>
											<div class="col-md-10" style="margin-top:3%">
												<label>Vencimento:</label>
												<input type="text" name="dta_previsao" maxlength="10" onkeyup="Formatadata(this,event)" class="form-control"/>
											</div>
											</br>
											-->
                                            <div style="margin-top: 3%;" class="col-md-3">
                                        <label>Quantidade de Parcelas:</label>
                                        <input type="text" id="qtdParcela" class="form-control1">
                                        <input type="button" id="addParcela" class="btn btn-primary" value="Adicionar parcelas">                  
                                    </div>   
                                    <div id="parcelas" class="col-md-3">
                                        <label>Nº Parcela</label>
                                        <label style="margin-left: 1em;">Vencimento</label>
                                    </div>
											<div class="col-md-5" style="margin-top:3%">
												<button type="submit" class="btn btn-default">Salvar</button>
												<button type="reset" class="btn btn-primary">Voltar</butto>
											</div>
                                        </form>
                                        <table class="table table-striped tbParcela" id="tbSindicato">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
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
                                                                <td><?=$empresas['nome_sindicato']?></td>
                                                            </tr>
                                                        <?php
                                                        $count++;    
                                                        }while($empresas = mysql_fetch_assoc($dados));
                                                    }

                                                ?>
                                            </tbody>
                                        </table>
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
