<?php
$env["Title"] = "KnzkLive : 広告なし, 配信時間無制限の生配信コミュニティ！";

$env["RootUrl"] = "/";
$env["domain"] = "live.knzk.me.example";

$env["masto_login"]["domain"] = "knzk.me";
$env["masto_login"]["key"] = "Client key";
$env["masto_login"]["secret"] = "Client secret";
$env["masto_login"]["redirect_uri"] = "https://live.knzk.me/login";

$env["database"]["host"] = "localhost";
$env["database"]["port"] = 3306;
$env["database"]["db"] = "dbname";
$env["database"]["user"] = "Username";
$env["database"]["pass"] = "Password";

$env["publish_auth"] = "xxxxx";

$env["is_testing"] = false;

// メンテナンスモード: 全てのAPIとWeb UIをロックし503にします(キャッシュ分は表示されるかも)
$env["is_maintenance"] = false;

// 定数: いじらないでね
define('PATH', dirname(__FILE__) . '/');
define('CONF_VERSION', 1); //Devtip: CONF_VERSIONを変えたらlib/bootloader.phpの$ConfigVersionの数字を変える
