const btn = document.querySelector('#btn')
const sideBar = document.querySelector('#sideBar')

window.onresize = start;

function start(){
    
 if(document.documentElement.clientWidth > 1024){
    

     if(!(sideBar.classList.contains('lg:translate-x-0'))){
        sideBar.classList.add('lg:translate-x-0')
     }

 }else{
    if(sideBar.classList.contains('-translate-x-full')){
        sideBar.classList.toggle('-translate-x-full' )
    }
    
 }
}
btn.addEventListener('click', () =>{
    var a = sideBar.classList.contains('lg:translate-x-0');
    if(sideBar.classList.contains('lg:translate-x-0')){
        sideBar.classList.remove('lg:translate-x-0')
    }else{
        sideBar.classList.toggle('-translate-x-full' )


    }
   


})