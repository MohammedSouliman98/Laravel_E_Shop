var dropbtn = document.getElementById('dropmenu-btn');
var dropmenu = document.getElementById('dropmenu');
var btn =document.querySelectorAll('.back-next-btn');
var slider = document.getElementById('slider');
var image = ["carousel-1" , "carousel-2"] ;
var i = 0;



dropbtn.addEventListener('click' ,()=>{

dropmenu.classList.toggle('hidden');

})


btn.forEach(btn =>{
   btn.addEventListener('click', (e)=>{

      if(btn.dataset.btn == 'next'){
         i++;
         slid()
      }else{
         i--;
         slid()
      }
    return  slider.style.backgroundImage = "url(img/" + image[i] +".jpg)";
   })
})



setInterval(() => {
   i++;
   slid();
slider.style.backgroundImage = "url(img/" + image[i] +".jpg)";
}, 2000);


function slid(numofimag = image.length){
   if(i > numofimag - 1 )
      i = 0 ;
   if ( i < 0 )
      i = 1 ;
   return i + " " + console.log(i) ;
}
