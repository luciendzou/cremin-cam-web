document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('image-slideshow-container');
    if (!container) {
        console.error('Slideshow container not found!');
        return;
    }

    const images = container.querySelectorAll('.slideshow-image');
    if (images.length <= 1) {
        // console.log('Not enough images for slideshow.');
        return; // No slideshow needed
    }

    let currentImageIndex = 0;
    const slideInterval = 8000; // Time in ms (4 seconds)

    // Ensure only the first image is active initially
    images.forEach((img, index) => {
        if (index === 0) {
            img.classList.add('active');
        } else {
            img.classList.remove('active');
        }
    });

    function showNextImage() {
        if (images.length === 0) return; // Should not happen, but safe check

        // Fade out current image
        images[currentImageIndex].classList.remove('active');

        // Calculate next index
        currentImageIndex = (currentImageIndex + 1) % images.length;

        // Fade in next image
        images[currentImageIndex].classList.add('active');
    }

    // Start the slideshow loop
    setInterval(showNextImage, slideInterval);
});
