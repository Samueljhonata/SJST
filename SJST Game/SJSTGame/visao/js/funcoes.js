function mostraEsconde(acao, campo) {
    if (acao == 0) {
        document.getElementById(campo).style.display = 'none';
    } else {
        document.getElementById(campo).style.display = 'block';
    }
}