<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>OpenTok Hello World</title>
    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
    <script type="text/javascript">
        var apiKey = '<?php echo $apiKey; ?>';
        var sessionId = '<?php echo $sessionId; ?>';
        var token = '<?php echo $token; ?>';
    </script>
</head>
<body>
    <h2>Hello, World!</h2>

    <div id="publisher"></div>
    <div id="subscribers"></div>

    <script src="/js/helloworld.js"></script>
</body>
</html>
