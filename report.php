
<div class="w3-row w3-center w3-margin">  
        <span class="w3-row w3-margin w3-xlarge">Report Here</span>
        <span class="w3-button w3-light-gray w3-round">
                <div id="pdf1"></div>
                <script type="text/javascript" src="include/Pdf/jsPdf/pdfobject.js"></script>
                <script type='text/javascript'>
                
                var options = {
                        height: "400px",
                        width:"700px",
                        pdfOpenParams: { view: 'FitC', 
                        scrollbars: '0', 
                        zoom:100,
                        toolbar: '0', 
                        statusbar: '0', 
                        fallbackLink:false,
                        navpanes: '0' }
                        };
                        PDFObject.embed("sample.pdf", "#pdf1",options);
                </script>
        </span>
</div>

