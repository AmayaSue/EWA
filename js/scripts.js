$(document).ready(function(){
//Drop-down-Menü
  $('.dropdown-li').click( function(event){
    event.stopPropagation();
    $('.dropdown-ul').toggle();
  });
  $(document).click( function(){
    $('.dropdown-ul').hide();
  });

  //Content laden
  $(".n_start").click(function(){ //Startseite
    $("#main").animate({opacity:"0", filter:"alpha(opacity=0)"}, 400, function(){
        $("#main").load("includes/content/home.php", function(){
          $("#main").animate({opacity:"1", filter:"alpha(opacity=100)"}, 400);
        });
    });
  });

  $(".n_buchshop").click(function(){ //Buchshop
    $("#main").animate({opacity:"0", filter:"alpha(opacity=0)"}, 400, function(){
        $("#main").load("includes/content/buchshop.php", function(){
          $("#main").animate({opacity:"1", filter:"alpha(opacity=100)"}, 400);
          getBooks();
        });
    });
  });

 $(".n_konto").click(function(){ //Konto
    $("#main").animate({opacity:"0", filter:"alpha(opacity=0)"}, 400, function(){
        $("#main").load("includes/content/konto.php", function(){
          $("#main").animate({opacity:"1", filter:"alpha(opacity=100)"}, 400);

        });
    });
  });

  $("#n_kontakt").click(function(){ //Kontaktseite
    $("#main").animate({opacity:"0", filter:"alpha(opacity=0)"}, 400, function(){
        $("#main").load("includes/content/kontakt.php", function(){
          $("#main").animate({opacity:"1", filter:"alpha(opacity=100)"}, 400);
        });
    });
  });



// Funktion definieren
  function getBooks() {
    // Ajax Request
    $.ajax({
      // Von Wo
      url: 'http://141.56.131.108/ewa/g08/api/getBooks.php',
      // Rückgabewert der URL
      dataType: 'json',
      // Wenn HTTP 200 (alles gut)
      success: function (books) {
        // Ein Array für die zu rendernden HTML-Strings (Performancegründe warum Array)
        var stringToHTML = [];
        // Für jedes Buch in dem Rückgabewert
        $.each(books, function (index,book) {
          // console.log(book);
          // HTML Buchobject zusammenbasteln
          stringToHTML.push("<span><h2>");
          stringToHTML.push(book['Titel']);
          stringToHTML.push("</h2>&nbsp;");
          stringToHTML.push(book['PreisBrutto']);
          stringToHTML.push("</span>");
        });

        // Einem Div den ganzen Kram anhängen //join('') um das Array zu einem String zu machen
        $('#bookList').append(stringToHTML.join(''));
      }
    })
  }

// Funktion ausführen
  getBooks();
});