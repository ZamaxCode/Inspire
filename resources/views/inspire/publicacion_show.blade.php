<x-inspire-layout>
    <section class="slider-area slider-area2">  
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">{{ $publicacion->titulo }}</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.index')}}">Publicaciones</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.show', $publicacion)}}">{{ $publicacion->titulo }}</a></li> 
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
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{asset('layout/img/blog/single_blog_1.png')}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{ $publicacion->descripcion }}</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><i class="fa fa-user"></i>{{ $publicacion->user->name }}</li>
                            <li>{{ $publicacion->pais }}</li>
                            <li>{{ $publicacion->created_at }}</li>
                        </ul>
                        <p class="excert">
                            {{ $publicacion->explicacion }}
                        </p>
                        @auth
                            @if (Auth::user()->email==$publicacion->user->email)
                            <div class="mt-20">
                                <form action="{{route('publicacion.edit', $publicacion)}}">
                                    @csrf
                                    <input type="submit" value="Editar" class="genric-btn success circle">
                                </form>
                            </div>
                            <div class="mt-20">
                                <form action="{{route('publicacion.destroy', $publicacion)}}" method="POST">
                                    @method('DELETE')    
                                    @csrf
                                    <input type="submit" value="Eliminar" class="genric-btn danger circle">
                                </form>
                            </div> 
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div> 
    </div>
</x-inspire-layout>