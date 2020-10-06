const svgToPdfExample = svg => {
    const doc = new window.PDFDocument();
    const chunks = [];
    const stream = doc.pipe({
        // writable stream implementation
        write: chunk => chunks.push(chunk),
        end: () => {
            const pdfBlob = new Blob(chunks, {
                type: "application/pdf"
            });
            var blobUrl = URL.createObjectURL(pdfBlob);
            //window.open(`${blobUrl}?customfilename.pdf`);

            /* custom file name download */
            const a = document.createElement("a");
            document.body.appendChild(a);
            a.text = "Ich im Team - Beruflich!";
            a.style = "display: none";
            a.href = blobUrl;
            a.download = "IchimTeam_Beruf.pdf"; // <---- 👈 file name
            a.click();
            window.URL.revokeObjectURL(url);
        },
        // readable streaaam stub iplementation
        on: (event, action) => {},
        once: (...args) => {},
        emit: (...args) => {}
    });

    window.SVGtoPDF(doc, svg, 0, 0);

    doc.end();
};

window.onload = function() {
    document.getElementById("download").addEventListener("click", function() {
        const svgElement = document.getElementById("graph");
        svgToPdfExample(svgElement.innerHTML);
    });
};
