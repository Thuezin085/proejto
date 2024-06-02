function changeTabs(input) {
    const pages = {
        'pets': '../../view/Auth/profile-content/meus-pets.php',
        'profile': '../../view/Auth/profile-content/minha-informacoes.php'
    };

    let selected = input.value;

    console.log(selected)
    console.log(pages)
    console.log(pages[selected])
    if (pages[selected]) {

        $.ajax({
            url: pages[selected],
            type: 'GET',
            success: function(response) {
                $('#content').html(response);
            },
            error: function() {
                $('#content').html('Erro ao carregar conteúdo.');
            }
        });
    } else {
        $('#content').html('Página não encontrada.');
    }
}