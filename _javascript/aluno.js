let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

let turma = document.querySelector('#turma')
let labelTurma = document.querySelector('#labelTurma')
let validTurma = false

let msgErro = document.querySelector('#msgErro')
let msgSucesso = document.querySelector('#msgSucesso')

let btnTurma = document.getElementById("botao")



function cadastrarAluno (){
    if(validTurma && validNome != '0'){
    
        msgErro.setAttribute('style', 'display: none')
        msgErro.innerHTML=''
        msgSucesso.setAttribute('style', 'display: block')
        msgSucesso.innerHTML='Cadastrando aluno...'
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
    if(nome.value.length <= 2){
        labelNome.setAttribute('style','color: red')
        labelNome.innerHTML='Nome de aluno inválido'
        nome.setAttribute('style', 'border-color: red')
        validNome = false

    }else{
        labelNome.setAttribute('style','color: green')
        labelNome.innerHTML='Nome do Aluno'
        nome.setAttribute('style', 'border-color: green')
        validNome = true
    }

})


turma.addEventListener('keyup', () => {
    if(turma.value.length <= 2 ){
        labelTurma.setAttribute('style','color: red')
        labelTurma.innerHTML='Insira um nome de turma válido'
        turma.setAttribute('style', 'border-color: red')
        validTurma = false

    }else{
        labelTurma.setAttribute('style','color: green')
        labelTurma.innerHTML='Nome da Turma'
        turma.setAttribute('style', 'border-color: green')
        validTurma = true
    }

})

