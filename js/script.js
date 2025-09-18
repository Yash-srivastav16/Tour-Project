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

// Function to handle header state on scroll
const handleHeaderScroll = () => {
    // Close mobile navbar if open
    navbar.classList.remove('active');
    
    const header = document.querySelector('.header');
    
    // Add header active class on scroll
    if (window.scrollY > 0) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
};

// Add scroll event listener with passive option for better performance
window.addEventListener('scroll', handleHeaderScroll, { passive: true });

// Initial check when page loads
window.addEventListener('load', handleHeaderScroll);

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


