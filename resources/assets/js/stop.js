
$(function () {
    let $deleteModal = $('#delete-modal').foundation();
    let $deleteButton = $deleteModal.find('.delete');
    let deleteHandlers = [];

    function addDeleteHandler(handler) {
        let wrappedHandler = function(e) {
            handler();
            $deleteModal.foundation('close');
        };
        $deleteButton.one('click', wrappedHandler);
        deleteHandlers.push(wrappedHandler);
    }

    // Clear delete handlers when the modal closes
    $deleteModal.on('closed.zf.reveal', function() {
        deleteHandlers.forEach(function(handler) {
            $deleteButton.off('click', handler);
        });
        deleteHandlers = [];
    });

    $('.delete__form').each(function(index, el) {
        let $form = $(el);
        $form.click(function(e) {
            e.preventDefault();
            $deleteModal.foundation('open');
            addDeleteHandler(function() {
                $form.submit();
            });
        });
    });
});

/*AJAX Ingredient Search*/
$("#ingredient__search").on("keyup paste",function(){
    $query = $(this).val();
    $parent = $(".parent").attr('id');
    $.ajax({
        url: "/ingredient/search?query="+encodeURIComponent($query),
        action: "GET",
        success: function(response)
        {
            $("#search__results").empty();
            var obj = JSON.parse(response);
            if(obj.length > 0)
            {
                console.log(obj);
                $.each(obj, function (key,value) {
                    $("#search__results").append($("<div class='column'>").load('/recipe/'+$parent+'/ingredient/'+value.id+"/quantityCard"));
                });
            }else {
                $("#search__results").append('<h1>No Results</h1>');
            }
        }
    });
});