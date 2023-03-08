    $(document).ready(function() {
        $('#open-file').click(function() {
            $.get('proceso.php', function(data) {
                $('#text-editor').val(data);
            });
        });

        $('#save-file').click(function() {
            var data = $('#text-editor').val();
            $.post('proceso.php', {data: data});
        });

        $('#close-file').click(function() {
            $('#text-editor').val('');
        });
    });
