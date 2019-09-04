
<div class="w3-row w3-padding" style="">
        <div id="pdf1"></div>
        <script type="text/javascript" src="jsPdf/pdfobject.js"></script>
        <script type='text/javascript'>
            
            var options = {
                height: "100px",
                width:"700px",
                pdfOpenParams: { view: 'FitV', 
                scrollbars: '0', 
                zoom:150,
                toolbar: '0', 
                statusbar: '0', 
                fallbackLink:false,
                navpanes: '0' }
                };
                PDFObject.embed("sample.pdf", "#pdf1",options);
        </script>
</div>