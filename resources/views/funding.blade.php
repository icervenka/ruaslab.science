@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_funding.jpg') }}
@stop

@section('page_title', 'FUNDING')

@section('page_content')
  <script>
    window.onload = function() {

      var chart = new CanvasJS.Chart("costChartContainer", {
        animationEnabled: true,
        title: {
          text: "Cost Breakdown"
        },
        data: [{
          type: "pie",
          startAngle: 240,
          yValueFormatString: "##0.00\"%\"",
          indexLabel: "{label} {y}",
          dataPoints: [
            {y: 40, label: "Personnel"},
            {y: 50, label: "Laboratory consumables"},
            {y: 10, label: "Infrastructure and logistics"},
          ]
        }]
      });
      chart.render();

    }
  </script>
  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Enable Research</h1>
        <p class="text-justify">90% of our funding is obtained through national and international
          applications for idea-based project grants from diverse funding agencies.
          These funds are used for all aspects of our research efforts. They cover
          the salaries of our team, the premises of our lab, and all the tools and
          consumables necessary to develop our projects. Your support can mean taking
          a project faster to completion, or to start developing a new therapy
          for disease, or to explore a more daring idea that is sometimes to
          finance through the conventional funding agencies.
        </p>

        <div id="costChartContainer" style="height: 400px; width: 100%;"></div>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Take Your Pick</h1>
        <p class="text-justify">You can choose the financial area you would like
          to support, find a particular project amongst our ongoing initiatives,
          or decide to bet on the exploration of new ideas!
        </p>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">How To Support</h1>
        <p class="text-justify">Karolinska Institutet has created a system to
          ensure your donation comes to the right research group. Donations can
          be made in several ways including Swish, Bank transfer, or online payment.</p>
        <p class="text-justify">Whatever you choose, make sure to indicate
          “Jorge Ruas” on your donation so the university knows the funds are
          directed to our lab projects. More detailed information can be found at:</p>
        </p>
      </div>
      <div class="mb-3">
        <a href="https://ki.se/en/fyfa/support-research-within-the-department-of-physiology-and-pharmacology">
          <button type="button" class="btn btn-block rounded-pill btn-more py-3">
            Support Research at the Department of Physiology and Pharmacology <i class="fas fa-external-link-alt"></i>
          </button>
        </a>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Obtained Grants</h1>
      </div>
      <p class="text-justify">This is a list of project grants and funding
        agencies that have supported us since the beginning of the lab.
      </p>
      <div class="row no-gutters pb-2">

        @each('partials.funding_agency', $funding_agencies, 'agency')

      </div>
    </div>

  </section>

  <hr class="hr-divider">
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@stop
