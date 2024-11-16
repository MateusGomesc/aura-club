// dropdown
const btn = document.querySelector('.dropdown .head img')
const info = document.querySelector('.dropdown .pagamentos')
btn.addEventListener('click', () => {
    if(info.style.display === 'flex'){
        info.style.display = 'none'
        btn.style.transform = 'scaleY(100%)'
    }
    else{
        info.style.display = 'flex'
        btn.style.transform = 'scaleY(-100%)'
    }
})


// redirect
const radios = document.querySelectorAll('input')
radios.forEach(radio => {
    radio.addEventListener('click', () => {
        setTimeout(() => {
            if(radio.checked){
                if(radio.value == 0){
                    window.location.href = '../Cartao'
                }
                else if(radio.value == 1){
                    window.location.href = '../Pix'
                }
                else{
                    window.location.href = '../Confirmacao'
                }
            }
        }, 1000)
    })
})