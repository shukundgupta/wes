//animate placeholder

$(document).ready(function(){
    $(".welcome-form-input").each(function(){
        $(this).click(function(){
            //remove placeholder
            $(this).attr("placeholder","");

            //show label
            var parent = this.parentElement;
            var label = parent.getElementsByTagName("LABEL")[0];
            $(label).removeClass("d-none");
            $(label).addClass("animate__animated animate__backInUp");
        });
    });
});

//slide on next btn click
$(document).ready(function(){
    $(".step-1-next-btn").click(function(e){
        e.preventDefault();
        empty_field_validation("step-1","step-2");
    });

    $(".step-2-next-btn").click(function(e){
        e.preventDefault();
        empty_field_validation("step-2","step-3");
    });

    $(".step-3-next-btn").click(function(e){
        e.preventDefault();
        empty_field_validation("step-3","step-4");
    });
});

//validate on next btn click
function empty_field_validation(first_class,second_class){
    var container = document.getElementsByClassName(first_class)[0];
    var input = container.getElementsByClassName("required");
    var url = container.getElementsByClassName("url");
    var tmp = [];
    $(input).each(function(i){
        if($(this).val().trim() == ""){
            if(this.nextSibling.nodeName == "SMALL"){
                this.nextSibling.remove();
            }
            $(this).addClass("border-danger");
            $("<small class='text-danger required-notice'><i class='fa fa-warning'></i>This filed can't be empty</small>").insertAfter(this);
        }else{
            tmp[i] = $(this).val().trim();
            if(this.type == "email"){
                validate_email(this);
            }
        }
    });

    //validate url field
    $(url).each(function(){
        if($(this).val().trim() != ""){
            validate_url(this);
        }
    });

    //slide if all required field is not empty
    if(tmp.length == input.length && $(".required-notice").length == 0){
        $("."+first_class).addClass("d-none");
        $("."+second_class).removeClass("d-none");
        $("."+second_class).addClass("animate__animated animate__slideInRight");
    }

    //remove required message on input
    $(input).each(function(){
        $(this).on("input",function(){
            if(this.nextSibling.nodeName =="SMALL"){
                $(this).removeClass("border-danger");
                this.nextSibling.remove();
            }
        });
    });

    //remove url message on input
    $(url).each(function(){
        $(this).on("input",function(){
            if(this.nextSibling.nodeName =="SMALL"){
                $(this).removeClass("border-danger");
                this.nextSibling.remove();
            }   
        });
    });

}

//validate email
function validate_email(input){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(!reg.test(input.value)){
        if(input.nextSibling.nodeName == "SMALL"){
            input.nextSibling.remove();
        }
        $(input).addClass("border-danger");
        $("<small class='text-danger required-notice'><i class='fa fa-warning'></i>Enter a valid email</small>").insertAfter(input);
    }
}

//validate url
function validate_url(input){
    var reg = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/; 
    if(!reg.test(input.value)){
        if(input.nextSibling.nodeName == "SMALL"){
            input.nextSibling.remove();
        }
        $(input).addClass("border-danger");
        $("<small class='text-danger required-notice'><i class='fa fa-warning'></i>Enter a valid url</small>").insertAfter(input);
    }
}

//slide on back btn click
$(document).ready(function(){
    $(".step-2-back-btn").click(function(e){
        e.preventDefault();

        $(".step-2").addClass("d-none");
        $(".step-1").removeClass("d-none");
        $(".step-1").addClass("animate__animated animate__slideInRight");
    });

    $(".step-3-back-btn").click(function(e){
        e.preventDefault();

        $(".step-3").addClass("d-none");
        $(".step-2").removeClass("d-none");
        $(".step-2").addClass("animate__animated animate__slideInRight");
    });

    $(".step-4-back-btn").click(function(e){
        e.preventDefault();

        $(".step-4").addClass("d-none");
        $(".step-3").removeClass("d-none");
        $(".step-3").addClass("animate__animated animate__slideInRight");
    });
});