$("#add_col").click(function(){
    $( "#add_col" ).before(function() {
        return   "<td >"+seance+
        "<select aria-label=Cours>"
            "<optgroup label=Siw>"
            "<option value=Siad>"+Siad+"</option>"
            "<option value=Sia>"+Sia+"</option>"
            "</optgroup>"

            "</select>"

            "</td>"

    });
})
