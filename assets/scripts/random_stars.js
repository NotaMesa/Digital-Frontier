document.addEventListener('DOMContentLoaded', () => {
    const space = document.getElementById('space');
    const starCount = 80; // Adjust the number of stars as needed

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        const size = Math.random() * 8 + 1; // Random size between 1 and 10px
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.top = `${Math.random() * 100}%`; // Random position
        star.style.left = `${Math.random() * 100}%`; // Random position
        star.style.animationDuration = `${Math.random() * 30 + 30}s`; // Random animation duration between 30s and 60s
        space.appendChild(star);
    }
});