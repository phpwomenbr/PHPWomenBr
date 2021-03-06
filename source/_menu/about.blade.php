---
extends: _layouts.master
title: "Quem somos"
---
@section('content')
<link rel="stylesheet" href="{{ site.baseurl }}/assets/css/jquery-ui-style.css" />
<script src="{{ site.baseurl }}/assets/js/jquery-ui.js"></script>
<section class="wrapper style1">
  <div class="container">
    <div class="row">
      <h2>Quem somos</h2>
      <p>
        Uma extensão no Brasil do grupo internacional PHPWomen.<br>
        Somos desenvolvedoras, aspirantes e simpatizantes que buscam a disseminação de conhecimento PHP com a criação de um ambiente acolhedor para mulheres e homens.
      </p>
    </div>

    <div class="row">
          <div class="4u">
            <img src="https://avatars2.githubusercontent.com/u/1061875?v=3&s=460" class="image profile" /><br>Thamara Hessel
          </div>
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Ariana Kataoka
          </div>
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Danielle Campos
          </div>
    </div>
    <div class="row">
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Diana Arnos
          </div>
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Eilem Gomes
          </div>
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Gabriela Davila
          </div>
    </div>
    <div class="row">
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Cristina Luz
          </div>
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Jucy
          </div>
          <div class="4u">
            <img src="http://inception-science.com/upload/913249781.jpg" class="image profile" /><br>Beatriz
          </div>
    </div>
  </div>
  
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</section>
@endsection