
@include('layout.header')

<section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Traiteur</h2>
          <p>Inscription <span>Traiteur</span></p>
        </div>
        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="/traiteur/create" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <label for="">Nom</label>
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <label for="">Prenom</label>
                  <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <label for="">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <label for="">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
              </div>
              
              <div class="text-center"><button type="submit">S'inscrire</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section>
    @include('layout.footer')