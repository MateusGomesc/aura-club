// btn add
const btns = document.querySelectorAll('.btnAdd')

btns.forEach(btn => {
    btn.addEventListener('click', () => {
        if(btn.innerHTML === 'Adicionar'){
            btn.classList.add('nao-ativo')
            btn.innerHTML = 'Remover'
        }
        else{
            btn.classList.remove('nao-ativo')
            btn.innerHTML = 'Adicionar'
        }
    })
})