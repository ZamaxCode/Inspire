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
                                        <li class="breadcrumb-item"><a href="#">Crear</a></li> 
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
            <h1 class="mb-20">LLENE LOS SIGUIENTES CAMPOS</h1>

            <article class="blog_item">
                <div class="blog_details">

                    <form action="#">
                        <div>
                            <h2 class="blog-head">Titulo de la publicacion</h2>
                            <input type="text" name="titulo_post" placeholder="Titulo"  required class="single-input">
                        </div>
                        
                        <div class="mt-10">
                            <h3 class="blog-head">Sube tu arte</h3>
                            <input type="file" name="imagen" required class="single-input">
                        </div>

                        <div class="mt-50">
                            <h3 class="blog-head">Cuentanos sobre el</h3>
                            <textarea name="comentario" placeholder="Comentario" cols="30" rows="10" required class="single-textarea"></textarea>
                        </div>

                        <div class="mt-50">
                            <h3 class="blog-head">Categorias</h3>
                            <ul>
                                <li>
                                    <label for="cat1">cat1</label>
                                    <input type="checkbox">
                                </li>
                                <li>
                                    <label for="cat2">cat2</label>
                                    <input type="checkbox">
                                </li>
                                <li>
                                    <label for="cat3">cat3</label>
                                    <input type="checkbox">
                                </li>
                            </ul>
                        </div>

                        <div class="mt-20"> 
                            <input type="submit" class="genric-btn primary-border circle">
                        </div>
                    </form>
                </div>
            </article>
        </div>   
    </div>
</x-inspire-layout>