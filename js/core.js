$(document).ready(function(){

});

var validate = new function(){
    this.login = function(){
        var valid = true;
        $('#form-login input').each(function(){
            if($(this).val() == ''){
                valid = false;
                $(this).after("This input required");
            }
        });

        if(valid){
            $.ajax({
                type:"POST",
                url: "services/auth.php",
                data: $('#form-login').serialize(),
                success: function(data){
                    console.log(data);
                }
            });
        }

        return false;
    }
};