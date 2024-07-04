


function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  var swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 3,
    // direction: getDirection(),
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768:{
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1420: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
    // on: {
    //   resize: function () {
    //     swiper.changeDirection(getDirection());
    //   }
    // }
  });

//   function getDirection() {
//     var windowWidth = window.innerWidth;
//     var direction = window.innerWidth <= 760 ? "vertical" : "horizontal";

//     return direction;
//   }

//menu onclick
$('.header__menu').on('click', function(e) {
  e.preventDefault();
  $(this).next().toggleClass('active');
});


// $(document).click(function (e) {
//     var containers = $('.header__menu, .nav');
//     if (!containers.is(e.target) && containers.has(e.target).length === 0){
//         containers.removeClass('active');
//     }
// });


// the scroll page top move--Start here

	$(document).ready(function(){
	
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup_round').fadeIn();
				} else {
					$('.scrollup_round').fadeOut();
				}
			}); 
	 
			$('.scrollup_round').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
		
		
	});


// the active page css change--
$(document).ready(function () {
  AOS.init();
  // $(".header-wrap li a").click(function () {
  //   $(this).parent().addClass("home_active");
  //   $(this).parent().siblings().removeClass("home_active");
  // });
});
$(document).ready(function() {
  var path = window.location.pathname;
  $('.header-wrap li').removeClass('home_active'); // Remove class from all li elements
  $('.header-wrap li a[href="' + path + '"]').parent().addClass('home_active'); // Add class to the current page's li element
});





// the below is page reload-
$(window).load(function () {
  // Preloader
  $('.loader').fadeOut('slow');
  $('.loader-mask').delay(650).fadeOut('fast');

});




// function openNav() {
//   var a = document.getElementById("mySidenav");
//   var b = document.getElementById("toggle_bar");
//   if(a.style.display === "block"){
//     a.style.display = "none";
//     b.style.display = "block";
//   }
//   else{
//     a.style.display = "block";
//     b.style.display = "none";
//   }
// }

// function openNav() {
//   var a = document.getElementById("mySidenav").style.display = "block";
//   var b = document.getElementById("toggle_bar").style.display = "none";
//   if(a =! b){
//     style.display = "block";
//   }
//   else{
//     style.display = "none";
//   }
// }

// function openNav() {
//   var sidebar = document.getElementById("mySidenav");
//   var toggleButton = document.getElementById("toggle_bar");

//   sidebar.classList.toggle("hidden");
//   toggleButton.classList.toggle("hidden", sidebar.classList.contains("hidden"));
// }
