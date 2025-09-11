let navbar = document.querySelector('.header .navbar');
document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}
document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}


//----------- Toggle Search Form Updated----------------//
const searchBtn = document.getElementById('search-btn');
const closeSearch = document.getElementById('close-search');
const searchForm = document.querySelector('.search-form');

searchBtn.addEventListener('click', () => {
    searchForm.classList.add('active');
});

closeSearch.addEventListener('click', () => {
    searchForm.classList.remove('active');
});

window.onscroll=()=>{
    navbar.classList.remove('active');
    if(window.scrollY>0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
};
window.onload=()=>{
    if(window.scrollY>0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
};

// handle increase/decrease buttons for adults & children
document.querySelectorAll('.increase').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target);
    target.value = parseInt(target.value) + 1;
  });
});

document.querySelectorAll('.decrease').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target);
    if (parseInt(target.value) > 0) { // don’t go below 0
      target.value = parseInt(target.value) - 1;
    }
  });
});


