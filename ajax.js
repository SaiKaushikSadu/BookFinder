let fetch_x=document.getElementById('fetch_btn');
let s;

fetch_x.addEventListener('click' ,fetching);

function fetching(){
    console.log("clicked");
    //instantiate a xhr object
    const xhr= new XMLHttpRequest();
    // opened it 
    xhr.open('GET','ajax.txt',false);

    //what to do on progress
    xhr.onprogress=function(){
        console.log("in progress");
    }
   //what to do on progress
    xhr.onload=function(){
        if(this.status==200){
            console.log(this.response);
            s= JSON.stringify(this.response);
    }else{
        console.log("some error occured");
    }
    }



    //send the request
    xhr.send();

    const usingSplit = s.split(" ");
  
    for(let i=0;i<usingSplit.length-1;i++){
        if(s.localeCompare("KUMbojkar", undefined, { sensitivity: 'accent' })){
            console.log("is present ");
        }
        if (usingSplit[i]==="TECHMAX"){
            console.log("jagjeet is present");
        }
    }
 }
