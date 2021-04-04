@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_contactus.jpg') }}
@stop

@section('page_title', 'CONTACT US')

@section('page_content')
  <section class="container-fluid px-0">
    <div class="container px-0">
      <div class="row no-gutters">
        <div class="px-3 px-md-0">
          <h1 class="pt-3">Address</h1>
          <p class="text-justify">We are located in the Biomedicum building that is
            part of Karolinska Institutet Solna campus. Our visiting address is:
          </p>
          <p><b>Biomedicum</b><br>
          Quarter C5<br>
          Solnavägen 9<br>
          171 65 Solna<br>
          Sweden<br></p>
        </div>
        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508.5034916997776!2d18.026567717556848!3d59.34941466761057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d9c36dbed37%3A0x9b1e1469a7beae2e!2sBiomedicum%2C%20Karolinska%20Institutet!5e0!3m2!1sen!2sse!4v1608125230486!5m2!1sen!2sse"
        frameborder="0" style="border:0;" allowfullscreen=""
        aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid px-0">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3"></h1>
        <img class="img-fluid" src={{ URL::asset('images/biomedicum_inside.jpg') }} alt="">
      </div>
    </div>
  </section>

  <hr class="hr-divider">
@stop
