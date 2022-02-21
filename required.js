if(document.querySelector('.slide-sidebar .col-md-9')){
    document.querySelector('.slide-sidebar .col-md-9').addEventListener('click', () => {
        document.querySelector('.slide-sidebar').classList.remove('active');
    })
    
    document.querySelector('.sidebar-close-btn').addEventListener('click', () => {
        document.querySelector('.slide-sidebar').classList.remove('active');
    })
}

if(document.querySelector('.profile-btn.non-dropdown')){
    document.querySelector('.profile-btn.non-dropdown').addEventListener('click', () => {
        document.querySelector('.slide-sidebar').classList.add('active');
    })
}

if(document.querySelectorAll('.c-accordion').length){
    const accordion = document.querySelectorAll('.c-accordion');
    const accordion_title = document.querySelectorAll('.c-accordion-title');
    for(let i=0; i<accordion.length; i++){
        accordion_title[i].addEventListener('click', () => {
            if(accordion[i].classList.contains('active')){
                accordion[i].classList.remove('active');
            }else{
                accordion[i].classList.add('active');
            }
        })
    }
}

if(document.querySelectorAll('.supposed_date_input').length){
    const date_input = document.querySelectorAll('.supposed_date_input');
    for(let i=0; i<date_input.length; i++){
        date_input[i].addEventListener('focus', () => {
            date_input[i].type = 'date';
        })
    }
}