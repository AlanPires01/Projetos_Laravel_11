// Adiciona um listener para executar o código quando o DOM estiver totalmente carregado
document.addEventListener('DOMContentLoaded', function () {

    // Seleciona a meta tag com o nome 'csrf-token' para obter o token CSRF necessário para requisições seguras
    var csrfTokenElement = document.querySelector('meta[name="csrf-token"]');

    // Verifica se a meta tag foi encontrada
    if (csrfTokenElement) {

        // Obtém o valor do token CSRF da meta tag
        var csrfToken = csrfTokenElement.getAttribute('content');

        // Define uma função que será executada em intervalos regulares
        setInterval(function () {

            // Faz uma requisição POST para a rota '/update-last-active' para atualizar a última atividade do usuário
            fetch('/update-last-active', {
                method: 'POST', // Define o método HTTP como POST
                headers: {
                    'Content-Type': 'application/json', // Define o tipo de conteúdo como JSON
                    'X-CSRF-TOKEN': csrfToken // Inclui o token CSRF para proteger contra ataques CSRF
                },
                body: JSON.stringify({}) // Envia um corpo de requisição vazio como JSON
            })
                .then(response => response.json()) // Converte a resposta para JSON
                .then(data => {

                    // Verifica se a resposta indica sucesso
                    if (data.status == 'success') {

                        // Seleciona o elemento HTML com o ID 'quantidadeUsuarioOnlineLogado'
                        var quantidadeElement = document.getElementById('quantidadeUsuarioOnlineLogado');

                        // Atualiza o texto do elemento com o número de usuários ativos obtido da resposta
                        quantidadeElement.textContent = data.activeUsers;

                    }//else {
                        // Loga um erro no console se a atualização falhar
                         //console.error('Não atualizado a data e hora de acesso');
                    //}

                });
                // .catch(error => console.error('Error: ', error)); // Loga um erro no console se a requisição falhar

        // }, 10000); // Define o intervalo de tempo - 10000 = 10 segundo
        // }, 300000); // 300000 ms = 5 minutos
    }, 180000); // 180000 ms = 3 minutos
    }

});






/* 
//Adiconar um listener para executar o código apenas quando o DOM estiver totalmente carregado

document.addEventListener('DOMContentLoaded', function(){
    // Seleciona a meta tag com o nome 'csrf-token' para obter o token CSRF necessário para requisições seguras

    var csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
    
    // Verifica se a meta tag foi encontrada
    if(csrfTokenElement){
        // Obtém o valor do token CSRF da meta tag
        var csrfToken = csrfTokenElement.getAttribute('content');

        setInterval(function(){

            fetch('/update-last-active', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({})
            })
            .then(response => {
                // Mostra a resposta bruta para verificar o conteúdo
                return response.text().then(text => {
                    console.log('Resposta recebida:', text);
                    // Se o conteúdo for JSON, tente parseá-lo
                    try {
                        return JSON.parse(text);
                    } catch (error) {
                        console.error('Erro ao fazer parse do JSON:', error);
                        throw new Error('Resposta não é JSON');
                    }
                });
            })
            .then(data => {
                if (data.status == 'success') {
                    var quantidadeElement = document.getElementById('quantidadeUsuarioOnlineLogado');
                    quantidadeElement.textContent = data.activeUsers;
                } else {
                    console.error('Não atualizado a data e hora de acesso');
                }
            })
            .catch(error => console.error('Error: ', error));


        },10000);
    }
}); */