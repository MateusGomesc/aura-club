// copy link
const link = document.getElementById('linkPix')
link.addEventListener('click', () => {
    const text = link.innerHTML
    navigator.clipboard.writeText(text).then(() => {
        document.getElementById('info').innerHTML = 'Texto copiado'
    }).catch(() => {
        document.getElementById('info').innerHTML = 'Erro ao copiar o texto'
    })
})

// insert data into page
const TotalPrice = document.querySelector('.priceCard h3')
const price = parseFloat(sessionStorage.getItem('valorTotal'))

document.addEventListener('DOMContentLoaded', () => {
    TotalPrice.innerHTML = 'R$' + price.toFixed(2).replace('.', ',')
})

// isert data on form
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#adicionais').value = sessionStorage.getItem('adicionais')
    document.querySelector('#valorTotal').value = parseFloat(sessionStorage.getItem('valorTotal'))
    document.querySelector('#id_produto').value = parseInt(sessionStorage.getItem('id_produto'))
})