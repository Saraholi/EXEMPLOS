<?php

@session_start();
@$_SESSION["importInclude"] = $_SERVER["DOCUMENT_ROOT"] . "/Mobshare/CMS/include.php";
require_once($_SESSION["importInclude"]); 

require_once(IMPORT_VEICULO);
require_once(IMPORT_VEICULO_CONTROLLER);

require_once(IMPORT_FOTO_VEICULO_CONTROLLER);
require_once(IMPORT_FOTO_VEICULO);

$controllerVeiculo = new controllerVeiculo();

$veiculos[] = new Veiculo();


$controllerFoto_veiculo = new controllerFoto_Veiculo();

$foto_veiculo[] = new Foto_Veiculo();




$veiculos = $controllerVeiculo->listarVeiculos();

$foto_veiculo = $controllerFoto_veiculo->listarFotoFrontal();

//var_dump($foto_veiculo);



?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="images/anuncios.png" />
    <title>Veículos | Mob'Share</title>
</head>
<body>
    <!-- HEADER DO MENU-->
    <header>
        <!-- onde fica o login-->
        <div class="logotipo">
            <div class="img-logotipo">
                   <a href="index.html"><img src="images/logo.png" width="364" height="150"  alt="MobShare"></a>
            </div>
        </div>
        <!-- menu de navegação do cabeçalho -->
        <div class="menu-header">
            <nav class="menu-item">
                <a href="anuncios.html">Anuncios</a>
                <a href="comofunciona.html">Como funciona</a>
                <a href="avaliacoesdomes.html">Melhores do Mês</a>
            </nav>
        </div>
        <!-- caixa onde ficará o botão de login-->
        <div class="box-login">
            <div class="botao-login">
                   Login
            </div>
            <div class="texto-cadastrar">
                <h1>ou faça seu Cadastro!</h1>
            </div>
        </div>    
    </header>
    <!-- CAIXA QUE SEGURA O CONTEÚDO EMBAIXO DO MENU -->
    <div class="content">
        
        <div class="box-anuncios">
            <div class="box-pesquisa-anucios">
                <input type="text" class="anuncios-pesquisa" placeholder="Digite o que procura!"> 
            </div>
            <div class="box-anuncios-veiculos">
                <div class="box-filtros">
                    <div class="filtros">
                        <h1>Marca:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="filtros">
                        <h1>Modelo:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="filtros">
                        <h1>Cor:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="filtros">
                        <h1>Características:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="filtros">
                        <h1>KM:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="filtros">
                        <h1>Região:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="filtros">
                        <h1>Avaliação:</h1>
                        <select class="select">
                            <option>Fiat</option>
                            <option>BMW</option>
                            <option>Chevrolet</option>
                        </select>
                    </div>
                    <div class="botao-filtrar">
                        Filtrar
                    </div>
                </div>
                <div class="box-veiculos">
                    <?php
                        //foreach($veiculos as $veiculo){
                        $i = 0;
                        while($i < count($veiculos)){

                        

                        
                    ?>
                    <div class="box-veiculo-anuncio">
                        <div class="imagem-anuncio">
                                <img src="<?php echo(PASTA_PROJETOA.$foto_veiculo[$i]->getFotoVeiculo()) ?>" width="400" height="225" alt="veiculo">
                                
                        </div>
                         <div class="texto-modelo">
                             <?php echo($veiculos[$i]->getModelo()) ?>
                        </div>
                         <div class="texto-km">
                             <?php echo($veiculos[$i]->getQuilometragem()." km") ?>
                        </div>
                        <div class="texto-regiao">
                        Capital
                        </div>
                        <div class="texto-avaliacao">
                        *****
                        </div>
                        <div class="botao-veja">
                            Alugar
                        </div>
                    </div>

                    <?php
                    $i++;
                        }

                    ?>

                </div>
            </div>

        </div>

    </div>
    <!-- RODAPÉ-->
    <footer>
    <div class="rodape">
        <div class="menu-rodape">
            <!--PAGINAS DO RODAPÉ-->
            <div class="titulo-menu-rodape">
                <h1>Páginas:</h1>
            </div>
            <nav class="menu-rodape-item">
                    <a href="termosdeuso.html">Termos de Uso</a>
                    <a href="duvidasfreq.html">Duvidas Frequentes</a>
                    <a href="parceiros.html">Parceiros</a>
                    <a href="faleconosco.html">Fale Conosco</a>
            </nav>
        </div>
        <div class="logotipo-rodape">
            <!-- LOGOTIPO NO RODAPÉ-->
            <div class="img-logo-rodape">
                    <img src="images/logo.png" width="340" height="150"  alt="MobShare">
            </div>
            <!-- IMAGENS DAS REDES SOCIAIS-->
            <div class="img-redes-sociais">
                    <img src="images/facebook-logo-button (1).png" width="30" height="30" alt="icone de rede social">
                    <img src="images/google-plus-logo-button.png" width="30" height="30"  alt="icone de rede social">
                    <img src="images/instagram-logo (1).png" width="30" height="30" alt="icone de rede social">
                    <img src="images/twitter-logo-button (1).png" width="30" height="30" alt="icone de rede social">
                    <img src="images/linkedin-logo-button.png" width="30" height="30" alt="icone de rede social">
            </div>

        </div>
        <!-- LISTA DE INFORMAÇÕES PARA CONTATO-->
        <div class="contato-rodape">
                <div class="contato-menu-rodape">
                    <h1>Contato:</h1>
                </div>
                <nav class="contato-rodape-item">
                    <a>
                        <img src="images/map.png" width="20" height="20"  alt="icone de endereço">
                         Av Felippo Holt, 543 - São Paulo</a>
                    <a>
                        <img src="images/phone-call.png" width="20" height="20"  alt="icone de telefone">
                         (11) 5464-6757</a>
                    <a>
                        <img src="images/envelope.png" width="20" height="20"  alt="icone de email">
                         mobshare@gmail.com</a>
                </nav>
        </div>
    </div>
        <!-- TEXTO SOBRE OS DIREITOS AUTORAIS, NÃO MEXER NO CSS-->
        <div class="texto-direitos">
            <h1>© Todos os Direitos Resevados - 2019 | Desenvolvido por Kliss Solutions</h1>
        </div>

    </footer>

</body>

</html>