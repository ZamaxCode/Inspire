<x-inspire-layout>
    <section class="slider-area slider-area2">  
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Edicion de comentario</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.index')}}">Publicaciones</a></li> 
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.show', $comentario->publicacion)}}">{{ $comentario->publicacion->titulo }}</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('comentario.edit', $comentario)}}">Editar</a></li> 
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
    @can('update', Publicacion::class)
        <div class="services-area services-area2 section-padding40">
            <div class="container">
                <!-- Put your content here -->
                <h1 class="mb-20">Actualice la informacion</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form-contact comment_form" action="{{route('comentario.update', $comentario)}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="titulo" type="text" required placeholder="Titulo" value="{{ $comentario->titulo }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comentario" cols="30" rows="9" required placeholder="Deja tu comentario">{{ $comentario->comentario }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Actualiza informacion</button>
                    </div>
                </form>                    
            </div>   
        </div>
    @elsecan('update', Publicacion::class)
        <div class="services-area services-area2 section-padding40">
                <div class="container">
                    <h1 class="mb-20">Parece que usted no es el dueño de este comentario</h1>
                </div>   
            </div>
    @endcan 
</x-inspire-layout>