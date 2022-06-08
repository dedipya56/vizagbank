let toggleStatus= false;
let toggleNav=function(){
    let getSidebar=document.querySelector(".nav-sidebar");
    let getSidebarUl=document.querySelector(".nav-sidebar ul");
    let getSidebartitle=document.querySelector(".nav-sidebar span");
    let getSidebarLinks=document.querySelectorAll(".nav-sidebar ul li a");
    let getAccnumber=document.querySelector('.accnumber');
    let getAccname=document.querySelector('.accname');
    let getAccbalan=document.querySelector('.acccbalance');
    if(toggleStatus === false){
        getSidebarUl.style.visibility='visible';
        getSidebar.style.width='272px';
        getSidebartitle.style.opacity='0.5';
        getAccnumber.style.paddingLeft='285px';
        getAccname.style.paddingLeft='285px';
        getAccbalan.style.paddingLeft='285px';
        let arrayLength=getSidebarLinks.length;
        for(let i=0;i<arrayLength;i++){
            getSidebarLinks[i].style.opacity="1";
        }
       
        toggleStatus=true;

    }
    else if (toggleStatus=== true) {
        getSidebar.style.width='50px';
        getSidebartitle.style.opacity='0';
        getAccnumber.style.paddingLeft='65px';
        getAccname.style.paddingLeft='65px';
        getAccbalan.style.paddingLeft='65px';
        let arrayLength=getSidebarLinks.length;
        for(let i=0;i<arrayLength;i++){
           getSidebarLinks[i].style.opacity="0";
       }
       getSidebarUl.style.visibility='visible;'
       toggleStatus=false;

   }


}