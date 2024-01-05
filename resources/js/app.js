import './bootstrap';
$(function() {
    $(".register-button").each(function(){
        $(this).on("click", function() {
                
            var id=$(this).data("user-id")
            var name=$(this).data("user-name")
            var email=$(this).data("user-email")
            console.log(`${id} ${name} ${email}`)
            
            $("#pass_to_modal").attr("data-user-id", id);
            $("#pass_to_modal").attr("value", id);
            $("#pass_to_modal").attr("name", "id");
            $("#pass_to_modal").attr("data-user-name", name);
            $("#pass_to_modal").attr("data-user-email", email);
            $("#data_name").text(name)
            $("#data_email").text(email)
            
           
        });
    })





});





