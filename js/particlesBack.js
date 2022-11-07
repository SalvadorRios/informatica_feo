var particles = Particles.init({
	selector: '.backgroundMarino',
    color: ['#000'],
    connectParticles: true,
    responsive: [{
        breakpoint: 800,
        options: {
            color: '#000',
            maxParticles: 80,
        connectParticles: false
        }
    }]
});