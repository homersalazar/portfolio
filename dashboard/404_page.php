<?php 
    include_once("../partials/header.php");
?>
<style>
    #animated_background {
        height: 100vh;
        background-color: var(--bg);
        overflow: hidden;

    }
    .content {
        z-index:1;
        color: #fff;
        text-align: center;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }
    .content h1{
        font-size: 4.5rem;
        color: var(--btn);    
        font-weight: 900;
    }
    .content h2{
        font-size: 2.5rem;
    }
    .content p{
        font-size: 1rem;
    }


</style>
    <div id="animated_background">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h1>404</h1>
                    <h2> PAGE NOT FOUND </h2>
                    <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                </div>
            </div>
        </div>
    </div>

<script>
    particlesJS("animated_background", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
<?php 
    include_once("../partials/footer.php");
?>
