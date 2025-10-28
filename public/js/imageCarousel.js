const mainImage = document.getElementById('main-image');
const thumbnails = document.querySelectorAll('.thumbnail');

thumbnails.foreach(thumb => thumb.addEventListener('click', () =>{
 mainImage.src = thumb.src;
}));