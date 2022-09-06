<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC de uma pessoa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Calculo IMC</h2>
            <div class="conteudo-painel">
                <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.</p>
                <p>O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
                <p>Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
                
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do Índice</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">

                    <label for="peso">Peso da pessoa:</label>
                    <input type="text" class="campoTexto"  name="peso" required/>

                    <label for="altura">Altura da Pessoa:</label>
                    <input type="text" class="campoTexto" name="altura" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>

    </main>
</body>
</html>