$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });


$(document).ready(function()
{
    $('#filter').change(function()
    {
        var type = $(this).val();
        $.ajax(
            {
                url:"filter.php",
                method:"POST",
                data:{type:type},
                success:function(data)
                {
                    $('#blogs').html(data);
                }
            })
    })
});
$(document).ready(function(){
    $('.maand').click(function () {
        var maand = $(this).val();

        $.ajax(
            {
                url:"filter.php",
                method:"POST",
                data:{maand:maand},
                success:function(data)
                {
                    $('#blogs').html(data);
                }
            })
    })
});
    $("#commentForm").on("submit", function(e) {
        e.preventDefault();
        validateComment();
    });
    function validateComment() {

        var comment = $('#comment').val();
        var titel = $('#commentTitel').val();
        var userId = $('#userId').val();
        var datum = $('#commentDatum').val();
        var blogId = $('#blogId').val();
        if(comment.replace(/\s/g,"") != "" && titel.replace(/\s/g,"") != "")
        {

            $('#comment').val('');
            $('#commentTitel').val('');
            $( "#comment" ).css('border-color', "grey");
            $( "#commentTitel" ).css('border-color', "grey");
            $.ajax(
                {
                    url:"addComment.php",
                    method:"POST",
                    data:{comment:comment, titel:titel, userId:userId, datum:datum, blogId:blogId},
                    success:function(data)//we got the response
                    {
                        $('#comments').html(data);
                    },
                    error:function(exception){alert('Exeption:'+exception);}
                })

        }
        else
        {



        //injection
        if(comment.replace(/\s/g,"") == "")
        {

            $( "#comment" ).css('border-color', "red");
        }
        else{
            $( "#comment" ).css('border-color', "green");
        }



        if(titel.replace(/\s/g,"") == "")
        {
            $( "#commentTitel" ).css('border-color', "red");
        }
        else
        {
            $( "#commentTitel" ).css('border-color', "green");
        }

        }

    }
    $(document).ready(function(){

        $('#message').keydown(function () {
            var max = 1000;
            var len = $(this).val().length;
            if (len >= max) {
                $('#characterLeft').text('You have reached the limit');
                $('#characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            }
            else {
                $('#btnSubmit').removeClass('disabled');
                $('#characterLeft').removeClass('red');
            }
        });
    });
    /*
    $("#blogForm").on("submit", function(e) {
        e.preventDefault();
        validateBlog();
    });
    function validateBlog() {
        var categorie = $('#blogCategorie').val();
        var titel = $('#blogTitel').val();
        var userId = $('#userId').val();
        var datum = $('#blogDatum').val();
        var tekst = $('#blogTekst').val();
        var foto = null;
        var beschrijving = $('#blogBeschrijving').val();
        var filename = $('#blogFoto').val().split('\\').pop();


            if (categorie.replace(/\s/g, "") != "" && titel.replace(/\s/g, "") != "" && userId.replace(/\s/g, "") != "" && datum.replace(/\s/g, "") != "" && tekst.replace(/\s/g, "") != "" && beschrijving.replace(/\s/g, "") != "") {
                $('#blogCategorie').val("");
                $('#blogTitel').val("");
                $('#userId').val("");
                $('#blogDatum').val("");
                $('#blogTekst').val("");
                $('#blogFoto').val("");
                $('#blogBeschrijving').val("");

                $('#blogFoto').css('border-color', "grey");
                $('#blogCategorie').css('border-color', "grey");
                $('#blogTitel').css('border-color', "grey");
                $('#userId').css('border-color', "grey");
                $('#blogDatum').css('border-color', "grey");
                $('#blogTekst').css('border-color', "grey");
                $('#blogBeschrijving').css('border-color', "grey");
                alert(img);
                $.ajax(
                    {
                        url: "addBlog.php",
                        method: "POST",
                        data: {
                            categorie: categorie,
                            titel: titel,
                            userId: userId,
                            datum: datum,
                            tekst: tekst,
                            foto: foto
                        },
                        success: function (result)//we got the response
                        {

                        },
                        error: function (exception) {
                            alert('Exeption:' + exception);
                        }
                    })

            }
            else {



                //injection
                if (categorie.replace(/\s/g, "") == "") {

                    $("#blogCategorie").css('border-color', "red");
                }
                else {
                    $("#blogCategorie").css('border-color', "green");
                }

                if (tekst.replace(/\s/g, "") == "") {

                    $("#blogTekst").css('border-color', "red");
                }
                else {
                    $("#blogTekst").css('border-color', "green");
                }
                if (titel.replace(/\s/g, "") == "") {

                    $("#blogTitel").css('border-color', "red");
                }
                else {
                    $("#blogTitel").css('border-color', "green");
                }
                if (beschrijving.replace(/\s/g, "") == "") {

                    $("#blogBeschrijving").css('border-color', "red");
                }
                else {
                    $("#blogBeschrijving").css('border-color', "green");
                }


            }

    }
    */
    $(document).ready(function() {

        $("input").on("blur", function(){
            validateForm($(this));
        });

        $('#register-form').on('submit', function(e){
            e.preventDefault();

            $('input:not(:submit)').each(function(){
                validateForm($(this));
            });

            if($("input.error").length == 0) {
                var username = $("#naam").val();
                var email= $("#email").val();
                var wachtwoord = $("#regPassword").val();
                var herhWachtwoord= $("#herhPassword").val();
                $.ajax(
                    {
                        url:"addUser.php",
                        method:"POST",
                        data:{username:username, email:email, wachtwoord:wachtwoord, herhWachtwoord:herhWachtwoord},
                        success:function(data)//we got the response
                        {
                            $(this).hide();
                        },
                        error:function(exception){alert('Exeption:'+exception);}
                    })

            }
        });
    });

    function validateForm(el) {
        el.removeClass("error");


        if(isEmpty(el)) {
            el.addClass("error");
        }

        if(el.attr('type') == "email") {

            if(!isValidEmail(el)) {

                el.addClass("error");
            }
        }

        if(el.attr('type') == "password") {

            if( $("#herhPassword").val() != $("#regPassword").val()) {
console.log("niet hetzelfde");
                console.log($("#regPassword").val());
console.log($("#herhPassword").val());
                el.addClass("error");
            }
        }
    }

    function isEmpty(el) {
        if(el.val().length == 0) {
            return true;
        }
        return false;
    }

    function isValidEmail(el) {
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        return pattern.test(el.val());
    }


    $(document).ready(function() {

        $('#addCategory').on('submit', function(e){
            e.preventDefault();
            validateCategory();

        });

    });
    function validateCategory() {
        if($("#categoryNaam").val().replace(/\s/g,"") != "" && $("#categoryBeschrijving").val().replace(/\s/g,"") != "") {
            var categorieNaam = $("#categoryNaam").val();
            var categorieBeschrijving = $("#categoryBeschrijving").val();
            $.ajax(
                {
                    url:"addCategorie.php",
                    method:"POST",
                    data:{categorieNaam:categorieNaam, categorieBeschrijving:categorieBeschrijving},
                    success:function(data)//we got the response
                    {

                    },
                    error:function(exception){alert('Exeption:'+exception);}
                })

        }
        else
        {
            if($("#categoryNaam").val().replace(/\s/g,"") == "")
            {
                alert("gelieve naam in te vullen");
            }
            if($("#categoryBeschrijving").val().replace(/\s/g,"") == "")
            {
                alert("gelieve beschrijving in te vullen");
            }
        }

    }

});



