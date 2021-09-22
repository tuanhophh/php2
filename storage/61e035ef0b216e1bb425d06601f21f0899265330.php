<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script>
    $(document).ready(function () {
        $('#slider').slick(
        );
        $('#intagram').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });
        const btnMenu = document.getElementById('#btnMenu');
        $('#btnMenu').on('click', (e) => {
            e.preventDefault();
            console.log('1')
            btnShowMenu.classList.toggle('hidden');// toggle la bat,tat
        })
        
        // const btnShowMenu = document.getElementById('#btnShowMenu');
        // btnMenu.addEventListener('click', function (e) {
            
            
            // })
        });
        
    </script><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/layout/layout-client/script.blade.php ENDPATH**/ ?>