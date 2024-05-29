<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
    <!-- PDF.js viewer styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf_viewer.css">
    <style>
        /* Center align the PDF viewer */
        #viewerContainer {
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- PDF Viewer Container -->
    <div id="viewerContainer" class="pdfViewer"></div>

    <!-- PDF.js and Dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            // PDF.js viewer options
            const viewerOptions = {
                container: document.getElementById('viewerContainer'),
                textLayerMode: 0, // Do not attempt to render text
            };

            // Initialize PDF.js viewer
            const pdfViewer = pdfjsLib.getDocument('/files/sample.pdf');
            pdfViewer.promise.then(pdf => {
                // Loop through all pages
                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    pdf.getPage(pageNum).then(page => {
                        // Calculate scale based on the width of the viewport and the page's dimensions
                        const viewport = page.getViewport({ scale: 1 });
                        const scale = viewerContainer.clientWidth / viewport.width;
                        const scaledViewport = page.getViewport({ scale: scale });
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.height = scaledViewport.height;
                        canvas.width = scaledViewport.width;
                        const renderContext = {
                            canvasContext: context,
                            viewport: scaledViewport
                        };
                        page.render(renderContext);
                        // Add each page with a class for styling
                        const pageContainer = document.createElement('div');
                        pageContainer.classList.add('pdfPage');
                        pageContainer.appendChild(canvas);
                        document.getElementById('viewerContainer').appendChild(pageContainer);
                    });
                }
            }).catch(error => {
                console.error('Error loading PDF:', error);
            });
        });
    </script>
</body>
</html>
