const btnShow = document.querySelectorAll(".show-pass");
if(btnShow){
    function showPass(){
        const iconShowPass = document.querySelectorAll(".show-pass-icon");
        const iconHidePass = document.querySelectorAll(".hide-pass-icon");
        for(let i=0;i<btnShow.length;i++){
            document.querySelectorAll(".show-pass")[i].style.cursor = "pointer";
            btnShow[i].addEventListener("click",function(){
                iconShowPass[i].classList.toggle("hidden");
                iconHidePass[i].classList.toggle("hidden");
                if(iconShowPass[i].classList.contains("hidden") && !iconHidePass[i].classList.contains("hidden")){
                    document.querySelectorAll(".pass-input")[i].type = "text";
                }
                else if(!iconShowPass[i].classList.contains("hidden") && iconHidePass[i].classList.contains("hidden")){
                    document.querySelectorAll(".pass-input")[i].type = "password";
                }
            });
        }
    }
    showPass();
}
const registerShowBtn = document.querySelector(".register-slide");
if(registerShowBtn){
    const navBar = document.querySelector(".nav");
    function showReg(){
        const loginForm = document.querySelector(".login-form-container");
        const registerForm = document.querySelector(".register-form-container");
        registerShowBtn.addEventListener("click",function(){
            navBar.style.background = "black";
            loginForm.style.transform = "translateX(-200%)";
            registerForm.style.transform = "translateX(-50%)";
            document.querySelector("body").style.backgroundColor = "black";
        });
    }
    function showLogin(){
        const loginShowBtn = document.querySelector(".login-slide");
        const loginForm = document.querySelector(".login-form-container");
        const registerForm = document.querySelector(".register-form-container");
        loginShowBtn.addEventListener("click",function(){
            loginForm.style.transform = "translateX(50%)";
            registerForm.style.transform = "translateX(200%)";
            document.querySelector("body").style.backgroundColor = "white";
        });
    }
    showReg();
    showLogin();
}
const navUserIcon = document.querySelector(".nav-user-icon");
if(navUserIcon){
    const navUserTools = document.querySelector(".nav-user-tools")
    function displayUserTools(){
        navUserIcon.addEventListener("click",()=>{
            navUserTools.classList.toggle("hidden");
        });
    }
    displayUserTools();
}
const adminTools = document.querySelectorAll(".admin-tool");
if(adminTools){
    const adminContent = document.querySelectorAll(".content-area");
    adminTools.forEach(function(item,index){
        item.addEventListener("click",function(){
            document.querySelector(".active").classList.add("hidden");
            document.querySelector(".active").classList.remove("active");
            adminContent[index].classList.toggle("hidden");
            adminContent[index].classList.add("active");
        });
    });
}
const productImageUpload =  document.querySelector("#productImage");
if(productImageUpload){
    const imageDisplay = document.querySelector("#displayProductImage");
    productImageUpload.addEventListener("change",function(){
        imageDisplay.src = URL.createObjectURL(productImageUpload.files[0]);
    }); 
}

const rangeSlider = document.querySelectorAll("#maxprice");
if(rangeSlider){
    function RangeDisplay(){
        const rangeminValue = document.querySelector('#minprice');
        const rangemaxValue = document.querySelector('#maxprice');
        const rangeMinDisplayArea = document.querySelector('#rangemindisplay');
        const rangeMaxDisplayArea = document.querySelector('#rangemaxdisplay');
    
        rangeMinDisplayArea.innerHTML = "Ksh. " + rangeminValue.value;
        rangeMaxDisplayArea.innerHTML = "Ksh. " + rangemaxValue.value;
    }

    RangeDisplay();
}