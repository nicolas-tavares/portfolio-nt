
// FUNÇÃO ABRIR E FECHAR MENU MOBILE


let btnMenu = document.getElementById('btn-menu')   //Let -> cria variavel; getElementById -> recupera o botao criado no html
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')


btnMenu.addEventListener('click', ()=>{  //addEventListener('click') -> função para pegar o click do usuario
    menu.classList.add('abrir-menu')
})   

menu.addEventListener('click', ()=>{ 
    menu.classList.remove('abrir-menu')
}) 

overlay.addEventListener('click', ()=>{ 
    menu.classList.remove('abrir-menu')
}) 