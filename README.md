# think-config

## 安装
```bash
composer require reaway/think-config
```

## 用法
```php
use Think\Component\Config\Facade\Config;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$file = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'cache.php';
Config::load($file, 'cache');

Config::get('cache');
```