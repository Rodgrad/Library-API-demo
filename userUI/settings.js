

$('#search-form').submit(function(){

    event.preventDefault();


    var keynote = $('#search').val();
    var api = $('#api').val();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://localhost/api/view/get_resource.php?search=" + keynote ,
        "method": "GET",
        "headers": {

             "book-host": "http://localhost/api/",
             "apikey": api
        }
    }
    $.ajax(settings).done(function (response) {

        console.log(response);
        var data = JSON.parse(response);
        var res = '' ;
        for(var i=0; i<data.length; i++){
            res = res
            + '<p>Title:'       + data[i]['title'] + '</p>'
            + '<p>Author:'      + data[i]['author'] + '</p>'
            + '<p>Ratings:'     + data[i]['rating'] + '</p>'
            + '<p>isbn'         + data[i]['isbn'] + '</p>'
            + '<p>isbn13'       + data[i]['isbn13'] + '</p>'
            + '<p>Pages:'       + data[i]['num_pages'] + '</p>'
            + '<p>Published:'   + data[i]['pub_date'] + '</p>'
            + "<hr>";
        }
        document.getElementById('data').innerHTML = res;


    });
});
