## ucenter for Laravel 4

Laravel 4 ucenter.

[![Latest Stable Version](https://poser.pugx.org/wehnhew/ucenter/v/stable.png)](https://packagist.org/packages/wehnhew/ucenter) [![Total Downloads](https://poser.pugx.org/wehnhew/ucenter/downloads.png)](https://packagist.org/packages/wehnhew/ucenter)

### 安装

- [laravel4-ucenter on Packagist](https://packagist.org/packages/wehnhew/ucenter)
- [laravel4-ucenter on GitHub](https://github.com/wehnhew/laravel4-ucenter)

只要在你的 `composer.json` 文件require中加入下面内容，就能获得最新版.

~~~
"wehnhew/ucenter": "dev-master"
~~~

然后需要运行 "composer update" 来更新你的项目

安装完后，在 `app/config/app.php` 文件中找到 `providers` 键，

~~~
'providers' => array(

    'Wehnhew\Ucenter\UcenterServiceProvider'

)
~~~

找到 `aliases` 键，

~~~
'aliases' => array(

    'Ucenter' => 'Wehnhew\Ucenter\Facades\Ucenter'

)
~~~

## 配置
运行以下命令将配置复制到 `app\config\packages\wehnhew\ucenter` 方便修改配置
~~~
php artisan config:publish wehnhew/ucenter
~~~
ucenter配置项
~~~
//config.php
'url'		=> '/api/ucapi', // 网站UCenter接受数据地址
'api'		=> 'http://localhost/ucenter', // UCenter 的 URL 地址, 在调用头像时依赖此常量
'connect'	=> 'mysql', // 连接 UCenter 的方式: mysql/NULL, 默认为空时为 fscoketopen()
'dbhost'	=> 'localhost', // UCenter 数据库主机
'dbuser'	=> 'root', // UCenter 数据库用户名
'dbpw'		=> 'root', // UCenter 数据库密码
'dbname'	=> 'ucenter', // UCenter 数据库名称
'dbcharset'	=> 'utf8',// UCenter 数据库字符集
'dbtablepre'=> 'uc_', // UCenter 数据库表前缀
'key'		=> '6bc3bbKaoWnVrb26juVvk4uq4c2a5SNQvzv70Zs', // 与 UCenter 的通信密钥, 要与 UCenter 保持一致
'charset'	=> 'utf-8', // UCenter 的字符集
'ip'		=> '127.0.0.1', // UCenter 的 IP, 当 UC_CONNECT 为非 mysql 方式时, 并且当前应用服务器解析域名有问题时, 请设置此值
'appid'		=> 5, //当前应用的 ID
'ppp'		=> 20, //当前应用的 ID
~~~

## 使用
例如：获取用户名为wen的信息
~~~
$result = Ucenter::execute('uc_get_user',['wen']);
var_dump($result);
~~~


## 联系我
有问题，请发送到 chenhanwen@163.com
