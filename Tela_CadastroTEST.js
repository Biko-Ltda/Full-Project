function enviarDados(){
    var nome = document.getElementById("validationDefault01");
    var email= document.getElementById("validationDefault02");
    var cpf = document.getElementById("validationDefault04");
    var telefone = document.getElementById("validationDefault03");
    var cep = document.getElementById("validationDefault06");
    var estado = document.getElementById("validationDefault08");
    var cidade = document.getElementById("validationDefault05");
    var rua = document.getElementById("validationDefault07");
    var numero = document.getElementById("validationDefault09");
    var bairro = document.getElementById("validationDefault10"); 
    var senha = document.getElementById("validationDefault11"); 
    var confirmsenha = document.getElementById("validationDefault12"); 
    if (senha == confirmsenha) {
        
    }


    var dados = localStorage.getItem('Usuario');
    dados= JSON.parse(dados);
     
    if(dados == null){
        localStorage.setItem('Usuario', '[]');
        dados = [];        
    }
    var auxRegistro = JSON.stringify({
        nome: nome.value,
        email: email.value,
        cpf: cpf.value,
        telefone: telefone.value,
        cep: cep.value,
        estado: estado.value,
        cidade: cidade.value,
        rua: rua.value,
        bairro: bairro.value,
        senha: senha.value,
        confirmsenha: confirmsenha.value,
        numero: numero.value   
       
    });

    dados.push(auxRegistro);

    localStorage.setItem('Usuario', JSON.stringify(dados));  
    alert("Registro adicionado.");

    }    