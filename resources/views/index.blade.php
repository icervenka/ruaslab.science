<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ruaslab webpage</title>

  <meta name="author" content="Igor Cervenka">

  <link href="{{ URL::asset('css/bootstrap.min.css') }}" , rel="stylesheet">
  <link href="{{ URL::asset('css/app.css') }}" , rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" />
  <link rel="icon" type="image/png" href="{{ URL::asset('favicon.ico') }}" sizes="32x32"/>
</head>

<style media="screen">
  header {
    opacity: 0.25;
  }
</style>

<body class="px-0">
  @include('partials.navbar')


  <main>

    <div class="container-fluid bg-white">
      <div class="row">
        <div class="hero-image vh-100">
          <div class="hero-text text-left">
            <h2 class="pb-2">Have you ever wondered how exercise keeps you healthy?</h2>
            <a href={{ url('projects') }}>
              <button type="button" class="btn btn-lg rounded-pill btn-light mr-2 mb-2">
                Explore Our Work
              </button>
            </a>
            <a href={{ url('funding') }}>
              <button type="button" class="btn btn-lg rounded-pill btn-light mr-2 mb-2">
                Support Us
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <hr class="hr-divider">

    <section class="container-fluid index">
      <div class="container px-0">

        <button class="btn" onclick="topFunction()" id="scrollTop" title="Go to top">
          <i class="fas fa-arrow-up"></i>
        </button>

        <div class="row no-gutters">
          <div class="col-12 text-center">
            <h1>WHO WE ARE</h1>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-12 col-md-6 order-0 order-md-0">
            <div class="cover h-100" style="background-image:url({{ URL::asset('images/index_whoweare_3.jpg') }});"></div>
          </div>
          <div class="col-12 col-md-6 order-1 order-md-1">
            <div class="p-md-5 p-0 pt-1">
              <p class="text-justify">Sedentary lifestyles come at a high cost to our health
                and have been linked to the incidence of diseases such as diabetes,
                obesity, cardiovascular disease, neuro-degenerative diseases
                (Alzheimer’s and Parkinson’s), mood disorders (e.g. depression),
                and even cancer.</p>
            </div>
          </div>

          <div class="col-12 col-md-6 order-3 order-md-2">
            <div class="p-md-5 p-0 pt-1">
              <p class="text-justify">Physical activity and muscle condition play a clear
                and important role in the prevention and treatment of these diseases.
                However, exercise programs are not always viable treatment options
                due to inherent disease characteristics such as muscle weakness,
                difficulty in movement, or, in particular, patient compliance.
                By understanding the mechanisms through which our bodies adapt to
                exercise, we can learn valuable lessons that can be translated
                into future disease therapies.</p>
            </div>
          </div>

          <div class="col-12 col-md-6 order-2 order-md-3">
            <div class="cover h-100" style="background-image:url({{ URL::asset('images/index_whoweare_2.jpg') }});"></div>
          </div>

          <div class="col-12 col-md-6 order-4 order-md-4">
            <div class="cover h-100" style="background-image:url({{ URL::asset('images/index_whoweare_4.jpg') }});"></div>
          </div>
          <div class="col-12 col-md-6 order-5 order-md-5">
            <div class="p-md-5 p-0 pt-1">
              <p class="text-justify">Physical activity and muscle condition play a clear
                and important role in the prevention and treatment of these diseases.
                However, exercise programs are not always viable treatment options
                due to inherent disease characteristics such as muscle weakness,
                difficulty in movement, or, in particular, patient compliance.
                By understanding the mechanisms through which our bodies adapt to
                exercise, we can learn valuable lessons that can be translated
                into future disease therapies.</p>
            </div>
          </div>
        </div>
        <div class="text-right">
          <a href={{ url('team') }}>
            <button type="button" class="btn btn-lg rounded-pill btn-more btn-more-index">
              <span>View Our Team </span>
            </button>
          </a>
        </div>
      </div>
    </section>

    <hr class="hr-divider">

    <section class="container-fluid index">
      <div class="container px-0">

        <div class="row no-gutters">
          <div class="col-12">
            <h1 class="text-center">METABOLIC NETWORK</h1>
            <p class="text-justify">Physical activity and muscle condition play a clear
              and important role in the prevention and treatment of these diseases.
              However, exercise programs are not always viable treatment options
              due to inherent disease characteristics such as muscle weakness,
              difficulty in movement, or, in particular, patient compliance.
              By understanding the mechanisms through which our bodies adapt to
              exercise, we can learn valuable lessons that can be translated
              into future disease therapies.</p>
          </div>
        </div>

        <div class="hide-in-small">
          <div class="row no-gutters">

            <div class="col-12 col-lg-3 col-md-3">
              @each('partials.network_card_profile', $metabolic_network, 'item')
            </div>

            <div class="col-12 col-lg-6 col-md-6 text-center">
              @include('network_svg')
            </div>

            <div class="col-12 col-lg-3 col-md-3">
              @each('partials.network_card_text', $metabolic_network, 'item')
            </div>

          </div>
        </div>

        <div class="hide-in-large pb-3">
          <div id="carousel-mt" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              @each('partials.network_card_carousel', $metabolic_network, 'item')
            </div>
            <a class="carousel-control-prev" href="#carousel-mt" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-mt" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>

      </div>
    </section>

    <hr class="hr-divider">

    <div class="container-fluid">
      <div class="container px-0">
        <div class="text-right">
          <a href="">
            <button type="button" class="btn btn-lg rounded-pill btn-more btn-more-up" style="opacity: 0">
              <span>Our Metabolic Network </span>
            </button>
          </a>
        </div>
      </div>
    </div>

    <section class="container-fluid">
      <div class="container px-0">
        <div class="row no-gutters">
          <div class="col-12">
            <h1 class="text-center">WHY SUPPORT US</h1>
            <p class="text-justify">Sedentary lifestyles come at a high cost to our health
              and have been linked to the incidence of diseases such as diabetes,
              obesity, cardiovascular disease, neuro-degenerative diseases
              (Alzheimer’s and Parkinson’s), mood disorders (e.g. depression),
              and even cancer.</p>
            <p class="text-justify">Physical activity and muscle condition play a clear
              and important role in the prevention and treatment of these diseases.
              However, exercise programs are not always viable treatment options
              due to inherent disease characteristics such as muscle weakness,
              difficulty in movement, or, in particular, patient compliance.
              By understanding the mechanisms through which our bodies adapt to
              exercise, we can learn valuable lessons that can be translated
              into future disease therapies.</p>
          </div>
        </div>
        <div class="text-right">
          <a href={{ url('funding') }}>
            <button type="button" class="btn btn-lg rounded-pill btn-more btn-more-index">
              <span>Support Us </span>
            </button>
          </a>
        </div>
      </div>
    </section>

    <hr class="hr-divider">

    <section class="container-fluid index">
      <div class="container px-0">
        <div class="row no-gutters">
          <div class="col-12">
            <h1 class="text-center">OUR MISSION</h1>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12">
            <p class="lead text-center font-weight-bold">To identify the molecules
              that mediate the beneficial effects of physical exercise on human health</p>
          </div>
        </div>
        <div class="row no-gutters">

          @each('partials.mission_card', $mission_cards, 'card')

        </div>
        <div class="text-right">
          <a href={{ url('projects') }}>
            <button type="button" class="btn btn-lg rounded-pill btn-more btn-more-index">
              <span>View Our Projects </span>
            </button>
          </a>
        </div>
      </div>
    </section>

    <hr class="hr-divider">

    <section class="container-fluid index">
      <div class="container px-0">

        <div class="row no-gutters">
          <div class="col-12">
            <h1 class="text-center">OUR STUDIES</h1>
          </div>
          <p class="text-justify">Physical activity and muscle condition play a clear
            and important role in the prevention and treatment of these diseases.
            However, exercise programs are not always viable treatment options
            due to inherent disease characteristics such as muscle weakness,
            difficulty in movement, or, in particular, patient compliance.
            By understanding the mechanisms through which our bodies adapt to
            exercise, we can learn valuable lessons that can be translated
            into future disease therapies.</p>
        </div>

        <div id="carousel-1" class="carousel slide px-0" data-ride="carousel">
          <div class="carousel-inner rounded">
            @each('partials.carousel', $paper_carousel, 'item')
          </div>
          <a class="carousel-control-prev" href="#carousel-1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span></a>
          <a class="carousel-control-next" href="#carousel-1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span></a>
        </div>

        <div class="text-right">
          <a href={{ url('publications') }}>
            <button type="button" class="btn btn-lg rounded-pill btn-more btn-more-index">
              <span>Browse Our Publications </span>
            </button>
          </a>
        </div>

      </div>
    </section>

    <hr class="hr-divider">

  </main>
  @include('partials.footer')
  @include('partials.page_bottom')
</body>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>

</html>
