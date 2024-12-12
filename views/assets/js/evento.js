// dropdown
const btn = document.querySelector('.regras div img')
const info = document.querySelector('.regras .information')
btn.addEventListener('click', () => {
    if(info.style.display === 'block'){
        info.style.display = 'none'
        btn.style.transform = 'scaleY(100%)'
    }
    else{
        info.style.display = 'block'
        btn.style.transform = 'scaleY(-100%)'
    }
})

// ticket quantity
const minus = document.querySelector('.minus')
const plus = document.querySelector('.plus')
const count = document.querySelector('.number')
const price = parseFloat(document.querySelector('.ticket .price h3').innerHTML.replace('R$', ''))
const totalPrice = document.querySelector('.cart .price h3')

minus.addEventListener('click', () => {
    if(Number(count.value) > 1){
        count.value = Number(count.value) - 1
        totalPrice.innerHTML = 'R$' + (parseFloat(totalPrice.innerHTML.replace('R$', '')) - price).toFixed(2).replace('.', ',')
    }
})

plus.addEventListener('click', () => {
    if(Number(count.value) < 10){
        count.value = Number(count.value) + 1
        totalPrice.innerHTML = 'R$' + (parseFloat(totalPrice.innerHTML.replace('R$', '')) + price).toFixed(2).replace('.', ',')
    }
})

// save information on session
const btnContinue = document.querySelector('.btnRed')
const name = document.querySelector('.details h3')
const date = document.querySelector('#data')
const hour = document.querySelector('#hora')
const id_produto = document.querySelector('#id_produto')

btnContinue.addEventListener('click', () => {
    const CartPrice = parseFloat(document.querySelector('.cart .price h3').innerHTML.replace('R$', ''))
    sessionStorage.setItem('quantity', count.value)
    sessionStorage.setItem('name', name.innerHTML)
    sessionStorage.setItem('hour', hour.innerHTML)
    sessionStorage.setItem('date', date.innerHTML)
    sessionStorage.setItem('valorTotal', CartPrice)
    sessionStorage.setItem('ticketPrice', price)
    sessionStorage.setItem('id_produto', id_produto.value)
    let add = []
    for(let i=0; i < count.value; i++){
        add.push({
            bar: false,
            food: false,
            price: price
        })
    }
    sessionStorage.setItem('adicionais', JSON.stringify(add))
})