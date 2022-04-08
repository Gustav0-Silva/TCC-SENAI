let nome = document.querySelector('#nomeTurma')
let labelNome = document.querySelector('#labelNomeTurma')
let validNome = false

let msgErro = document.querySelector('#msgErro')
let msgSucesso = document.querySelector('#msgSucesso')


let btnTurma = document.getElementById("botao")



function criarTurma (){
    if(validNome != '0'){
    
        msgErro.setAttribute('style', 'display: none')
        msgErro.innerHTML=''
        msgSucesso.setAttribute('style', 'display: block')
        msgSucesso.innerHTML='Buscando turma...'
        document.getElementById("botao").disabled=false

        
    }else{
        msgSucesso.setAttribute('style', 'display: none')
        msgSucesso.innerHTML=''
        msgErro.setAttribute('style', 'display: block')
        msgErro.innerHTML='Dados incompatíveis, atualize a página e tente novamente'
        document.getElementById("botao").disabled=true
    
    }
}

nome.addEventListener('keyup', () => {
    if(nome.value.length <= 2 || nome.value.length >=5 ){
        labelNome.setAttribute('style','color: red')
        labelNome.innerHTML='Nome da turma inválido'
        nome.setAttribute('style', 'border-color: red')
        validNome = false

    }else{
        labelNome.setAttribute('style','color: green')
        labelNome.innerHTML='Nome da Turma'
        nome.setAttribute('style', 'border-color: green')
        validNome = true
    }

})


