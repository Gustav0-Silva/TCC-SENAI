
let btn = document.getElementById("verSenha")
let btn1 = document.getElementById("verConfirmSenha")

let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let confirmSenha = document.querySelector('#confirmSenha')
let labelConfirmSenha = document.querySelector('#labelConfirmSenha')
let validConfirmSenha = false

let registro = document.getElementById("registro")
let labelRegistro = document.getElementById("labelRegistro")
let validRegistro = false

let verificador =document.querySelector('#verificador')
let labelVerificador = document.querySelector('#labelVerificador')
let validVerificador = false

let msgErro = document.querySelector('#msgErro')
let msgSucesso = document.querySelector('#msgSucesso')

let area = document.getElementById("area")
var validacao, validacaoA

let btnCad = document.getElementById("botao")
let btnTurma = document.getElementById("botao-turma")




function criarTurma (){
    if(validConfirmSenha && validNome && validRegistro && validSenha && validVerificador && area.selectedIndex != '0'){
    
        msgErro.setAttribute('style', 'display: none')
        msgErro.innerHTML=''
        msgSucesso.setAttribute('style', 'display: block')
        msgSucesso.innerHTML='Cadastrando Professor...'
        document.getElementById("botao").disabled=false

        
    }else{
        msgSucesso.setAttribute('style', 'display: none')
        msgSucesso.innerHTML=''
        msgErro.setAttribute('style', 'display: block')
        msgErro.innerHTML='Dados incompatíveis, atualize a página e tente novamente'
        document.getElementById("botao").disabled=true
    
    }
}


function cadastrar (){
    if(validConfirmSenha && validNome && validRegistro && validSenha && validVerificador && area.selectedIndex != '0'){
    
        msgErro.setAttribute('style', 'display: none')
        msgErro.innerHTML=''
        msgSucesso.setAttribute('style', 'display: block')
        msgSucesso.innerHTML='Cadastrando Professor...'
        document.getElementById("botao").disabled=false

        
    }else{
        msgSucesso.setAttribute('style', 'display: none')
        msgSucesso.innerHTML=''
        msgErro.setAttribute('style', 'display: block')
        msgErro.innerHTML='Dados incompatíveis, atualize a página e tente novamente'
        document.getElementById("botao").disabled=true
    
    }
}


function verificar (){
    let registroCalc = parseFloat(document.getElementById("registro").value)

if(area.selectedIndex == '0'){
   return alert('Por favor, selecione uma área de atuação')
}  
if(area.selectedIndex == '1'){
    validacao = ((registroCalc/986)-198)
    validacaoA = Math.floor(validacao)
    return validacaoA

}
if(area.selectedIndex == '2'){
    validacao = ((registroCalc/967)-321)
    validacaoA = Math.floor(validacao)
    return validacaoA
}     
if(area.selectedIndex == '3'){
    validacao = ((registroCalc/979)-357)
    validacaoA = Math.floor(validacao)
    return validacaoA
}  
if(area.selectedIndex == '4'){
    validacao = ((registroCalc/931)-275)
    validacaoA = Math.floor(validacao)
    return validacaoA
}  
}



nome.addEventListener('keyup', () => {
    if(nome.value.length <= 4 ){
        labelNome.setAttribute('style','color: red')
        labelNome.innerHTML='Nome Completo - Insira no mínimo 5 caracteres'
        nome.setAttribute('style', 'border-color: red')
        validNome = false

    }else{
        labelNome.setAttribute('style','color: green')
        labelNome.innerHTML='Nome Completo'
        nome.setAttribute('style', 'border-color: green')
        validNome = true
    }

})


senha.addEventListener('keyup', () => {
    if(senha.value.length <= 5 ){
        labelSenha.setAttribute('style','color: red')
        labelSenha.innerHTML='Insira no mínimo 6 caracteres'
        senha.setAttribute('style', 'border-color: red')
        validSenha = false

    }else{
        labelSenha.setAttribute('style','color: green')
        labelSenha.innerHTML='Senha'
        senha.setAttribute('style', 'border-color: green')
        validSenha = true
    }

})

confirmSenha.addEventListener('keyup', () => {
    if(confirmSenha.value != senha.value ){
        labelConfirmSenha.setAttribute('style','color: red')
        labelConfirmSenha.innerHTML='As senhas não conferem'
        confirmSenha.setAttribute('style', 'border-color: red')
        validConfirmSenha = false
    }
    else{
        labelConfirmSenha.setAttribute('style','color: green')
        labelConfirmSenha.innerHTML='Confirmar Senha'
        confirmSenha.setAttribute('style', 'border-color: green')
        validConfirmSenha = true
    }

})

registro.addEventListener('keyup', () => {
    if(registro.value.length <= 5 ){
        labelRegistro.setAttribute('style','color: red')
        labelRegistro.innerHTML='Insira no mínimo 6 caracteres'
        registro.setAttribute('style', 'border-color: red')
        validRegistro = false

    }else{
        labelRegistro.setAttribute('style','color: green')
        labelRegistro.innerHTML='Número de Registro do Professor'
        registro.setAttribute('style', 'border-color: green')
        validRegistro = true
    }

})

verificador.addEventListener('keyup', () => {
    if(verificador.value.length <= 2 || verificar() != verificador.value){
        labelVerificador.setAttribute('style','color: red')
        labelVerificador.innerHTML='Código verificador não confere'
        verificador.setAttribute('style', 'border-color: red')
        validVerificador = false

    }else{
        labelVerificador.setAttribute('style','color: green')
        labelVerificador.innerHTML='Código Verificador'
        verificador.setAttribute('style', 'border-color: green')
        validVerificador =true
    }

})


btn.addEventListener('click', ()=>{
    let inputSenha = document.getElementById("senha")

    if(inputSenha.getAttribute('type') == 'password'){
        inputSenha.setAttribute('type', 'text')
} else {
    inputSenha.setAttribute('type', 'password')
}
})



btn1.addEventListener('click', ()=>{
    let inputSenha = document.getElementById("confirmSenha")

    if(inputSenha.getAttribute('type') == 'password'){
        inputSenha.setAttribute('type', 'text')
} else {
    inputSenha.setAttribute('type', 'password')
}
})


