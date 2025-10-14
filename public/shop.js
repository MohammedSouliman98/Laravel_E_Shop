var dropbtn = document.getElementById('dropmenu-btn');
var dropmenu = document.getElementById('dropmenu');
var btn =document.querySelectorAll('.back-next-btn');
var slider = document.getElementById('slider');
var cartbtn = document.getElementById('cart-btn');
var cartdetail = document.getElementById('cart-detail');
var filter = document.getElementById('filters');
var filterbtn = document.getElementById('filter-btn');
var image = ["carousel-1" , "carousel-2"] ;
var i = 0;
var toggle = document.getElementById('toggle');
var toggleContent = document.getElementById('toggle-content');



toggle.addEventListener('click', ()=>{
   toggleContent.classList.toggle('hidden');
   toggleContent.classList.toggle('active');

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
    return  slider.style.backgroundImage = "url(http://127.0.0.1:8000/img/" + image[i] +".jpg)";
   })
})


setInterval(() => {
   i++;
   slid();
slider.style.backgroundImage = "url(http://127.0.0.1:8000/img/" + image[i] +".jpg)";
}, 2000);


function slid(numofimag = image.length){
   if(i > numofimag - 1 )
      i = 0 ;
   if ( i < 0 )
      i = 1 ;
   return i ;
}


function getcart(element){
  
   element.classList.toggle('hidden')
}

cartbtn.addEventListener('click' ,()=>{
   getcart(cartdetail)
})

// filterbtn.addEventListener('click' ,()=>{
//    getcart(filter)
// })

dropbtn.addEventListener('click' ,()=>{
   getcart(dropmenu)
})

