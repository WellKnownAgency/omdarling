<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">


<url>
  <loc>https://omdarling.com/</loc>
  <lastmod>2018-03-23T01:04:07+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://omdarling.com/food</loc>
  <lastmod>2018-03-23T01:04:07+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://omdarling.com/travel</loc>
  <lastmod>2018-03-23T01:04:07+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://omdarling.com/yogi</loc>
  <lastmod>2018-03-23T01:04:07+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://omdarling.com/body-and-soul</loc>
  <lastmod>2018-03-23T01:04:07+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://omdarling.com/mindfulness</loc>
  <lastmod>2018-03-23T01:04:07+00:00</lastmod>
  <priority>0.80</priority>
</url>
 @foreach($posts as $post)
        <url>
            <loc>https://omdarling.com/{{ $post->category->slug }}/{{ $post->slug }}</loc>
            <lastmod>2018-03-24T01:04:07+00:00</lastmod>
            <priority>0.70</priority>
        </url>
@endforeach
</urlset>
