function displayDate(){

    setInterval(displayDate,500);

   var time  = new Date();
   var hrs = time.getHours();
   var min = time.getMinutes();
   var sec = time.getSeconds();

   if(hrs>12){
       hrs= hrs -12;

   }
   if(hrs==0){
       hrs = 12;
    }

    if(hrs<10){
        hrs = '0'+hrs;
    }
    if(min<10){
        min = '0'+min;
    }
    if(sec<10){
        sec = '0'+sec;
    }
    
    document.getElementById('displayDate').innerHTML = hrs+':'+min+':'+sec;

}

Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
   });
   Webcam.attach( '#my_camera' );


   Webcam.snap( function(data_uri) {
    // display results in page
    document.getElementById('results').innerHTML = 
    '<img src="'+data_uri+'"/>';
  } );