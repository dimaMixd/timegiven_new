window.onload = function(){

    var loader = document.getElementById('loader');
    
    //remove loader after 2500ml
    setTimeout(function(){
        loader.style.display = 'none';
    }, 2500);

    //scroll into view links
    var links = document.querySelectorAll('.bottom-menu a, .anchor-links a');
    //var mobileLinks = document.querySelectorAll('.anchor-links a');
    
    links.forEach(function(link){
        link.addEventListener('click', function(e){
            e.preventDefault();
            var targetEl = document.getElementById(e.target.dataset.href);

            body.classList.remove('menu-opened');

            if(window.innerWidth > 767) {
                targetEl.scrollIntoView({
                    behavior: 'smooth'
                })
            } else {
                targetEl.scrollIntoView({
                    behavior: 'auto'
                })
            }

        })
    })

    var video = document.getElementById('video');

    if(window.innerWidth > 767) {
        window.addEventListener('scroll', function(e){
            var logoIcon = document.getElementById('logo-icon');
            
            var iconScroll = window.scrollY/8;
            var videoScroll = -window.scrollY/12;
    
            logoIcon.style.transform = `translate3d(0, ${iconScroll}px, 0)`;
            video.style.transform = `translate3d(0, ${videoScroll}px, 0)`;
        })
    }

    var counter = 0;
    video.addEventListener('click', function(){
        if( !counter ) {
            var playBtn = document.querySelectorAll('.play-button')[0];
            var videoPlayer = video.querySelectorAll('video')[0];

            playBtn.style.display = 'none';
            videoPlayer.play();
            
            setTimeout(function(){
                videoPlayer.setAttribute('controls', true);
            }, 1);
            counter++;
        }
    })

    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
    
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
    })

    var burgerIcon = document.getElementById('burger-icon');
    var body = document.querySelectorAll('body')[0];

    burgerIcon.addEventListener('click', function() {
        body.classList.toggle('menu-opened');
    })
    
    sal();
}