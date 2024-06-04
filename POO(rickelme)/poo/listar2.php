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
<div class="container-fluid" style="margin-left: 10%">
    <div class="card mt-1" style="border: 3px solid black">
        <div class="card-header">
            <h1 class="text-center">PROGRAMAÇÃO ESTRUTURADA</h1>
        </div>
        <div class="card-body">
            <h2 class="">Vantagens</h2>
            <hr>
            <p style="font-weight: bold"><span class="text-success">Simplicidade: </span>É mais fácil de entender e
                implementar, especialmente para programas pequenos ou de média complexidade.</p>
            <p style="font-weight: bold"><span class="text-success">Controle de Fluxo: </span> Proporciona um controle
                claro e direto do fluxo de execução do programa através de estruturas de controle como loops e
                condicionais.</p>
            <p style="font-weight: bold"><span class="text-success">Desempenho: </span>Pode ser mais eficiente em termos
                de desempenho, uma vez que não há a sobrecarga associada ao gerenciamento de objetos.</p>
            <p style="font-weight: bold"><span class="text-success">Uso de Memória: </span>Geralmente utiliza menos
                memória porque não precisa armazenar a estrutura e os métodos associados aos objetos.</p>
            <br>
            <h2 class="">Desvantagens</h2>
            <hr>
            <p style="font-weight: bold"><span class="text-danger">Escalabilidade: </span>Não é adequada para projetos
                grandes e complexos, pois a manutenção e a extensão do código podem se tornar difíceis.</p>
            <p style="font-weight: bold"><span class="text-danger">Reutilização de Código: </span>A reutilização de
                código é limitada em comparação com a POO, pois depende principalmente de funções e procedimentos.</p>
            <p style="font-weight: bold"><span class="text-danger">Gerenciamento de Estado: </span>Pode ser difícil
                gerenciar o estado global do programa, levando a possíveis problemas de manutenção e debugging.</p>
            <p style="font-weight: bold"><span class="text-danger">Encapsulamento: </span>Há pouco ou nenhum
                encapsulamento, o que pode resultar em uma organização de código menos modular e mais propensa a erros.
            </p>
        </div>
    </div>
    <br>
    <div class="card mt-1" style="border: 3px solid black">
        <div class="card-header">
            <h1 class="text-center">PROGRAMAÇÃO ORIENTADA A OBJETOS</h1>
        </div>
        <div class="card-body">
            <h2 class="">Vantagens</h2>
            <hr>
            <p style="font-weight: bold"><span class="text-success">Modularidade: </span>Promove um alto nível de
                modularidade através do encapsulamento, facilitando a manutenção e a extensão do código.</p>
            <p style="font-weight: bold"><span class="text-success">Reutilização de Código: </span>Facilita a
                reutilização de código através de herança e composição de objetos.</p>
            <p style="font-weight: bold"><span class="text-success">Flexibilidade e Extensibilidade: </span>O
                polimorfismo e a herança permitem que o código seja facilmente estendido e modificado sem grandes
                alterações na estrutura existente.</p>
            <p style="font-weight: bold"><span class="text-success">Gerenciamento de Estado: </span>Cada objeto pode
                manter seu próprio estado, facilitando o gerenciamento de dados e comportamentos relacionados.</p>
            <p style="font-weight: bold"><span class="text-success">Correspondência com o Mundo Real: </span>Permite a
                modelagem direta de entidades do mundo real como objetos, tornando o design e a compreensão do sistema
                mais intuitivos.</p>
            <br>
            <h2 class="">Desvantagens</h2>
            <hr>
            <p style="font-weight: bold"><span class="text-danger">Complexidade Inicial: </span> Pode ser mais difícil
                de aprender e implementar, especialmente para iniciantes ou para projetos simples.</p>
            <p style="font-weight: bold"><span class="text-danger">Desempenho: </span>Pode introduzir uma sobrecarga de
                desempenho devido à necessidade de gerenciar objetos e suas interações.</p>
            <p style="font-weight: bold"><span class="text-danger">Uso de Memória: </span>Geralmente requer mais memória
                para armazenar a estrutura e os métodos associados aos objetos.</p>
            <p style="font-weight: bold"><span class="text-danger">Sobrecarga de Design: </span>Requer mais tempo e
                esforço no planejamento e design inicial do sistema, o que pode ser desnecessário para projetos
                pequenos.
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>