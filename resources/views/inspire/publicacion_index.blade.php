<x-inspire-layout>
    <section class="slider-area slider-area2">  
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Publicaciones</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('publicacion.index')}}">Publicaciones</a></li> 
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

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @if (session('msg'))
                        <div class="alert alert-success" role="success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{route('publicacion.create')}}">
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Publica algo!</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="{{ route('publicacion.index') }}" class="d-flex">
                                        <p>Todas</p>
                                    </a>
                                </li>
                                @foreach ($categorias as $catregoria)
                                    <li>
                                        <a href="{{ route('publicacion.index_categorias', $catregoria) }}" class="d-flex">
                                            <p>{{ $catregoria->categoria }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h1 style="font-size:50px">Mira que hay de nuevo</h1>
                    <div class="mt-20">
                        @for ($i = sizeof($publicaciones)-1; $i >= 0; $i--)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('layout/img/publicaciones/' . $publicaciones[$i]->imagen) }}" alt="">
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('publicacion.show', $publicaciones[$i]) }}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{ $publicaciones[$i]->titulo }}</h2>
                                    </a>
                                    <p>{{ $publicaciones[$i]->descripcion }}</p>
                                    <ul class="blog-info-link">
                                        <li><i class="fa fa-user"></i>{{ $publicaciones[$i]->user->name }}</li>
                                        <li>{{ $publicaciones[$i]->pais }}</li>
                                        <li>{{ $publicaciones[$i]->created_at }}</li>
                                    </ul>
                                    <br>
                                    <ul class="blog-info-link">
                                        @foreach ($publicaciones[$i]->categorias as $categoria)
                                            <li>{{ $categoria->categoria }}</li> 
                                        @endforeach
                                    </ul>
                                </div>
                            </article>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-inspire-layout>