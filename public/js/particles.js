
window.addEventListener('DOMContentLoaded', (event) =>{
  particlesJS("particles-js",{
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 2800.0000000000005
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.576,
        "random": true,
        "anim": {
          "enable": true,
          "speed": 0.24307834415031981,
          "opacity_min": 0.1458470064901919,
          "sync": true
        }
      },
      "size": {
        "value": 16,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 2.8800000000000003
      },
      "move": {
        "enable": true,
        "speed": 1.1,
        "direction": "top",
        "random": false,
        "straight": true,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 800,
          "rotateY": 320
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "bubble"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 461.84885388560764,
          "size": 129.64178354683722,
          "duration": 1.2153917207515992,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  });
});