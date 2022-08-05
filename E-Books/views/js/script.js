searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}

// signup

let signupForm = document.querySelector('.signup-form-container');

document.querySelector('#signup-btn').onclick = () =>{
  loginForm.classList.remove('active');
  signupForm.classList.toggle('active');
}

document.querySelector('#close-signup-btn').onclick = () =>{
  signupForm.classList.remove('active');
}

window.onscroll = () =>{

  searchForm.classList.remove('active');

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

}

window.onload = () =>{

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

  fadeOut();

}

function loader(){
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader, 4000);
}

var swiper = new Swiper(".books-slider", {
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  // loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

$(document).ready(function(){
  $("#ser").click(function(){
    $("#list-ser").slideToggle();
  });
});
$(document).ready(function(){
  $("#cat").click(function(){
    $("#list").slideToggle();
  });
});

var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor:true,
  // loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".blogs-slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var settingsmenu = document.querySelector(".sm");
var darkBtn = document.getElementById("drk-bnt");

function settingsMenuToggle(){
    settingsmenu.classList.toggle("smh");
}
darkBtn.onclick = function(){
    darkBtn.classList.toggle("drk-bnt-on");
    document.body.classList.toggle("dark-theme");

    if(localStorage.getItem("theme") == "light"){
        localStorage.setItem("theme", "dark");
    }
    else{
        localStorage.setItem("theme", "light");
    }

}


if(localStorage.getItem("theme") == "light"){
    darkBtn.classList.remove("drk-bnt-on");
    document.body.classList.remove("dark-theme");
}
else if(localStorage.getItem("theme") == "dark"){
    darkBtn.classList.add("drk-bnt-on");
    document.body.classList.add("dark-theme");
}
else{
    localStorage.setItem("theme", "light");
}

$(document).ready(function () {
  $("#FeedButton").click(function () {
      $(".FeedContainer").fadeToggle();
  });
});

$(document).ready(function () {
  $("#feedremove").click(function () {
      $("#feedsticky").fadeOut(500,);
  });
});
// const btn = document.querySelector("button");
// const post = document.querySelector(".post");
// const widget = document.querySelector(".star-widget");
// const editBtn = document.querySelector(".edit");
// btn.onclick = ()=>{
// widget.style.display = "none";
// post.style.display = "block";
// editBtn.onclick = ()=>{
// widget.style.display = "block";
// post.style.display = "none";
// }
// return false;
// }

var product_total_amt = document.getElementById('product_total_amt');
var shipping_charge = document.getElementById('shipping_charge');
var total_cart_amt = document.getElementById('total_cart_amt');
var discountCode = document.getElementById('discount_code1');
const decreaseNumber = (incdec, itemprice) => {
var itemval = document.getElementById(incdec);
var itemprice = document.getElementById(itemprice);
console.log(itemprice.innerHTML);
// console.log(itemval.value);
if (itemval.value <= 0) {
      itemval.value = 0;
      alert('Negative quantity not allowed');
  } else {
      itemval.value = parseInt(itemval.value) - 1;
      itemval.style.background = '#fff';
      itemval.style.color = '#000';
      itemprice.innerHTML = parseInt(itemprice.innerHTML) - 15;
      product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) - 15;
      total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
  }
}
const increaseNumber = (incdec, itemprice) => {
var itemval = document.getElementById(incdec);
var itemprice = document.getElementById(itemprice);
// console.log(itemval.value);
if (itemval.value >= 5) {
      itemval.value = 5;
      alert('max 5 allowed');
      itemval.style.background = 'red';
      itemval.style.color = '#fff';
  } else {
      itemval.value = parseInt(itemval.value) + 1;
      itemprice.innerHTML = parseInt(itemprice.innerHTML) + 15;
      product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) + 15;
      total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
  }
}