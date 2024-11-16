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

minus.addEventListener('click', () => {
    if(Number(count.innerHTML) > 1){
        count.innerHTML = Number(count.innerHTML) - 1
    }
})

plus.addEventListener('click', () => {
    if(Number(count.innerHTML) < 10){
        count.innerHTML = Number(count.innerHTML) + 1
    }
})