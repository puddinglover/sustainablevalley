<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gulp beast</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/styles.css">
</head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0-rc.2/angular.js" rel="script">
<link href="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.min.js" rel="script">
<link href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.1/angular-material.min.js" rel="script">
<link href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.1/angular-material.min.css" rel="stylesheet">

<body>

    <!-- Add content here -->
    


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>

    <script src="scripts/app.js"></script>
</body>

<script src="/app/app.config.js"></script>
<script src="/app/app.states.js"></script>
<script src="/app/components/home/home.directives.js"></script>
<script src="/app/components/home/home.controller.js"></script>
<script src="/app/components/home/services/home.services.js"></script>
<script src="/app/components/about/about.controller.js"></script>
<script src="/app/components/about/about.services.js"></script>
</html>
