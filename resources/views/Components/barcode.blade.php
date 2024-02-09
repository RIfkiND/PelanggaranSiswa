<!-- resources/views/barcode/scan.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Scanner</title>
</head>
<body>
    <h1>Scan Barcode</h1>
    <video id="barcode-scanner" width="100%" height="auto"></video>

    <script src="{{ asset('js/quagga.min.js') }}"></script>
    <script>
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function(stream) {
                var video = document.getElementById('barcode-scanner');
                video.srcObject = stream;
                video.play();

                Quagga.init({
                    inputStream: {
                        name: "Live",
                        type: "LiveStream",
                        target: video,
                    },
                    decoder: {
                        readers: ["code_128_reader"],
                    },
                });

                Quagga.onDetected((result) => {
                    const barcode = result.codeResult.code;
                    window.location.href = `/process-barcode?barcode=${barcode}`;
                });

                Quagga.start();
            })
            .catch(function(err) {
                console.error('Error accessing the camera:', err);
            });
    </script>
</body>
</html>
