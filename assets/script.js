$(document).ready(function(){

    //create or update user
    $("#userForm").on('submit', function(e){ 
   
        e.preventDefault();
        var formData = {
            id: $('#userId').val(),
            name: $('#name').val(),
            email: $('#email').val()
        };

        var url = formData.id ? 'update.php' : 'create.php';
      
        $.post(url, formData, function(response){
            alert(response);
            location.reload();
        });

    });


    //Edit User

    $(document).on('click', '.edit', function(){
        
        var id = $(this).data('id');
       
        $.get('read.php', {id:id}, function(userData){
            
            user = JSON.parse(userData);
            $("#userId").val(user.id);
            $("#name").val(user.name);
            $("#email").val(user.email);

        }).fail(function() { // ✅ Tratamento de erro
            alert("Erro ao carregar usuário!");
        });
    });



    //Delete user
    $(document).on('click', '.delete', function(){
        if(confirm('Are you sure?')){
            var id=$(this).data('id');
            $.post('delete.php', {id:id}, function(response){
                alert(response);
                location.reload();
            });
        }
    });

});