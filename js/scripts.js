function validarCadastro() {
    const nome = document.getElementById('nome').value.trim();
    const turma = document.getElementById('turma').value.trim();
    const tipo = document.getElementById('tipo_churrasco').value;
    const telefone = document.getElementById('telefone').value.trim();

    if (nome === "") {
        alert("O nome é obrigatório.");
        return false;
    }
    if (turma === "") {
        alert("A turma é obrigatória.");
        return false;
    }
    if (tipo === "") {
        alert("Selecione o tipo de churrasco.");
        return false;
    }
    if (telefone === "") {
        alert("O telefone é obrigatório.");
        return false;
    }
    return true;
}

function confirmarExclusao(id) {
    if (confirm("Deseja realmente excluir esta inscrição?")) {
        window.location.href = `excluir.php?id=${id}`;
    }
}