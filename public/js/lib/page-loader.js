const preloader = document.querySelector('.loader-fl'); const fadeEffect = setInterval(() => {
  if (!preloader.style.display) { preloader.style.display = "none"; }
  if (preloader.style.opacity > 0) { preloader.style.opacity -= 0.1; } else { clearInterval(fadeEffect); }
}, 2000);
window.addEventListener('load', () => fadeEffect);