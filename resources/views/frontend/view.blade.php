<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo asset(
        "frontend/view.css"
    ); ?>" type="text/css">
</head>
<body>
    @include('frontend.navbar')
    @include('frontend.home')
    @include('frontend.about')
    @include('frontend.contact')
</body>
</html>