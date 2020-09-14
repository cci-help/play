function loadServer() {
    // $('#minecraft').hide().fadeOut("slow");
    // $('#loadingzone').load('loading.html');
    // $('#loadingzone').load('makequery.php');

    $('#loadingzone').hide().load("loading.html").fadeIn('slow');
    $('#loadingzone').load('makequery.php');
    
}

function loadMap(){
    $('#loadingzone').hide().load("loading.html").fadeIn('slow');
    $('#loadingzone').load('loadmap.php');
}