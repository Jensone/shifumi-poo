// Select all elements with the data-choice attribute
const elements = document.querySelectorAll('[data-choice]');

// Iterate over the elements
elements.forEach(element => {
    // Add a mouseover event listener to each element
    element.addEventListener('mouseover', () => {
        // Get the value of the data-choice attribute
        const choice = element.getAttribute('data-choice');

        // Use the value of the data-choice attribute to determine which sound to play
        const audio = new Audio(`assets/sounds/${choice}.mp3`);

        // Play the sound
        audio.play();
    });
});