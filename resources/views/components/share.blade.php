<div class="social-buttons">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
       target="_blank">
        <img src="/images/facebook.png" alt="facebook share">
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
       target="_blank">
        <img src="/images/twitter.png" alt="twitter share">
    </a>
    <a href="https://plus.google.com/share?url={{ urlencode($url) }}"
       target="_blank">
        <img src="/images/googleplus.png" alt="google share">
    </a>
    <a href="https://www.linkedin.com/shareArticle?url={{ urlencode($url) }}"
       target="_blank">
        <img src="/images/linkedin.png" alt="linkedin share">
    </a>
    <a href="https://pinterest.com/pin/create/button/?{{
        http_build_query([
            'url' => $url,
            'media' => $image,
            'description' => $description
        ])
        }}" target="_blank">
        <img src="/images/pinterest.png" alt="pininterest share">
    </a>

    <a href="http://theblog/rss"><img src="/images/feed-icon-28x28.png" alt="rss feed">
    </a>
</div>

