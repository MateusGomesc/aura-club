// insert data on page
document.addEventListener('DOMContentLoaded', () => {
    if(sessionStorage.length){
        document.querySelector('.info h3').innerHTML = sessionStorage.getItem('name')
        document.querySelector('#data').innerHTML = sessionStorage.getItem('date')
        document.querySelector('#horario').innerHTML = sessionStorage.getItem('hour')
    }
    else{
        document.querySelector('.info').style.display = 'none'
    }
})