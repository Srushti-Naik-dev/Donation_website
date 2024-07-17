const generate=async(Name)=>{    //async function and pass user name
    const {PDFDocument,rgb}=PDFLib; //to modify or make changes to pdf or destructure it
    const exbytes=await fetch("./certificate.pdf").then((res)=>{    //to fetch the certicate pdf and then response convert into array bytes
        return res.arrayBuffer();
    });

    const exFont=await fetch("./Poppins-Light.ttf").then((res)=>{  //to fetch the font and then response convert into arraybuffer
        return res.arrayBuffer();
    });

    const pdfDoc=await PDFDocument.load(exbytes);   //load the pdf and as it is async function we use await
    pdfDoc.registerFontkit(fontkit);                //to initialize the fontkit
    const myfont=await pdfDoc.embedFont(exFont);    //to use the font

    const pages=pdfDoc.getPages();  //if there are multiple pages
    const firstpage=pages[0];      //fetch the first page

    firstpage.drawText(Name,{      //make changes as per requirement
        x:290,
        y:195,
        size:50,
        font:myfont,
        color:rgb(.3,0.48,0.10)
    })

    const uri=await pdfDoc.saveAsBase64({dataUri:true}); //covert it into data uri that will give us a url so that we can embed it
    saveAs(uri,"Daan-Donation Certificate.pdf",{autoBom:true});   //the certificate pdf name after downloading
    // document.querySelector("#mypdf").src=uri;
};
const submitBtn=document.getElementById("submit");    //initializing submit btn
const inputVal=document.querySelector("#name");        //input value

submitBtn.addEventListener("click",()=>{             //function to generate the pdf
    const val=inputVal.value;
    generate(val);
});
