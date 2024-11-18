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