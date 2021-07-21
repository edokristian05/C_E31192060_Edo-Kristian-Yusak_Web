<div class="container">

<!-- Banner -->
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 20.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="{{ url('assets/slider/slider1.png') }}" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="{{ url('assets/slider/slider2.png') }}" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="{{ url('assets/slider/slider3.png') }}" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{ url('assets/slider/slider1.png') }}" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
    <img src="{{ url('assets/slider/slider1.png') }}" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
    <img src="{{ url('assets/slider/slider1.png') }}" class="d-block w-100" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
    

    <!-- Pilih Kategori -->
<section class="pilih-kategori mt-4">
<h3><strong>Pilih Kategori</strong></h3>
<h4>Pada toko ini mempunyai banyak kategori alat tulis kantor</h4>
<h4>apa yang ingin anda cari dapat ditemukan di toko kami, HAPPY SHOPPING!!!</h4>
    <div class="row mt-4">
        @foreach($kategoris as $kategori)
        <div class="col">
            <a href="{{ route('produks.kategori', $kategori->id) }}">
            <div class="card shadow">
                <div class="card-body text-center">
                <img src="{{ url('assets/kategori') }}/{{ $kategori->gambar }}" class="img-fluid">
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</section>    

<!-- Pilih Produk -->
    <section class="produks mt-5 mb-5">
    <h3><strong>Pilih Produk</strong>
    <a href ="{{ route('produks') }} " class="btn btn-dark float-right"><i class="fas fa-eye"></i>Lihat Semua</a>
</h3>
        <div class="row mt-4">
            @foreach($produks as $produk)
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                    <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $produk->nama }}</strong></h5>
                                <h5>Rp. {{ number_format($produk->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                            <a href="{{ route('produks.detail', $produk->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i>Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>    
</div>
