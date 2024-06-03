function carregaMenu(page) {
    fetch('controle.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'controle=' + encodeURIComponent(page),
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('carregaConteudo').innerHTML = data;
        })
        .catch(error => console.error('Error na requisição:', error));

}
function redireciona(page) {
    window.location.href = page
}