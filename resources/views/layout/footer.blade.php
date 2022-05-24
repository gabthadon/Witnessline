<footer class="sigma_footer footer-2 sigma_footer-dark">

    <!-- Middle Footer -->
    <div class="sigma_footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Contact Us</h5>
            <div class="d-flex align-items-center justify-content-md-start justify-content-center">
              <i class="far fa-phone custom-primary me-3"></i>
              <span>+234-704-974-2536</span>
            </div>
            <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-2">
              <i class="far fa-envelope custom-primary me-3"></i>
              <span>dankhai16@yahoo.com</span>
            </div>
            <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-2">
              <i class="far fa-map-marker custom-primary me-3"></i>
              <span>St John The Apostle Catholic Church Igarra </span>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Menu</h5>
            <ul>
              <li> <a href="/">Home</a> </li>
              <li> <a href="services.html">Services</a> </li>
              <li> <a href="/unday/homily">Sunday Homily</a> </li>
              <li> <a href="/weekday/homily">Weekday Homily</a> </li>
              <li> <a href="/about">About</a> </li>
              <li> <a href="/donate">Support</a> </li>
            </ul>
          </div>
    
          <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 d-none d-lg-block footer-widget widget-recent-posts">
            <h5 class="widget-title">Recent Posts</h5>
            @foreach($data2 as $recent)
            <article class="sigma_recent-post">
              <a href="/post/{{$recent->slug}}/{{$recent->id}}"><img src="/storage/{{$recent->image}}" alt="post"></a>
              <div class="sigma_recent-post-body">
                <a href="/post/{{$recent->slug}}/{{$recent->id}}"> <i class="far fa-calendar"></i> {{$recent->created_at}}</a>
                <h6> <a href="/post/{{$recent->slug}}/{{$recent->id}}">{{$recent->title}}</a> </h6>
              </div>
            </article>
            @endforeach
           
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="sigma_footer-bottom">
      <div class="container-fluid">
        <div class="sigma_footer-copyright">
          <p> Copyright © Witnessline - <a href="#" class="text-white">2022</a> </p>
        </div>
     <p> <a href="">Designed By Gabriel Okhai </a> </p>
        <ul class="sigma_sm square">
          <li>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </footer>