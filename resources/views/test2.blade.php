<html>
<head>
    <style>
        .embed-cover {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            opacity: 0.25;
        }

        .wrapper {
            position: relative;
            overflow: hidden;
        }
    </style>
    <style type="text/css" media="print">
        * {
            display: none;
        }
    </style>
    <script type="text/javascript">
        function disableContextMenu() {
            window.frames["pdfframe"].contentDocument.oncontextmenu = function () {
                return true;
            };
            var myFrame = document.getElementById('pdfframe');
            myFrame.window.eval('document.addEventListener("contextmenu", function (e) {e.preventDefault();}, false)');
        }
    </script>
    <title>PDF VIEW</title>
</head>
<body onload="disableContextMenu();" oncontextmenu="return false">
<div class="wrapper">
    <embed id="pdfframe" src="{{url('public/test.pdf')}}#toolbar=0" width="100%" height="10000px">
    <div class="embed-cover"></div>
</div>
<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>
</body>
</html>
