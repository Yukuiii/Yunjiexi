
<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Yukui云解析</title>
    <style>
        body,
        html,
        #aigenjiexi {
            background-color: #030303;
            padding: 0;
            margin: 0;
            color: transparent;
            height: 100%;
            width: 100%;
        }

        iframe {
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
        }

        .loading {
            background: url(https://vip.2ktvb.com/player/loading.gif) no-repeat center;
            background-repeat: no-repeat;
            background-size: 300px !important;
        }
    </style>
</head>
<script src="https://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>

<body style="overflow-y:hidden;">

    <iframe id="aigenjiexi" class="loading" name="aigenjiexi" src="https://vip.2ktvb.com/playercenter/?url=<?php echo $_POST['adress']?>" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" width="100%" height="100%"></iframe>


</body>