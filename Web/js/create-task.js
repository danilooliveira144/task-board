document.addEventListener('DOMContentLoaded', function () {

    console.log("JS carregado");

    const form = document.getElementById('taskForm');

    if (!form) {
        console.error("Form não encontrado");
        return;
    }

    form.addEventListener('submit', async function (e) {

        e.preventDefault();
        console.log("Submit interceptado");

        const title = document.getElementById('title').value;
        const description = document.getElementById('description').value;
        const data_inicio = document.getElementById('data_inicio').value;
        const data_fim = document.getElementById('data_fim').value;

        try {

            const response = await fetch('http://localhost:8000/tasks', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    title,
                    description,
                    data_inicio,
                    data_fim
                })
            });

            const data = await response.json();

            console.log("Resposta:", data);

            if (data.success) {
                alert('Tarefa criada com sucesso 🚀');
                window.location.href = 'home.html';
            } else {
                alert(data.message);
            }

        } catch (error) {
            console.error("ERRO:", error);
            alert('Erro ao conectar com o servidor');
        }

    });

});