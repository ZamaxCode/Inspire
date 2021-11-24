<x-inspire-layout>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Servicios</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('informacion.index')}}">Inicio</a></li>
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
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
               <h2 class="contact-title">¡ENCUENTRANOS EN NUESTRAS NUEVAS SUCURSALES!</h2>
            </div>
            <div class="properties pb-20">
                <div class="properties__card">
                    <div class="properties__img overlay1">
                        <a href="#"><img src="{{asset('layout/img/gallery/mascota.png')}}" alt=""></a>
                    </div>
                    <div class="properties__caption">
                        <p>SUCURSAL MASCOTA JALISCO</p>
                        <h3>Ubicada en el Museo el Pedregal<a href="#"></a></h3>
                        <p>Dirección: Morelos 64, Centro, 46900 Mascota, Jal.
                        </p>
                        <div class="properties__footer d-flex justify-content-between align-items-center">
                            <div class="restaurant-name">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p><span>(4.5)</span>Calificación del lugar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="properties pb-20">
                <div class="properties__card">
                    <div class="properties__img overlay1">
                        <a href="#"><img src="{{asset('layout/img/gallery/vallarta.png')}}" alt=""></a>
                    </div>
                    <div class="properties__caption">
                        <p>SUCURSAL PUERTO VALLARTA</p>
                        <h3>ART Vallarta<a href="#"></a></h3>
                        <p>Dirección: Pilitas 213, Zona Romántica, Amapas, 48333 Puerto Vallarta, Jal.
                        </p>
                        <div class="properties__footer d-flex justify-content-between align-items-center">
                            <div class="restaurant-name">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <p><span>(4.3)</span>Calificación del lugar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="properties pb-20">
                <div class="properties__card">
                    <div class="properties__img overlay1">
                        <a href="#"><img src="{{asset('layout/img/gallery/guadalajara.png')}}" alt=""></a>
                    </div>
                    <div class="properties__caption">
                        <p>SUCURSAL GUADALAJARA JALISCO</p>
                        <h3>Artx Fotografía<a href="#"></a></h3>
                        <p>Dirección: Francisco I. Madero 1284, Agua Blanca Industrial, 45235 Zapopan, Jal.
                        </p>
                        <div class="properties__footer d-flex justify-content-between align-items-center">
                            <div class="restaurant-name">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p><span>(5.0)</span>Calificación del lugar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-">
                    <h2 class="contact-title">¡TE MOSTRAMOS NUESTROS PROXIMOS SERVICIOS QUE SERÁN IMPLEMENTADOS!</h2>
                </div>
                <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Servicios A Tu Disposición</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                    <div class="logo">
                            <a href="{{route('informacion.index')}}"><img src="{{asset('layout/img/logo/logo4.png')}}" alt=""></a>
                    </div>
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">DISEÑOS DE PINTURAS</h3>
                        <p class="text-muted mb-0">Se ofrecerán servicios de obras personalizadas, el costo puede variar dependiendo el tamaño, la técnica y tiempo disponible para la entrega estimada.</p>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <div class="logo">
                            <a href="{{route('informacion.index')}}"><img src="{{asset('layout/img/logo/logo4.png')}}" alt=""></a>
                        </div>
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">CLASES DE PINTURAS</h3>
                            <p class="text-muted mb-0">Nivel básico: <br> Lunes y Miercoles <br> 11:00-13:00 hrs. <br> Nivel Intermedio: <br> Martes y Jueves  <br> 16:00 - 18:00 hrs. <br> Nivel Avanzado: <br>Lunes a Viernes<br>16:00-19:00 hrs. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <div class="logo">
                            <a href="{{route('informacion.index')}}"><img src="{{asset('layout/img/logo/logo4.png')}}" alt=""></a>
                        </div>
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">HORARIO DE LA GALERÍA</h3>
                            <p class="text-muted mb-0">Lunes a Viernes: <br> 10:00 - 14:00 hrs. <br> 16:00 - 19:00 hrs. <br> Sábado: <br> 10:00 - 14:00 hrs. <br> Domingo: <br> Se Mantiene Cerrado</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                        <div class="logo">
                            <a href="{{route('informacion.index')}}"><img src="{{asset('layout/img/logo/logo4.png')}}" alt=""></a>
                        </div>
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">VENTA DE MATERIALES</h3>
                            <p class="text-muted mb-0">Caballetes <br> Acrílico <br> Óleo <br> Pínceles <br> Lienzos <br> Cuadernos de Dibujo <br> Otros <br> Preferentemente, favor de realizar las compras en físico.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</x-inspire-layout>