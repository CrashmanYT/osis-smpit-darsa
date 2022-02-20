// Init AOS
AOS.init();
console.log("test");

window.onscroll = function () {
    const navbar = document.getElementsByClassName('navbar')[0];
    // if document scrolled, add 'bg-dark' & 'shadow-sm' classes to navbar
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        navbar.classList.add('bg-dark', 'shadow-sm');
    } else {
        navbar.classList.remove('bg-dark', 'shadow-sm');
    }


}