
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