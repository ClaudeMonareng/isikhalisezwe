
const navigation = document.querySelector('.navigation');

// MOBILE TOGGLE NAVBAR

const navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right= "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}

// STICKY NAVBAR                            
// NAVIGATION BAR EFFECTS ON SCROLL 

window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

// REGISTRATION FORM

const form = document.querySelector("form");

nextBtn = form.querySelector(".nextBtn"),
backBtn = form.querySelector(".backBtn"),
submitBtn = form.querySelector(".submitBtn"),
allInput = form.querySelectorAll(".first input");

nextBtn.addEventListener("click", ()=>{
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
            alert("input is empty");
        }
    });
});
submitBtn.addEventListener("click", ()=>{
    
});

backBtn.addEventListener("click", () => form.classList.remove('secActive'));