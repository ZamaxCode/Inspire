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
            <div class="row">
                <div class="col-lg-8 posts-list">

                    @if (session('msg'))
                        <div class="alert alert-success" role="success">
                        {{ session('msg') }}
                        </div>
                    @endif

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
                            @can('update', $publicacion)
                                <div class="mt-20">
                                    <form action="{{route('publicacion.edit', $publicacion)}}">
                                        @csrf
                                        <input type="submit" value="Editar" class="genric-btn success circle">
                                    </form>
                                </div>
                                <div class="mt-20">
                                    <form action="{{route('publicacion.destroy', $publicacion)}}" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar la publicacion?')">
                                        @method('DELETE')    
                                        @csrf
                                        <input type="submit" value="Eliminar" class="genric-btn danger circle">
                                    </form>
                                </div> 
                            @endcan
                        </div>
                    </div>
    
                    <div class="comments-area">
                        <h4>Comentarios</h4>
                        @foreach ($comentarios as $comentario)
                            @if ($comentario->publicacion->id == $publicacion->id)
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="assets/img/blog/comment_1.png" alt="">
                                            </div>
                                            <div class="desc">
                                                <h2>{{ $comentario->titulo }}</h2>
                                                <p class="comment">
                                                {{ $comentario->comentario }}
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <p>{{ $comentario->user->name }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @can('update', $comentario)
                                        <div class="mt-20">
                                            <form action="{{route('comentario.edit', $comentario)}}">
                                                @csrf
                                                <input type="submit" value="Editar" class="genric-btn success circle">
                                            </form>
                                        </div>
                                        <div class="mt-20">
                                            <form action="{{route('comentario.destroy', $comentario)}}" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar el comentario?')">
                                                @method('DELETE')    
                                                @csrf
                                                <input type="submit" value="Eliminar" class="genric-btn danger circle">
                                            </form>
                                        </div> 
                                    @endcan
                                </div>
                            @endif
                        @endforeach
                     </div>


                    <div class="comment-form">
                        <h4>Deja un comentario</h4>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-contact comment_form" action="{{route('comentario.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="publicacion_id" value="{{ $publicacion->id }}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="titulo" type="text" required placeholder="Titulo">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comentario" cols="30" rows="9" required placeholder="Deja tu comentario"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Publica tu comentario</button>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
        </div> 
    </div>
</x-inspire-layout>