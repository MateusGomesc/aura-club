
// save information on session
const barPrice = parseFloat(document.querySelector('#barPrice').innerHTML)
const foodPrice = parseFloat(document.querySelector('#foodPrice').innerHTML)
const cart = document.querySelector('.cart .price h3')
const btnContinue = document.querySelector('.btnRed')

const makeCard = (id) => {
    const container = document.createElement('div')
    const title = document.createElement('p')
    const barContainer = document.createElement('div')
    const foodContainer = document.createElement('div')
    const h4Bar = document.createElement('h4')
    const h4Food = document.createElement('h4')
    const buttonBar = document.createElement('button')
    const buttonFood = document.createElement('button')

    container.classList.add('ticket')
    barContainer.classList.add('add')
    foodContainer.classList.add('add')
    buttonBar.classList.add('btnAdd')
    buttonFood.classList.add('btnAdd')

    title.innerHTML = 'Ticket ' + Number(id+1) + ':'
    h4Bar.innerHTML = 'OpenBar'
    h4Food.innerHTML = 'OpenFood'
    buttonBar.innerHTML = 'Adicionar'
    buttonFood.innerHTML = 'Adicionar'
    
    container.appendChild(title)
    barContainer.appendChild(h4Bar)
    barContainer.appendChild(buttonBar)
    container.appendChild(barContainer)
    foodContainer.appendChild(h4Food)
    foodContainer.appendChild(buttonFood)
    container.appendChild(foodContainer)

    buttonBar.addEventListener('click', () => {
        if(buttonBar.innerHTML === 'Adicionar'){
            buttonBar.classList.add('nao-ativo')
            buttonBar.innerHTML = 'Remover'
            const state = JSON.parse(sessionStorage.getItem('adicionais'))
            state[id].bar = true
            state[id].price = parseFloat(sessionStorage.getItem('ticketPrice')) + barPrice
            sessionStorage.setItem('adicionais', JSON.stringify(state))
            cart.innerHTML = 'R$' + Number(parseFloat(cart.innerHTML.replace('R$', '')) + barPrice).toFixed(2).replace('.', ',')
        }
        else{
            buttonBar.classList.remove('nao-ativo')
            buttonBar.innerHTML = 'Adicionar'
            const state = JSON.parse(sessionStorage.getItem('adicionais'))
            state[id].bar = false
            state[id].price = parseFloat(sessionStorage.getItem('ticketPrice')) - barPrice
            sessionStorage.setItem('adicionais', JSON.stringify(state))
            cart.innerHTML = 'R$' + Number(parseFloat(cart.innerHTML.replace('R$', '')) - barPrice).toFixed(2).replace('.', ',')
        }
    })

    buttonFood.addEventListener('click', () => {
        if(buttonFood.innerHTML === 'Adicionar'){
            buttonFood.classList.add('nao-ativo')
            buttonFood.innerHTML = 'Remover'
            const state = JSON.parse(sessionStorage.getItem('adicionais'))
            state[id].food = true
            state[id].price = parseFloat(sessionStorage.getItem('ticketPrice')) + foodPrice
            sessionStorage.setItem('adicionais', JSON.stringify(state))
            cart.innerHTML = 'R$' + Number(parseFloat(cart.innerHTML.replace('R$', '')) + foodPrice).toFixed(2).replace('.', ',')
        }
        else{
            buttonFood.classList.remove('nao-ativo')
            buttonFood.innerHTML = 'Adicionar'
            const state = JSON.parse(sessionStorage.getItem('adicionais'))
            state[id].food = false
            state[id].price = parseFloat(sessionStorage.getItem('ticketPrice')) - foodPrice
            sessionStorage.setItem('adicionais', JSON.stringify(state))
            cart.innerHTML = 'R$' + Number(parseFloat(cart.innerHTML.replace('R$', '')) - foodPrice).toFixed(2).replace('.', ',')
        }
    })
    
    return container
}

document.addEventListener('DOMContentLoaded', () => {
    const CartPrice = Number(sessionStorage.getItem('valorTotal'))
    document.querySelector('.cart .price h3').innerHTML = 'R$' + CartPrice.toFixed(2).replace('.', ',')
    const cardContainer = document.querySelector('.tickets')
    const quantity = sessionStorage.getItem('quantity')
    
    for(let i=0; i<quantity; i++){
        const card = makeCard(i)
        cardContainer.appendChild(card)
    }
})

btnContinue.addEventListener('click', () => {
    sessionStorage.setItem('valorTotal', parseFloat(cart.innerHTML.replace('R$', '')))
})