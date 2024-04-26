// JavaScript Document

const carouselSlide = document.querySelector('.imgGaleria');
const carouselImages = document.querySelectorAll('.imgGaleria img');

// Botões
const prevBtn = document.querySelector('#anterior');
const nextBtn = document.querySelector('#proximo');

// Contador
let counter = 1;
let size = (carouselImages[0].clientWidth);
carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

// Botões

nextBtn.addEventListener('click', ()=>{
	if (counter >= carouselImages.length - 1) return;
	carouselSlide.style.transition = "transform 0.4s ease-in-out";
	counter ++;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
	size = (carouselImages[0].clientWidth);
});

prevBtn.addEventListener('click', ()=>{
	if (counter <= 0) return;
	carouselSlide.style.transition = "transform 0.3s ease-in-out";
	counter --;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
	size = (carouselImages[0].clientWidth);
});

carouselSlide.addEventListener('transitionend', ()=>{
	if(carouselImages[counter].id === 'cloneUltima')
		{
			carouselSlide.style.transition = "none";
			counter = carouselImages.length - 2;
			carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
		}

	if(carouselImages[counter].id === 'clonePrimeira')
		{
			carouselSlide.style.transition = "none";
			counter = carouselImages.length - counter;
			carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
		}
});


//setInterval(()=>{
//	if (counter >= carouselImages.length - 1) return;
//	carouselSlide.style.transition = "transform 0.4s ease-in-out";
//	counter ++;
//	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
//}, 3000)




