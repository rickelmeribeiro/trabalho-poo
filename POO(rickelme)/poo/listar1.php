<!doctype html>
<html lang="pr-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="margin-left: 11%">
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">CLASSE</h1>
        <img src="./img/Captura%20de%20tela%202024-06-03%20141826.png" style="width: 50%;margin-left: 26%"
             class="card-img-top d-flex rounded-2" alt="...">
        <div class="card-body">
            <p>
                Uma classe em programação orientada a objetos é um modelo ou um "molde" para criar objetos. Ela define
                os
                atributos (variáveis) e métodos (funções) que todos os objetos de um tipo específico terão em comum.
                Pense em
                uma classe como um plano ou uma planta baixa para construir diferentes instâncias de objetos com
                características
                e comportamentos semelhantes. </p>
            <p>
                Por exemplo, se você estiver criando um programa para gerenciar carros, você pode ter uma classe chamada
                "Carro". Essa classe pode ter atributos como modelo, cor e ano, e métodos como ligar(), desligar() e
                acelerar().
            </p>
            <p>
                Uma vez que você tenha definido essa classe, você pode criar objetos individuais (também chamados de
                instâncias)
                dessa classe. Por exemplo, você pode criar um objeto carro1 que representa um Toyota Corolla azul de
                2019 e um
                objeto carro2 que representa um Ford Fusion vermelho de 2020. Ambos os objetos teriam os mesmos
                atributos e
                métodos definidos na classe "Carro", mas seus valores podem ser diferentes para cada objeto.
            </p>
        </div>
    </div>
    <!---->
    <!---->
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">OBJETO</h1>
        <img src="./img/Captura%20de%20tela%202024-06-03%20142403.png" style="width: 50%;margin-left: 26%"
             class="card-img-top d-flex rounded-2" alt="...">
        <div class="card-body">
            <p>Um objeto, na programação orientada a objetos (POO), é uma instância de uma classe. Uma classe é um
                modelo que descreve um conjunto de características (atributos) e comportamentos (métodos) que os objetos
                criados a partir dela possuem.</p>
            <p>Quando você cria um objeto a partir de uma classe, está essencialmente criando uma variável que pode
                armazenar dados e métodos relacionados. Cada objeto tem seu próprio conjunto de valores para os
                atributos da classe, permitindo que cada instância seja única.</p>
            <p>Por exemplo, considere uma classe Carro. Esta classe pode ter atributos como cor, modelo, ano, etc., e
                métodos como ligar, acelerar, frear, etc. Quando você cria um objeto a partir da classe Carro, digamos
                um carro vermelho de modelo "X", ano "2022", você está criando uma instância única dessa classe com seus
                próprios valores para os atributos. Este é um objeto.</p>
            <p>Em resumo, um objeto é uma instância específica de uma classe que tem seus próprios dados e
                comportamentos, mas segue o modelo definido pela classe.</p>
        </div>
    </div>
    <!---->
    <!---->
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">PROPRIEDADES</h1>
        <img src="./img/3.png" style="width: 50%;margin-left: 26%" class="card-img-top d-flex rounded-2" alt="2...">
        <div class="card-body">
            <p>As propriedades são basicamente características do objeto. </p>
            <p>São definições como: "Cor de pele", "Cor dos olhos" e etc...</p>
        </div>
    </div>
    <!---->
    <!---->
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">MÉTODOS</h1>
        <div class="row">
            <div class="col-6">
                <img src="./img/4(1).png" class=" rounded-2" style="margin-left: 20%" alt="">
            </div>
            <div class="col-6">
                <img src="./img/4(2).png" class=" rounded-2" alt="...">
            </div>
        </div>

        <div class="card-body">
            <p>Os métodos são as ações do objeto.</p>
            <p>Os métodos definem as ações de objetos como: O Objeto "Cachorro" tem o métodos "latir()", onde se for
                "true", ele late e se for "false", ele não late.</p>
            <p>No exemplo acima temos como objeto: "Caneta" e como método: "rabiscar()", mas temos uma condição, onde o
                método "rabiscar()" só será feito se a classe "tampada" for "false".</p>
        </div>
    </div>
    <!---->
    <!--    -->
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">ENCAPSULAMENTO</h1>
        <h2 class="text-danger ms-2">JEITO ERRADO!</h2>
        <div class="row">
            <div class="col-3">
                <img src="./img/jeito%20errado.png" class="ms-2" style="width: 100%" alt="2">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <img src="./img/erro.png" class="ms-2" style="width: 300%" alt="1">
            </div>
        </div>
        <br>
        <h2 class="text-danger ms-2">JEITO CERTO!</h2>

        <div class="row">
            <div class="col-3">
                <img src="./img/acerto.png" class="ms-2" style="width: 100%" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <img src="./img/jeito%20certo.png" class="ms-2" style="width: 300%" alt="">
            </div>
        </div>
        <div class="card-body">
            <p>O encapsulamento é uma das principais técnicas que define a programação orientada a objetos. Se
                trata de um dos elementos que adicionam segurança à aplicação em uma programação orientada a objetos
                pelo fato de
                esconder as propriedades, criando uma espécie de <span class="text-danger" style="font-size: large;"><b>CAIXA PRETA</b></span>.
            </p>
            <p>A maior parte das linguagens orientadas a objetos implementam o encapsulamento baseado em propriedades
                privadas, ligadas a métodos especiais chamados getters e setters, que irão retornar e setar o valor da
                propriedade, respectivamente. Essa atitude evita o acesso direto a propriedade do objeto, adicionando
                uma outra camada de segurança à aplicação.</p>
            <p>Para fazermos um paralelo com o que vemos no mundo real, temos o encapsulamento em outros elementos. Por
                exemplo, quando clicamos no botão ligar da televisão, não sabemos o que está acontecendo internamente.
                Podemos então dizer que os métodos que ligam a televisão estão encapsulados.</p>
        </div>
    </div>
    <!--    -->
    <!--    -->
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">HERANÇA</h1>
        <div class="row">
            <div class="col-3">
                <img src="./img/heranca%201.png" class="ms-2" style="width: 150%" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <img src="./img/heranca2.png" class="ms-2" style="width: 150%" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <img src="./img/heranca3.png" class="ms-2" style="width: 150%" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <img src="./img/resultadoheranca.png" class="ms-2" style="width: 250%" alt="">
            </div>
        </div>
        <div class="card-body">
            <p>O reuso de código é uma das grandes vantagens da programação orientada a objetos. Muito disso se dá por
                uma questão que é conhecida como herança. Essa característica otimiza a produção da aplicação em tempo e
                linhas de código.</p>
            <p>Para entendermos essa característica, vamos imaginar uma família: a criança, por exemplo, está herdando
                características de seus pais. Os pais, por sua vez, herdam algo dos avós, o que faz com que a criança
                também o faça, e assim sucessivamente.</p>
            <p>Os métodos privados de uma classe pai não são acessíveis a uma classe filha. Como resultado, as classes
                filhas podem reimplementar um método privado sem levar em conta as regras normais de herança. Antes do
                PHP 8.0.0, entretanto, as restrições final e static eram aplicadas aos métodos privados. Desde o PHP
                8.0.0, a única restrição de método privado que é aplicada é private final para construtores, já que essa
                é uma maneira comum de "desabilitar" o construtor ao usar métodos de fábricação estáticos.</p>
        </div>
    </div>
    <!--    -->
    <!--    -->
    <div class="card mt-1 mb-3" style="border: 3px solid black">
        <h1 class="text-center">POLIMORFISMO</h1>
        <div class="row">
            <div class="col-3">
                <img src="./img/mamifero.png" class="ms-2" style="width: 150%" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <img src="./img/animal.png" class="ms-2" style="width: 150%" alt="">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-3">
                <img src="./img/resultadopolimorfismo.png" class="ms-2" style="width: 200%" alt="">
            </div>
        </div>
        <div class="card-body">
            <p>Outro ponto essencial na programação orientada a objetos é o chamado polimorfismo. Na natureza, vemos
                animais que são capazes de alterar sua forma conforme a necessidade, e é dessa ideia que vem o
                polimorfismo na orientação a objetos. Como sabemos, os objetos filhos herdam as características e ações
                de seus “ancestrais”. Entretanto, em alguns casos, é necessário que as ações para um mesmo método seja
                diferente. Em outras palavras, o polimorfismo consiste na alteração do funcionamento interno de um
                método herdado de um objeto pai.</p>
            <p>Como um exemplo, temos um objeto genérico “Eletrodoméstico”. Esse objeto possui um método, ou ação,
                “Ligar()”. Temos dois objetos, “Televisão” e “Geladeira”, que não irão ser ligados da mesma forma.
                Assim, precisamos, para cada uma das classes filhas, reescrever o método “Ligar()”.</p>
            <p>Com relação ao polimorfismo, valem algumas observações. Como se trata de um assunto que está intimamente
                conectado à herança, entender os dois juntamente é uma boa ideia. Outro ponto é o fato de que as
                linguagens de programação implementam o polimorfismo de maneiras diferentes. O C#, por exemplo, faz uso
                de método virtuais (com a palavra-chave virtual) que podem ser reimplementados (com a palavra-chave
                override) nas classes filhas. Já em Java, apenas o atributo “@Override” é necessário.</p>
            <p>Esses quatro pilares são essenciais no entendimento de qualquer linguagem orientada a objetos e da
                orientação a objetos como um todo. Cada linguagem irá implementar esses pilares de uma forma, mas
                essencialmente é a mesma coisa. Apenas a questão da herança, como comentado, que pode trazer variações
                mais bruscas, como a presença de herança múltipla. Além disso, o encapsulamento também é feito de
                maneiras distintas nas diversas linguagens, embora os getters e setters sejam praticamente
                onipresentes.</p>
        </div>
    </div>
    <!--CONTAINER-->
</div>
<!--CONTAINER-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>