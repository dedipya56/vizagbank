let toggleStatus= false;
let toggleNav=function(){
    let getSidebar=document.querySelector(".nav-sidebar");
    let getSidebarUl=document.querySelector(".nav-sidebar ul");
    let getSidebartitle=document.querySelector(".nav-sidebar span");
    let getSidebarLinks=document.querySelectorAll(".nav-sidebar ul li a");
    let getcontentp=document.querySelector(".content p");
    let getcontenth5=document.querySelector('.content h5');
    let getcontenth3=document.querySelector('.content h3');
    let getcontenthings=document.querySelector('.things');
    let getcontenth4=document.querySelector('.content h4');
    let getcontentthingsul=document.querySelector('.things ul')
    if(toggleStatus === false){
        getSidebarUl.style.visibility='visible';
        getSidebar.style.width='272px';
        getcontentp.style.paddingLeft='300px';
        getcontenth5.style.paddingLeft='300px';
        getcontenth3.style.paddingLeft='300px';
        getcontenthings.style.paddingLleft='320px';
        getcontenth4.style.paddingLeft="300px";
        getcontentthingsul.style.paddingLeft="250px";
        getSidebartitle.style.opacity='0.5';
        let arrayLength=getSidebarLinks.length;
        for(let i=0;i<arrayLength;i++){
            getSidebarLinks[i].style.opacity="1";
        }
       
        toggleStatus=true;

    }
    else if (toggleStatus=== true){
        getSidebar.style.width='50px';
        getSidebartitle.style.opacity='0';
        getcontentp.style.paddingLeft='80px';
        getcontenth5.style.paddingLeft='80px';
        getcontenth3.style.paddingLeft='80px';
        getcontenthings.style.paddingLleft='100px';
        getcontenth4.style.paddingLeft="80px";
        getcontentthingsul.style.paddingLeft="40px";
        let arrayLength=getSidebarLinks.length;
         for(let i=0;i<arrayLength;i++){
            getSidebarLinks[i].style.opacity="0";
        }
        getSidebarUl.style.visibility='visible;'
        toggleStatus=false;

    }


}