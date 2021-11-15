<x-inspire-layout>
    <section class="slider-area slider-area2">  
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Edicion</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.index')}}">Publicaciones</a></li> 
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.show', $publicacion)}}">{{ $publicacion->titulo }}</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.edit', $publicacion)}}">Editar</a></li> 
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

    @auth
        @if (Auth::user()->email==$publicacion->user->email)
            <div class="services-area services-area2 section-padding40">
                <div class="container">
                    <!-- Put your content here -->
                    <h1 class="mb-20">Actualice la informacion</h1>
        
                    <article class="blog_item">
                        <div class="blog_details">
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{route('publicacion.update', $publicacion)}}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div>
                                    <h2 class="blog-head">Titulo de la publicacion</h2>
                                    <input type="text" name="titulo" placeholder="Titulo" value="{{$publicacion->titulo}}" required class="single-input">
                                </div>
                                
                                <div class="mt-30">
                                    <h3 class="blog-head">Sube tu arte</h3>
                                    <input type="file" name="archivo" required class="single-input">
                                </div>
        
                                <div class="mt-30">
                                    <h3 class="blog-head">Danos una pequeña descripcion</h3>
                                    <input type="text" name="descripcion" placeholder="Descripcion" value="{{$publicacion->descripcion}}" required class="single-input">
                                </div>
        
                                <div class="mt-30">
                                    <h3 class="blog-head">Cuentanos sobre el</h3>
                                    <textarea name="explicacion" placeholder="Explicacion" cols="50" rows="20" required class="single-textarea">{{$publicacion->explicacion}}</textarea>
                                </div>
                                
                                <div class="mt-30">
                                    <div class="default-select" id="default-select">
                                        <select name="pais">
                                            <option value="{{$publicacion->pais}}" selected disabled hidden>{{$publicacion->pais}}</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Estados Unidos">Estados Unidos</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Brasil">Brasil</option>
                                            <option value="España">España</option>
                                            <option value="Reino Unido">Reino Unido</option>
                                            <option value="Francia">Francia</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="mt-30"> 
                                    <input type="submit" class="genric-btn primary-border circle">
                                </div>
                            </form>
                        </div>
                    </article>
                </div>   
            </div>
        
        @else
            <div class="services-area services-area2 section-padding40">
                <div class="container">
                    <h1 class="mb-20">Parece que usted no es el dueño de esta publicacion</h1>
                </div>   
            </div>
        
        @endif

    @endauth

    
</x-inspire-layout>