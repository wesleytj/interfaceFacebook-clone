<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Front-end | Wesley Jacques</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <!--logo-->

            <form action="" method="post" class="form-login">
                <div class="form-element">
                    <span>E-mail ou telefone:</span>
                    <input type="email" name="email-login" id="">
                </div>
                <!--form-element-->
                <div class="form-element">
                    <span>Senha:</span>
                    <input type="password" name="pass-login" id="">
                </div>
                <!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div>
                <!--form-element-->
                <span>Esqueceu a conta?</span>
            </form>
            <!--form-login-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="map">
                <p>O Facebook ajuda você a se conectar e
                    compartilhar com as pessoas que fazem
                    parte da sua vida.</p>
                <div class="img-mapa">
                    <img src="img/img-mapa.png" alt="img-mapa">
                </div>
                <!--img-mapa-->
            </div>
            <!--map-->

            <div class="cadastrar">
                <h2>Abra uma conta.</h2>
                <h4>É gratuito e sempre será.</h4>

                <form class="cadastrar" action="">
                    <div class="element-register">
                        <input type="text" name="nome" id="" placeholder="Nome">
                        <input type="text" name="sobrenome" id="" placeholder="Sobrenome">
                    </div>
                    <!--element-register-->
                    <div class="element-register">
                        <input type="text" name="cel-email" placeholder="Celular ou email">
                    </div>
                    <!--element-register-->
                    <div class="element-register">
                        <input type="password" name="senha" placeholder="Nova senha">
                    </div>
                    <!--element-register-->
                </form>
                <!--cadastrar-->
                <div class="clear"></div>

                <h3>Data de nascimento</h3>
                <div class="select-nasc">
                    <select name="dia-nasc" id="" class="nascimento">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                        ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <!--nascimento-->
                    <select name="mes-nasc" id="" class="nascimento">
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                    <!--nascimento-->
                    <select name="ano-nasc" id="" class="nascimento">
                        <?php
                        $ano = strftime("%Y");
                        for ($i = 1960; $i <= $ano; $i++) {
                        ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!--nascimento-->
                <div class="clear"></div>
                <div class="sexo">
                    <input type="radio" name="sexo" id="" value="female">
                    <label for="female">Feminino</label>
                    <input type="radio" name="sexo" id="" value="male">
                    <label for="male">Masculino</label>
                </div>
                <!--sexo-->
                <p>Ao clicar em Cadastre-se, você concorda com nossos <a href="#">Termos, Política
                        de Dados e Política de Cookies</a>. Você pode receber notificações por SMS e
                    pode cancelar isso quando quiser.</p>

                <input type="submit" name="acao" value="Cadastre-se">
                <p><a href="#">Criar uma Página</a> para uma celebridade, banda ou empresa.</p>
            </div>
            <!--cadastrar-->

            <div class="clear"></div>
        </div>
        <!--center-->
    </section>
    <!--main-->

    <section class="linguas">
        <div class="center">
            <a href="#" class="selected">Português (BR)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#">Français (France)</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsch</a>
            <a href="#">العربية</a>
            <a href="#">हिन्दी</a>
            <a href="#">中文(简体)</a>
            <a href="#">日本語</a>
            <button>+</button>
        </div><!--center-->
    </section><!--linguas-->

    <footer>
        <div class="center">
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Watch</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Categoria de Páginas</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Locais</a>
            <a href="#">Marketplace</a>
            <a href="#">Facebook Pay</a>
            <a href="#">Grupos</a>
            <a href="#">Vagas de Emprego</a>
            <a href="#">Oculus</a>
            <a href="#">Portal</a>
            <a href="#">Instagram</a>
            <a href="#">Local</a>
            <a href="#">Campanhas de arrecadação de fundos</a>
            <a href="#">Serviços</a>
            <a href="#">Central de Informações de Votação</a>
            <a href="#">Sobre</a>
            <a href="#">Criar anúncio</a>
            <a href="#">Criar Página</a>
            <a href="#">Desenvolvedores</a>
            <a href="#">Carreiras</a>
            <a href="#">Privacidade</a>
            <a href="#">Cookies</a>
            <a href="#">Escolhas para anúncios</a>
            <a href="#">Termos</a>
            <a href="#">Ajuda</a>
            <span>Facebook © 2021</span>
        </div>
    </footer>

</body>

</html>