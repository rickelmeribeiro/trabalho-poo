<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
          &gt;>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
          &gt;>
</head>
<body>
<div class="row">
    <div class="col-2 bg-dark" style="height: 20%;width: 100%">
        <div class="container-fluid">
            <div class="card bg-dark text-white" style="border: transparent">
                <div class="mt-3 mb-2 value fontegrande pointerCursor "
                     onclick="carregaMenu('listar1')">
                    <span class="text-success">1 -</span> O QUE É?
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor " onclick="carregaMenu('listar2')">
                    <span class="text-success">2 -</span> VANTAGENS E DESVANTAGENS
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor "
                     onclick="carregaMenu('listar3')">
                    <span class="text-success">3 -</span> DIFERENÇA DE POO E PROGRAMAÇÃO ESTRUTURADA
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor "
                     onclick="carregaMenu('listar4')">
                    <span class="text-success">4 -</span> CITE UM EXEMPLO DE CADA CONCEITO
                </div>
            </div>
        </div>
    </div>
        <div class="col-10" id="carregaConteudo"></div>
</div>
<script src="./func/func.js"></script>
</body>
</html>