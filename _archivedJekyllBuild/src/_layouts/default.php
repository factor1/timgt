<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="canonical" href="http://www.timgt.com/education.php">

        <title>{{ page.title }}</title>
        <meta name="description" content="{{ page.desc }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include '../inc/com_css.php' ?>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <?php include '../inc/header.php' ?>

        <section class="primary_copy">
          <h2 style="padding:1em 0;margin:0;background:none">Education</h2>
        </section>

        <section class="primary_copy education">
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span8 offset2">

                <div class="education-article__content">
                  <h1 class="education-article__heading">{{ page.heading }}</h1>

                  {{ content }}
                </div>
              </div>
            </div>

            <div class="education-article__related-articles">
              <div class="container-fluid">
                <div class="row-fluid">
                  <div class="span10 offset1">

                    <h4 class="education-article__related-heading">Continue Learning</h4>
                    <ul class="education-article__related-list">
                      {% for post in site.posts %}
                        <li class="education-article__related-list-item">
                          <a class="education-article__related-link {% if post.permalink == page.permalink %} current {% endif %}" href="{{ post.permalink }}" title="">{{ post.heading }}</a>
                        </li>
                      {% endfor %}
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <?php include '../inc/request_info_form.php' ?>

        <?php include '../inc/footer.php' ?>

        <?php include '../inc/com_js.php' ?>
    </body>
</html>
