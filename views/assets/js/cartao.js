// flip card
const flipCard = (isFlipped) => {
    const cardContainer = document.querySelector('.cardContainer')
    if(isFlipped){
        cardContainer.classList.add('flip')
    }
    else{
        cardContainer.classList.remove('flip')
    }
}

// changing content
function getCardBrand(cardNumber) {
    cardNumber = cardNumber.replace(/\D/g, '');

    if (/^4/.test(cardNumber)) {
        return 'Visa';
    } else if (/^5[1-5]/.test(cardNumber)) {
        return 'Mastercard';
    }
    else{
        return 'Bandeira não identificada'
    }
}

numero.addEventListener('input', () => {
    const numero = document.getElementById('numero')
    numero.value = numero.value.replace(/\D/g, '')
    const numeroCard = document.getElementById('number')
    const flags = document.querySelectorAll('.flagLogo')

    switch(getCardBrand(numero.value)){
        case 'Visa':
            flags.forEach(flag => {
                flag.style.display = 'block'
                flag.style.width = '90px'
                flag.style.height = '30px'
                flag.src = '../assets/img/visaLogo.png'
            })
            break
        case 'Mastercard':
            flags.forEach(flag => {
                flag.style.display = 'block'
                flag.style.width = '120px'
                flag.style.height = '45px'
                flag.src = '../assets/img/mastercardLogo.svg'
            })
            break
        default:
            flags.forEach(flag => {
                flag.style.display = 'none'
            })
    }

    numeroCard.innerHTML = numero.value.replace(/(\d{4})(?=\d)/g, '$1 ') || '**** **** **** ****'
})

nome.addEventListener('input', () => {
    const nome = document.getElementById('nome')
    const nomeCard = document.getElementById('name')

    nomeCard.innerHTML = nome.value || '***'
})

mes.addEventListener('input', () => {
    const mes = document.getElementById('mes')
    const ano = document.getElementById('ano')
    const mesAnoCard = document.getElementById('date')

    mesAnoCard.innerHTML = mes.value + '/' + ano.value
})

ano.addEventListener('input', () => {
    const mes = document.getElementById('mes')
    const ano = document.getElementById('ano')
    mes.value = mes.value.replace(/\D/g, '')
    ano.value = ano.value.replace(/\D/g, '')
    const mesAnoCard = document.getElementById('date')

    mesAnoCard.innerHTML = mes.value + '/' + ano.value
})

mes.addEventListener('input', () => {
    const mes = document.getElementById('mes')
    const ano = document.getElementById('ano')
    mes.value = mes.value.replace(/\D/g, '')
    ano.value = ano.value.replace(/\D/g, '')
    const mesAnoCard = document.getElementById('date')

    mesAnoCard.innerHTML = mes.value + '/' + ano.value || '**/**'
})

cvv.addEventListener('input', () => {
    const cvv = document.getElementById('cvv')
    cvv.value = cvv.value.replace(/\D/g, '')
    const cvvCard = document.getElementById('cvvNumber')

    cvvCard.innerHTML = '*'.repeat(cvv.value.length)
})

// isert data on form
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#adicionais').value = sessionStorage.getItem('adicionais')
    document.querySelector('#valorTotal').value = parseFloat(sessionStorage.getItem('valorTotal'))
    document.querySelector('#id_produto').value = parseInt(sessionStorage.getItem('id_produto'))
})