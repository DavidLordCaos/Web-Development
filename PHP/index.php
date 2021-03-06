<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/basico&file=ola">Olá PHP</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/basico&file=html">Integração HTML</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/basico&file=css">Integração CSS</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/basico&file=comentarios">Comentarios em PHP</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/basico&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=int">Tipo Inteiro</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=float">Tipo Float</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=aritmeticas">Operações Aritméticas</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=desafio_precedencia">Desafio Precedência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=string">Tipo String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=desafio_string">Desafio String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=booleano">Booleanos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/tipos&file=conversoes">Conversões</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=basico">Básico Variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=desafio_equacao">Desafio Equação</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=atribuicoes">Atribuições</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=interpolacao">Interpolação</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=variaveis_variaveis">Variáveis variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=desafio_variaveis">Desafio variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=valor_referencia">Valor VS Referência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/variaveis&file=constantes">Constantes</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo amarelo">
                    <h3>Módulo 04 - Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=modulos/controle&file=if_else">If else</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/controle&file=operadores_relacionais">Operadores Relacionais</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/controle&file=desafio_pi">Desafio PI</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/controle&file=operadores_logicos">Operadores Lógicos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/controle&file=desafio_op_logicos">Desafio Operadores Lógicos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=modulos/controle&file=operador_ternario">Operador Ternario</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Desenvolvido por EU <?= date('Y'); ?>
    </footer>
</body>
</html>