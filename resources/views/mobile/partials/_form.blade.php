<section class="container mg-top-60">
    <div class="contact-form">
      <form method="POST" action="/subscription">
        {{csrf_field()}}
        <div>
          <label class="form-label">Full Name</label>
          <input type="text" placeholder="First and Last name" name="name" required>
        </div>
        <div>
          <label class="form-label">Contact Email</label>
          <input type="email" placeholder="test@test.com" name="email" required>
        </div>
        <div>
          <label class="form-label">Contact Phone Number</label>
          <input type="number" placeholder="(888) 888-8888" name="phone" required>
        </div>
        <button class="contact-form-btn" type="submit">contact me</button>
      </form>
    </div>
</section>
