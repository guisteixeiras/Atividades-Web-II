const botaoAdicionar = document.getElementById('adicionar');
const lista = document.getElementById('lista');

botaoAdicionar.addEventListener('click', function(){
    const input = document.getElementById('inputItem');
    const novoItem = document.createElement('li');
    novoItem.textContent = input.value;

    const botaoRemover = document.createElement('button');
    botaoRemover.textContent = 'Remover';
    botaoRemover.classList.add('remover');
 
    novoItem.appendChild(botaoRemover);
    lista.appendChild(novoItem);
    input.value = '';

    botaoRemover.addEventListener('click', function() {
        lista.removeChild(novoItem);
    });
})
