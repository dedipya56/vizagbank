let toggleStatus= false;
let toggleNav=function(){
    let getSidebar=document.querySelector(".nav-sidebar");
    let getSidebarUl=document.querySelector(".nav-sidebar ul");
    let getSidebartitle=document.querySelector(".nav-sidebar span");
    let getSidebarLinks=document.querySelectorAll(".nav-sidebar ul li a");
    let getcontent1=document.querySelector(".content1");
    let getcontent2=document.querySelector(".content2");
    let getcontentol=document.querySelector(".content3");

    if(toggleStatus === false){
        getSidebarUl.style.visibility='visible';
        getSidebar.style.width='272px';
        getSidebartitle.style.opacity='0.5';
        getcontent1.style.paddingLeft='200px';
        getcontent2.style.paddingLeft='200px';
        getcontentol.style.paddingLeft='200px';



        let arrayLength=getSidebarLinks.length;
        for(let i=0;i<arrayLength;i++){
            getSidebarLinks[i].style.opacity="1";
        }
       
        toggleStatus=true;

    }
    else if (toggleStatus=== true) {
        getSidebar.style.width='50px';
        getSidebartitle.style.opacity='0';
        getcontent1.style.paddingLeft='80px';
        getcontent2.style.paddingLeft='80px';
            getcontentol.style.paddingLeft='80px';



        let arrayLength=getSidebarLinks.length;
        for(let i=0;i<arrayLength;i++){
           getSidebarLinks[i].style.opacity="0";
       }
       getSidebarUl.style.visibility='visible;'
       toggleStatus=false;

   }


}