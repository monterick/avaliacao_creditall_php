function excluir(id){
var escolha = confirm("Deseja excluir?");
if(escolha == true){
    window.location.href=`controller/controller.php?operacao=excluir&id=${id}`;
}


}
var myModal = document.getElementById('myModal')
var myModal2 = document.getElementById('myModal2')

function modalCadastrar(){
    myModal.style.display = 'block';
}
function closeCadastrar(){
    myModal.style.display = 'none';
}

function modalEditar(id,nome,nascimento,rendimento){
    myModal2.style.display = 'block';
    document.getElementById('editid').value = id;
    document.getElementById('editnome').value = nome;
    document.getElementById('editnascimento').value = nascimento;
    document.getElementById('editrendimento').value = rendimento;
}
function closeEditar(){
    myModal2.style.display = 'none';
}





