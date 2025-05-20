// Manually list your image names here:
const imageNames = ['lukababy.jpg', 'luka2.jpg', 'luka3.jpg'];

const galleryDiv = document.getElementById('gallery');

imageNames.forEach((name) => {
  const img = document.createElement('img');
  img.src = `LUKAS/${name}`;
  img.className = 'swipe-img';
  galleryDiv.appendChild(img);
});