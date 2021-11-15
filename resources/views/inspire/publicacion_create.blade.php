<x-inspire-layout>
    <section class="slider-area slider-area2">  
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Crea tu post</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.index')}}">Publicaciones</a></li> 
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.create')}}">Crear</a></li> 
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
            <!-- Put your content here -->
            <h1 class="mb-20">Llene los siguientes campos</h1>

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

                    <form action="{{route('publicacion.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h2 class="blog-head">Titulo de la publicacion</h2>
                            <input type="text" name="titulo" placeholder="Titulo"  required class="single-input">
                        </div>
                        
                        <div class="mt-30">
                            <h3 class="blog-head">Sube tu arte</h3>
                            <input type="file" name="archivo" required class="single-input">
                        </div>

                        <div class="mt-30">
                            <h3 class="blog-head">Danos una pequeña descripcion</h3>
                            <input type="text" name="descripcion" placeholder="Descripcion"  required class="single-input">
                        </div>

                        <div class="mt-30">
                            <h3 class="blog-head">Cuentanos sobre el</h3>
                            <textarea name="explicacion" placeholder="Explicacion" cols="50" rows="20" required class="single-textarea"></textarea>
                        </div>
                        
                        <div class="mt-30">
                            <div class="default-select" id="default-select">
                                <h3 class="blog-head">¿Donde estas?</h3>
                                <select style="display: none;" name="pais">
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
                            <div class="default-select" id="default-select">
                                <h3 class="blog-head">Categorias</h3>
                                <select style="display: none;" multiple name="categoria_id[]" >
                                    @foreach ($categorias as $categoria)
                                        <option selected value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                    @endforeach
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
</x-inspire-layout>