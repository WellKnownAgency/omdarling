<section class="container-sm mg-top-92">
  <div >
    <div class="email">
      Healthy and Mindful lifestyle can be fun! and i'll show you how!
    </div>
    <div class="input">
      <form method="POST" action="/subscription">
        {{csrf_field()}}
        <input type="text" placeholder="your email" name="email" required>
        <button class="subscribe" type="submit">subscribe</button>
      </form>
    </div>
</div>
</section>
