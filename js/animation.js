// Particle.js
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('js/particles.min.js', 'js/particlesjs-config.json', function() {
    console.log('callback - particles.js config loaded');
});
// Animations -  Anime.js


// GLOBAL VARIABLES



// Main Slider

var BounceIn = anime({
    // Target
    targets: '.BounceIn',
    // Animation Type
    opacity: 1,
    backgroundColor: '#FFF',
    borderRadius: ['0em', '2em'],
    easing: 'easeInOutQuad'
});