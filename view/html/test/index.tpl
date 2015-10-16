<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="./public/js/lib/vendor/react-0.14.0/react.min.js"></script>
    <script src="./public/js/lib/vendor/react-0.14.0/react-dom.min.js"></script>
</head>
<body>
<h1>test</h1>

<div id="helo"></div>

<script src="./public/pagurian.js">

</script>
<script type="text/javascript">
    pagurian.call("modules/reactjs/app", function (app) {
        app.page.reactjs();
    });
</script>
</body>
</html>
