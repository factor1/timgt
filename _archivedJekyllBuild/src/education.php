---
---
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="canonical" href="http://www.timgt.com/education.php">

        <title>Education</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include 'inc/com_css.php' ?>

        <script src="/~timgt/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <?php include 'inc/header.php' ?>

        <section class="primary_copy">
            <h2>Education</h2>

            <div class="container-fluid">
                <div class="row-fluid">
                    <p class="lead" style="font-size:20px">Stay well-informed with clear, concise, timely articles on a wide range of topics, from investments and the markets to health savings accounts and long term care.</p>
                </div>
            </div>
        </section>

        <section class="primary_copy education">
          <div class="container-fluid">

            {% for post in site.posts %}
              <div class="education-article education-article--summary">
                <a class="education-article__wrapper" href="{{ post.permalink }}">
                  <h3 class="education-article__heading education-article--summary__heading">{{ post.heading }}</h3>
                  <p  class="education-article__summary">{{ post.summary }}</p>
                  <a  class="education-article__read-more button" href="{{ post.permalink }}">More</a>
                </a>
              </div>
            {% endfor %}

          </div>
        </section>

        <?php include 'inc/request_info_form.php' ?>

        <?php include 'inc/footer.php' ?>

        <?php include 'inc/com_js.php' ?>
    </body>
</html>
