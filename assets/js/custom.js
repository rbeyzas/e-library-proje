$(document).ready(function() {
	$(".toggle-nav").click(function() {
		$(".nav").slideToggle("slow",function(){
		});
	});	

	if(window.innerWidth > 800) {
		var headerHeight=$(".header").height();
		$('section.kurumsal-slider').css("margin-top", headerHeight+100);
		$('section.reservation').css("margin-top", headerHeight+100);
		$('section.hakkimizda-ekibimiz').css("margin-top", headerHeight+100);
		$('section.hizmetler-slider').css("margin-top", headerHeight+100);
		$('section.iletisim-page').css("margin-top", headerHeight+100);
	}
	else	
	{
		var headerHeight=$(".header").height();
		$('section.kurumsal-slider').css("margin-top", headerHeight+50);
		$('section.reservation').css("margin-top", headerHeight+50);
		$('section.hakkimizda-ekibimiz').css("margin-top", headerHeight+50);
		$('section.hizmetler-slider').css("margin-top", headerHeight+50);
		$('section.iletisim-page').css("margin-top", headerHeight+50);
	}

	$('#ekip-slider1').owlCarousel({      
		dots: false,      
		nav:false,       
		items:1,    
		autoplay: true,  
		autoplaySpeed: 2000,
		loop: true,     
		lazyLoad: true,     
		mouseDrag:false,    
		touchDrag:false,    
		pullDrag:false   
	});	
    
	$('#ekip-slider2').owlCarousel({      
		dots: false,      
		nav:false,       
		items:1,    
		autoplay: true,  
		autoplaySpeed: 2000,
		loop: true,     
		lazyLoad: true,     
		mouseDrag:false,    
		touchDrag:false,    
		pullDrag:false   
	});
    
	$('#ekip-slider3').owlCarousel({      
		dots: false,      
		nav:false,       
		items:1,    
		autoplay: true,  
		autoplaySpeed: 2000,
		loop: true,     
		lazyLoad: true,     
		mouseDrag:false,    
		touchDrag:false,    
		pullDrag:false   
	});
    
	$('#ekip-slider4').owlCarousel({      
		dots: false,      
		nav:false,       
		items:1,    
		autoplay: true,  
		autoplaySpeed: 2000,
		navSpeed:2000,
		loop: true,     
		lazyLoad: true, 
		autoplayHoverPause: true,	
		navText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]
	});

	$("#ekip-slider4").hover(function () {
		isStopped = true;
	}, function () {
		isStopped = false;
	});

	$('#team-slider1').owlCarousel({      
		dots: false,      
		nav:false,       
		items:1,    
		autoplay: true,  
		autoplaySpeed: 1600,
		navSpeed:1600,
		loop: true,     
		lazyLoad: true,     
		mouseDrag:false,    
		touchDrag:false, 
		autoplayHoverPause: true,	   
		pullDrag:false,
		navText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]
	});

	$('#team-slider2').owlCarousel({  
		margin: 20,    
		dots: true,      
		nav:false,       
		items:2,    
		autoplay: true,  
		autoplaySpeed: 1600,
		loop: true,     
		lazyLoad: true,     
		mouseDrag:false,    
		touchDrag:false,    
		pullDrag:false   
	});

	(function Onscrollfnction() {
		$.fn.countTo = function (options) {
			options = options || {};
		
			return $(this).each(function () {
				// geçerli eleman için seçenekler ayarlanıyor
				var settings = $.extend({}, $.fn.countTo.defaults, {
					from:            $(this).data('from'),
					to:              $(this).data('to'),
					speed:           $(this).data('speed'),
					refreshInterval: $(this).data('refresh-interval'),
					decimals:        $(this).data('decimals')
				}, options);
			
				// değeri güncellemek için kaç kez ve her güncellemede değeri ne kadar arttırmam gerektiği
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
				// her güncelleme ile değişecek referanslar ve değişkenler
				var self = this,
					$self = $(this),
					loopCount = 0,
					value = settings.from,
					data = $self.data('countTo') || {};
			
				$self.data('countTo', data);
			
				// Mevcut bir aralık varsa, önce temizle
				if (data.interval) {
					clearInterval(data.interval);
				}
				data.interval = setInterval(updateTimer, settings.refreshInterval);
			
				// öğeyi başlangıç değeriyle başlat
				render(value);
			
				function updateTimer() {
					value += increment;
					loopCount++;
				
					render(value);
				
					if (typeof(settings.onUpdate) == 'function') {
						settings.onUpdate.call(self, value);
					}
				
					if (loopCount >= loops) {
						// aralığı kaldır
						$self.removeData('countTo');
						clearInterval(data.interval);
						value = settings.to;
					
						if (typeof(settings.onComplete) == 'function') {
							settings.onComplete.call(self, value);
						}
					}
				}
			
				function render(value) {
					var formattedValue = settings.formatter.call(self, value, settings);
					$self.html(formattedValue);
				}
			});
		};
	
		$.fn.countTo.defaults = {
			from: 0,               // öğenin başlaması gereken sayı
			to: 0,                 // öğenin bitmesi gereken sayı
			speed: 1000,           // Hedef numaraları arasında saymak için ne kadar zaman gerekir
			refreshInterval: 100,  // öğenin ne sıklıkta güncellenmesi gerektiği
			decimals: 0,           // Gösterilecek ondalık basamak sayısı
			formatter: formatter,  // İşleme başlamadan önce değeri biçimlendirmek için işleyici
			onUpdate: null,        // Öğe her güncellendiğinde geri arama yöntemi
			onComplete: null       // öğenin güncelleştirmeyi tamamladığı zaman için geri arama yöntemi
		};
	
		function formatter(value, settings) {
			return value.toFixed(settings.decimals);
		}
	}(jQuery));

	jQuery(function ($) {
  		$('.count-number').data('countToOptions', {
			formatter: function (value, options) {
	  		return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
		}
  	});
  
  	// tüm zamanlayıcıları başlat
  	$('.timer').each(count);  
  
  	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
  	}
});
}); 

function dropDownClick() {
	document.getElementById("dropDown").classList.toggle("show");
}

window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}

//SLİDER
const slideshowImages = document.querySelectorAll(".intro-slideshow img");

const nextImageDelay = 5000;
let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

// slideshowImages[currentImageCounter].style.display = "block";
slideshowImages[currentImageCounter].style.opacity = 1;

setInterval(nextImage, nextImageDelay);

function nextImage() {
  // slideshowImages[currentImageCounter].style.display = "none";
  slideshowImages[currentImageCounter].style.opacity = 0;

  currentImageCounter = (currentImageCounter+1) % slideshowImages.length;

  // slideshowImages[currentImageCounter].style.display = "block";
  slideshowImages[currentImageCounter].style.opacity = 1;
}
//END SLİDER

//login
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }



//login
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
    document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
  document.querySelector('.cont_form_login').style.display = "block";
  document.querySelector('.cont_form_sign_up').style.opacity = "0";               
  
  setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
    
  setTimeout(function(){    
  document.querySelector('.cont_form_sign_up').style.display = "none";
  },200);  
    }
  
  function cambiar_sign_up(at) {
    document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
    document.querySelector('.cont_form_sign_up').style.display = "block";
  document.querySelector('.cont_form_login').style.opacity = "0";
    
  setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
  },100);  
  
  setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
  },400);  
  
  
  }    
  
  
  
  function ocultar_login_sign_up() {
  
  document.querySelector('.cont_forms').className = "cont_forms";  
  document.querySelector('.cont_form_sign_up').style.opacity = "0";               
  document.querySelector('.cont_form_login').style.opacity = "0"; 
  
  setTimeout(function(){
  document.querySelector('.cont_form_sign_up').style.display = "none";
  document.querySelector('.cont_form_login').style.display = "none";
  },500);  
    
    }
  
  
  
  
//end login



