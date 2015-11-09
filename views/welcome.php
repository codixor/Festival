<!DOCTYPE html>
<!--//
This web page has been developed by Wani.
 - me@wani.kr
 - http://wani.kr
-->
<html>
<head>
    <title>Your Title</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/static/css/index.css" />
    <!--[if lt IE 9]><script src="/static/js/legacy.min.js"></script><![endif]-->

    <script src="/static/js/react.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    </head>
<body>
<div id="example"></div>
<script type="text/babel">
    ReactDOM.render(
    <h1>Hello, <?php echo $who ?>!</h1>,
        document.getElementById('example')
    );
</script>
</body>
</html>
