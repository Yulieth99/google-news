const btn = document.querySelector('#btn')
const navTop = document.querySelector('#navTop')
const sideBar = document.querySelector('#sideBar')

window.onresize = start;

function start(){
    if(sideBar.classList.contains('-translate-x-full')){
        sideBar.classList.toggle('-translate-x-full' )


     }
    
 if(document.documentElement.clientWidth > 1024){    

     if(!(sideBar.classList.contains('lg:translate-x-0'))){
        sideBar.classList.add('lg:translate-x-0')
     }
    

 }
}
btn.addEventListener('click', () =>{
    var a = sideBar.classList.contains('lg:translate-x-0');
   
    if(a){
        sideBar.classList.remove('lg:translate-x-0')
    }else{
        sideBar.classList.toggle('-translate-x-full' )

    }
   
   
   
})