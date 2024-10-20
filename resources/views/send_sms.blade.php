<!DOCTYPE html>
<html>
<head>
    <title>Enviar SMS</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form id="smsForm">
        <input type="text" name="to" placeholder="Número de teléfono" required>
        <textarea name="message" placeholder="Mensaje" required></textarea>
        <button type="submit">Enviar SMS</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#smsForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: '/api/send-sms',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response.status);
                },
                error: function(xhr) {
                    alert('Error: ' + xhr.responseText);
                }
            });
        });
    </script>
</body>
</html>
