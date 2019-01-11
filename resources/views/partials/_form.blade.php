<section class="container-sm mg-top-92" id="contact-me">
  <div class="form-h1">
    Sign up for a Private Yoga Class
  </div>
  <div class="form-h2">
    Leave your information below and i will contact you back
    <br>
    or simply call (777) 777-7777
  </div>
  <div class="container-esm">
    <div class="contact-form">
      <form method="POST" action="{{ url('contact-us') }}">
        {{csrf_field()}}
        <div>
          <input type="text" placeholder="First and Last name" name="name" required>
        </div>
        <div>
          <input type="email" placeholder="test@test.com" name="email" required>
        </div>
        <div>
          <input type="number" placeholder="(888) 888-8888" name="phone" required>
        </div>
        <button class="contact-form-btn" type="submit">Sign Up</button>
      </form>
    </div>
  </div>
</section>
