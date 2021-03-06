@extends('template.master')
@section('contenido')

    <div class="col-xs-12 remove-margin remove-padding overflow-hidden">
        <div class="block-content remove-padding">
            <div class="js-slider slick-nav-white slick-nav-hover" data-slider-arrows="true" data-slider-autoplay="true"
                 data-slider-autoplay-speed="3000">
                <div>
                    <img class="img-responsive" src="{{url('assets/img/prs1.png')}}" alt="presentacion" title="Pure Bulk presentacion">
                </div>
                <div>
                    <img class="img-responsive" src="{{url('assets/img/prs2.jpg')}}" alt="presentacion" title="Pure Bulk presentacion">
                </div>
                <div>
                    <img class="img-responsive" src="{{url('assets/img/prs3.jpg')}}" alt="presentacion" title="Pure Bulk presentacion">
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 padding-30">
        <div class="col-xs-12">
            <div class="col-md-4 col-xs-12">
                <p class="h2 center-b"><b> <span class="fa fa-comment"></span> ¿QUE ES BULK? </b></p>
                <p class="push-15-t text-justify">

                        Los productos “<b>Bulk</b>” o marca blanca, son suplementos tipo industrial de
                        grado
                        farmacéutico USP (United States Pharmacopeia), sus presentaciones son más
                         grandes a las que generalmente se encuentran en el mercado en volúmenes de hasta 45 lb

                </p>
            </div>

            <div class="col-md-4 col-xs-12">
                <p class="h2 center-b"><b><span class="fa fa-leaf"></span> ¿100% PUROS? </b></p>
                <p class="push-15-t text-justify">
                     Los nutracéuticos comercializados bajo el concepto “<b>Bulk</b>” son 100% puros,
                        sin azúcar, soya, levadura, gluten, colorantes, saborizantes, o cualquier
                        otro tipo de aditivo o matriz adicional a la declarada en rótulo del producto,
                        de manera tal que lo que se declara en la etiqueta, es lo único que se obtiene del producto.

                </p>
            </div>

            <div class="col-md-4 col-xs-12">
                <p class="h2 center-b"><b><span class="font-w700 fa fa-dollar"></span> ¿TAN ECONOMICO?  </b></p>
                <p class="push-15-t text-justify">
                     Los suplementos tipo “<b>Bulk</b>” no invierten en diseño, ni marca, ni publicidad,
                        ya que son marca blanca, lo que abarata considerablemente los costos del producto,
                        el cual pueden invertir en calidad del producto.

                </p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 bg-gray-dark padding-20">
        <div class="center-b text-white h1 push-5-t"><b> Todos los productos de </b>
            <h1>
                <strong>Pure Bulk</strong>
            </h1>
        </div>

        <!-- PROTEINA-->

        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 push-30-t">
            <div class="bg-white text-black-op shadow1 block block-rounded block-bordered overflow-hidden">
                <div class="block-header bg-gray-lighter">
                    <h2 class="center-b block-title h3"> 100% WHEY PROTEIN ISOLATE 5 LB</h2>
                </div>
                <div class="block-content padding-20">
                    <div class="col-sm-4">
                        <img src="{{url('assets/img/pure-bulk.png')}}" alt="proteina" title="proteina"
                             class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2">
                    </div>
                    <div class="col-sm-7 push-20-t">
                        <p class="text-justify">De los nutrientes más abundantes y funcionales
                            presente en nuestros músculos. Rica en
                            proteínas de calidad, mejorará significativamente su desempeño físico, logrando resultados
                            más rápidos, duraderos y saludables.

                        </p>
                    </div>
                    <div class="col-sm-7 push-10-t center-b">
                        <div class="col-sm-8">
                            <h4>100% Whey Protein <br> Isolated 5lb</h4>
                            <p class="h4">CO$ 180.000</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{url('/proteina')}}"  class="btn btn-primary text-white"> Ver mas </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CREATINA -->

        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 push-30-t">
            <div class="bg-white text-black-op shadow1 block block-rounded block-bordered overflow-hidden">
                <div class="block-header bg-gray-lighter">
                    <h2 class="h3 center-b block-title">CREATINE MONOHYDRATE 500 GRM</h2>
                </div>
                <div class="block-content padding-20">
                    <div class="col-sm-4">
                        <img src="{{url('assets/img/creatine.png')}}" alt="creatine" title="creatina"
                             class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2">
                    </div>
                    <div class="col-sm-7 push-20-t">
                        <p class="text-justify">Aumenta la producción de ATP, que es la moneda de energía del cuerpo.
                            Los mayores niveles de ATP pueden conducir a mejoras en la potencia, fuerza y resistencia.


                        </p>
                    </div>
                    <div class="col-sm-7 push-10-t center-b">
                        <div class="col-sm-8">
                            <h4>Creatine 500 Grm</h4>
                            <p class="h4">CO$ 100.000</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="{{url('/creatina')}}"  class="btn btn-primary text-white"> Ver mas </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- GLUTAMINA -->

        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 push-30-t">
            <div class="bg-white text-black-op shadow1 block block-rounded block-bordered overflow-hidden">
                <div class="block-header bg-gray-lighter">
                    <h2 class="h3 center-b block-title">GLUTAMINE 500 GRM</h2>
                </div>
                <div class="block-content padding-20">
                    <div class="col-sm-4">
                        <img src="{{url('assets/img/glutamine.png')}}" alt="glutamina" title="glutamina"
                             class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2">
                    </div>
                    <div class="col-sm-7 push-20-t">
                        <p class="text-justify">Reduce el tiempo de recuperación del ejercicio, previene la pérdida
                            muscular, mejora el reabastecimiento de glucógeno y fortalece el sistema inmunitario. La
                            <i>glutamina</i> Refuerza el sistema inmunitario y previene la atrofia muscular
                            producto de la inactividad.


                    </p>
                </div>
                <div class="col-sm-7 push-10-t center-b">
                    <div class="col-sm-8">
                        <h4>Glutamine 500 Grm</h4>
                        <p class="h4">CO$ 90.000</p>
                    </div>
                    <div class="col-sm-3">
                        <form method="post" class="" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul"
                              accept-charset="UTF-8">
                            <a href="{{url('/glutamina')}}"  class="btn btn-primary text-white"> Ver mas  </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection