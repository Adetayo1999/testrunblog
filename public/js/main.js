
window.onscroll = function(){scrollFunction()};
const Nav =  document.querySelector('nav');
Nav.style.transition = "all 0.5s ease-out";
console.log(Nav);
const scrollFunction = () => {
  if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
   
   Nav.classList.add("bg-white");
   Nav.classList.add("navbar-light");
   Nav.classList.remove('navbar-dark')
   Nav.classList.remove('bg-dark')
  
  }else{
    Nav.classList.remove("bg-white")
    Nav.classList.remove("navbar-light");
    Nav.classList.add('navbar-dark')
    Nav.classList.add('bg-dark')
  }
}


// navbar-dark bg-dark