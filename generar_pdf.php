<?php
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;
    use Dompdf\Options;
    use Barryvdh\DomPDF\Facade\Pdf;

    $options = new Options();
    $options->set('defaultFont', 'Courier');
    $options->set('isHtml5ParserEnabled', true);
    $dompdf = new Dompdf($options);

    $html = '
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Documento PDF</title>
            <style>
                body { font-family: sans-serif; }
                h1 { color: #333; }
            </style>
        </head>
        <body>
            <h1>Hola, mundo!</h1>
            <p>Este es un documento PDF</p>
        </body>
    </html>
    ';

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $dompdf->stream("documento.pdf", ["Attachment" => false]);
?>
