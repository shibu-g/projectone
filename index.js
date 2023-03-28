let item1=document.querySelector('.item1');
let item2=document.querySelector('.item2');
let item3=document.querySelector('.item3');
let item4=document.getElementsByClassName('logout');
function newbooking(){
  
    window.location.href="createbooking.php";
}
function history(){
   
    window.location.href="#";

}
function locations(){
   
    window.location.href="#";
}
function hi(){
   
    window.location.href="login.php";
}

item1.addEventListener('click',newbooking);
item2.addEventListener('click',history);
item3.addEventListener('click',locations);
item4.addEventListener('click',hi);

