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

// insert info into page
const totalPrice = document.querySelector('.total .price')
const value = parseFloat(sessionStorage.getItem('valorTotal'))
totalPrice.innerHTML = 'R$' + value.toFixed(2).replace('.', ',')

const makeItem = (id, ticketPrice) => {
    const container = document.createElement('div')
    const name = document.createElement('div')
    const price = document.createElement('div')

    container.classList.add('item')
    name.classList.add('name')
    price.classList.add('price')

    name.innerHTML = 'Ticket ' + id
    container.appendChild(name)
    price.innerHTML = 'R$' + ticketPrice.toFixed(2).replace('.', ',')
    container.appendChild(price)

    return container
}

const quantity = parseInt(sessionStorage.getItem('quantity'))
const adicionais = JSON.parse(sessionStorage.getItem('adicionais'))
const table = document.querySelector('.table')

for(let i=quantity-1; i> -1; i--){
    table.prepend(makeItem(i+1, adicionais[i].price))
}