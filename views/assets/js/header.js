// slide músicas
document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('section')
    sliderTrack.innerHTML += sliderTrack.innerHTML
})

// menu hambúrguer
const menuIcon = document.querySelector('.menuIcon')
const closeMenuIcon = document.querySelector('.closeMenuIcon')
const menu = document.querySelector('.menu')

menuIcon.addEventListener('click', () => {
    menu.style.display = 'flex'
    document.body.style.overflow = 'hidden'
})

closeMenuIcon.addEventListener('click', () => {
    menu.style.display = 'none'
    document.body.style.overflow = ''
})

// efeito blur nav
const items = document.querySelectorAll('header nav ul li')
items.forEach(item => {
    item.addEventListener('mouseover', () => {
        items.forEach(elemento => {
            elemento.classList.add('nao-ativo')
        })
        item.classList.remove('nao-ativo')
        item.classList.add('ativo')
    })

    item.addEventListener('mouseout', () => {
        items.forEach(elemento => {
            elemento.classList.remove('nao-ativo')
            elemento.classList.remove('ativo')
        })
    })
})