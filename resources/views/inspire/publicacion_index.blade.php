<x-inspire-layout>
    <section class="slider-area slider-area2">  
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Mira que hay de nuevo</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Publicaciones</a></li> 
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>

    <div class="services-area services-area2 section-padding40">
        <div class="container">
            <h1>Publicaciones</h1>
            <a href="{{ route('publicacion.create') }}" class="genric-btn primary-border circle arrow">
                ¡Publica algo!
                <span class="lnr lnr-arrow-right"></span>
            </a>
        </div>
    </div>
</x-inspire-layout>