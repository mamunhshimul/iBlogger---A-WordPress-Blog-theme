window.addEventListener('scroll', () => {
	
	document.querySelector('#count').innerHTML = window.pageYOffset;
	
	if(window.pageYOffset >= 30){
		document.querySelector('.home-service-development').classList.add('animates');
		document.querySelector('.intro-txt').classList.add('animates');
	} else {
		document.querySelector('.intro-img').classList.remove('animates');
		document.querySelector('.intro-txt').classList.remove('animates');
	}
	
	if(window.pageYOffset >= 350){
			document.querySelector('.small-block-one').classList.add('animates');
		document.querySelector('.small-block-two').classList.add('animates');
	} else {
		document.querySelector('.small-block-one').classList.remove('animates');
		document.querySelector('.small-block-two').classList.remove('animates');
	}
	
	if(window.pageYOffset >= 650){
			document.querySelector('.txt').classList.add('animates');
	} else {
		document.querySelector('.txt').classList.remove('animates');
	}
	
	
	
});


window.addEventListener('scroll', () => {
	
	
	if(window.pageYOffset >= 30){
		document.querySelector('.home-banner_text').classList.add('home-banner_text_effect'); 
	} else {
		document.querySelector('.home-banner_text').classList.remove('home-banner_text_effect'); 
	}


if(window.pageYOffset >= 30){
		document.querySelector('.home-banner_bg').classList.add('home-banner_bg_effect'); 
} 
else {
	document.querySelector('.home-banner_bg').classList.remove('home-banner_bg_effect'); 
}	
 
	
	
	
});	