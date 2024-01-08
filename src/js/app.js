const d = document;

d.addEventListener('DOMContentLoaded',function(){
    eventListeners();
    darkMode();
});

function darkMode(){
    
    let darkLocal = window.localStorage.getItem('dark');
    
    if (darkLocal === 'true') {
        document.body.classList.add('dark-mode');
    }
    
    document.querySelector('.dark-mode-btn').addEventListener('click', darkChange);
    
    function darkChange() {
        let darkLocal = window.localStorage.getItem('dark');
        window.localStorage.setItem('dark', darkLocal !== 'true');
        document.body.classList.toggle('dark-mode');
    }
    
}

function eventListeners(){
    const mobileMenu = d.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click',navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = d.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

