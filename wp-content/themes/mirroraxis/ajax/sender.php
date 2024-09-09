<?

// header("HTTP/1.1 500 Internal Server Error");
// exit();

require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' and !$_POST['name-check'] and !$_POST['email-check'] and !$_POST['message-check']) {

    foreach ($_POST as $key => $field) {
        if (str_contains($key, '-check')) {
            unset($_POST[$key]);
        }
    }
    function arrayToMarkdown($array) {
        $markdown = "";
        foreach ($array as $key => $value) {
            $markdown .= "<b>$key</b>: $value\n";
        }
        return $markdown;
    }

    $body_content = get_field('body_content', 10);
    $form = $body_content['form-block'];
    $tg_bot = $form['telegram-bot'];

    $message = "Заявка с сайта <b>MirrorAxis</b>\n\n";
    $message = $message . arrayToMarkdown($_POST);

    print_r($_POST);

    // Токен бота
    $botToken = $tg_bot['id'].':'.$tg_bot['token'];
    if ($tg_bot) {
        foreach ($tg_bot['chat-ids'] as $id) {
            // URL для запроса
            $url = "https://api.telegram.org/bot$botToken/sendMessage";
            $chatId = $id['value'];

            // Данные, которые будут отправлены через POST-запрос
            $data = array(
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            );

            // Использование cURL для отправки POST-запроса
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);
        }
    }
}