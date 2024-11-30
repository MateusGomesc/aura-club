// CEP Settings
const cepInput = document.querySelector('#cep')
cepInput.addEventListener('blur', () => {
    const cep = cepInput.value.replace(/\D/g, '')

    if(cep.length === 8){
        const url = `https://viacep.com.br/ws/${cep}/json/`

        fetch(url)
        .then(response => response.json())
        .then(data => {
            document.getElementById('bairro').value = data.bairro || ''
            document.getElementById('cidade').value = data.cidade || ''
            document.getElementById('estado').value = data.uf || ''

            const regex = /^(.*?)(?:,?\s+(\d+.*))?$/
            const match = data?.logradouro?.match(regex)
            const endereco = match[1]?.trim() || ''
            const numero = match[2]?.trim() || ''

            document.getElementById('rua').value = endereco || ''
            document.getElementById('numero').value = numero || ''
        })
        .catch(error => console.log(error))
    }
})

cepInput.addEventListener('input', () => {
    let cep = cepInput.value.replace(/\D/g, '')

    if (cep.length > 5) {
        cep = cep.slice(0, 5) + '-' + cep.slice(5)
    }

    cepInput.value = cep;
})

// Instagram settings
const instaInput = document.querySelector('#instagram')
instaInput.addEventListener('input', () => {
    if(!instaInput.value.startsWith('@')){
        instaInput.value = '@' + instaInput.value.replace(/^@/, '')
    }
})

// CPF settings
const cpfInput = document.querySelector('#cpf')
cpfInput.addEventListener('input', () => {
    let cpf = cpfInput.value.replace(/\D/g, '')

    if (cpf.length > 9) {
        cpf = cpf.slice(0, 9) + '-' + cpf.slice(9)
    }

    cpfInput.value = cpf;
})

// Number settings
const numberInput = document.querySelector('#telefone')
numberInput.addEventListener('input', () => {
    numberInput.value = numberInput.value.replace(/\D/g, '')

    if (numberInput.value.length > 0) {
        numberInput.value = numberInput.value.replace(/^(\d{0,2})/, '($1'); // Adiciona o parêntese inicial
    }
    if (numberInput.value.length > 2) {
        numberInput.value = numberInput.value.replace(/^(\(\d{2})(\d{0,5})/, '$1) $2'); // Fecha o parêntese e adiciona o espaço
    }
    if (numberInput.value.length > 7) {
        numberInput.value = numberInput.value.replace(/(\d{5})(\d{0,4})/, '$1-$2'); // Adiciona o traço após os 5 primeiros números
    }
})