<?php
/**
 * @作者Amin Mahmoudi（MasterkinG）
 * @copyright版权所有（c）2019-2020，MasterkinG32。（https://masterking32.com）
 * @链接https://masterking32.com
 * @描述：它不是masterking32框架！
 **/

/*===================================================================
基本网址
    那就是你的网站URL。示例：“ https://DOMAIN.COM”
页面标题
    那就是你的网站标题。示例：“我的WOW专用服务器！”
语言
    网站语言（英语/波斯语/意大利语/简体中文/繁体中文/瑞典语/法语/德语/德语/西班牙语/韩语）
             (english/persian/italian/chinese-simplified/chinese-traditional/swedish/french/german/spanish/korean)
=====================================================================*/
$config['baseurl'] = "http://wow.suok.ml";
$config['page_title'] = "suok公益魔兽";
$config['language'] = "chinese-simplified";
/*===================================================================
如果看到白屏或有问题，可以启用它以查看错误。
请注意，测试后，请确保禁用此选项。
#true
#false
=====================================================================*/
$config['debug_mode'] = true;
/*===================================================================
您的服务器信息
realmlist：服务器领域列表
patch_location：如果具有补丁程序设置URL，可在此处下载我们的补丁程序或将其设为空白
game_version：您的游戏版本
=====================================================================*/
$config['realmlist'] = '152.67.195.237';
#$config['patch_location'] = 'http://mypatch.com/patch.mpq';
$config['patch_location'] = '';
$config['game_version'] = '3.3.5a (12340)';
/*===================================================================
选择您的服务器扩展。
如果要使用高级模板，则将更改图像和背景以进行扩展。
0 = Classic                            #经典
1 = The Burning Crusade (TBC)          #燃烧的远征（TBC）
2 = Wrath of the Lich King (WotLK)     #巫妖王之怒（WotLK）
3 = Cataclysm                          #大灾变
4 = Mist of Pandaria (MOP)             #潘达利亚之雾（MOP）
5 = Warlords of Draenor (WOD)          #德拉诺之王（WOD）
6 = Legion                             #军团
7 = BFA                               （我不确定这一点！）
=====================================================================*/
$config['expansion'] = '2';
/*===================================================================
如果您的服务器是WoD / Legion / BFA，则应启用它！
=====================================================================*/
$config['battlenet_support'] = false;
/*===================================================================
如果您的核心密码加密是SRP6，则需要启用它。
对于TrinityCore（3.3.5 / master）的最新版本，您需要启用它。https://git.io/JJRH4和https://git.io/JJrxq
如果使用最新版本的TC，请启用该功能。
您需要为PHP启用GMP扩展。
=====================================================================
******在您的php.ini中取消注释扩展名= gmp ******
=====================================================================*/
$config['srp6_support'] = true;
/*===================================================================
#如果您遇到顶级玩家或在线玩家的问题，可以将其禁用！
disable_top_players
    禁用服务器顶级玩家页面[true：隐藏顶级玩家页面]
disable_online_players
    禁用在线玩家页面[true：隐藏在线玩家页面]
disable_changepassword
    禁用更改密码
    如果使用SOAP进行注册，请将其更改为true。
=====================================================================*/
$config['disable_top_players'] = false;
$config['disable_online_players'] = true;
$config['disable_changepassword'] = true;
/*===================================================================
允许用户使用多个帐户的电子邮件帐户（仅适用于非battle.net服务器）
=====================================================================*/
$config['multiple_email_use'] = false;
/*===================================================================
模板名称，您可以将其更改为：
light              #光
advance            #提前
icecrown           #冰冠
kaelthas           #凯尔塔斯
battleforazeroth   #零食之战
=====================================================================*/
$config['template'] = 'light';
/*===================================================================
SMTP 配置.
我们需要这部分来发送电子邮件。 (用于恢复密码和 2FA)
您可以使用自己的SMTP或Gmail / Yahoo / Hotmail等
smtp_host
    指定主和备用SMTP服务器
smtp_port
    要连接的TCP端口
smtp_auth
    启用S​​MTP身份验证
smtp_user
    SMTP用户名
smtp_pass
    SMTP密码
smtp_secure
    启用TLS加密，也接受`ssl`
smtp_mail
    通过...发送电子邮件
=====================================================================*/
$config['smtp_host'] = 'smtp1.example.com';
$config['smtp_port'] = 587;
$config['smtp_auth'] = true;
$config['smtp_user'] = 'user@example.com';
$config['smtp_pass'] = 'SECRET';
$config['smtp_secure'] = 'tls';
$config['smtp_mail'] = 'no-reply@example.com';
/*===================================================================
投票系统
    您可以启用/禁用投票系统。
    投票系统很简单，没有回发或类似的方式来验证投票
    如果您使用Cloudflare，并且IP和投票存在问题，请阅读以下内容：https://support.cloudflare.com/hc/en-us/articles/200170786
投票网站
    您的投票网站和图片必须是数组。
=====================================================================*/
$config['vote_system'] = false;
$config['vote_sites'] = array(
    array(
        'image' => 'http://www.top100arena.com/hit.asp?id=93137&c=WoW&t=2',
        'site_url' => 'http://www.top100arena.com/in.asp?id=93137'
    ),
    array(
        'image' => 'https://topg.org/topg.gif',
        'site_url' => 'https://topg.org/wow-private-servers/in-479394'
    ),
    array(
        'image' => 'http://www.xtremeTop100.com/votenew.jpg',
        'site_url' => 'http://www.xtremetop100.com/in.php?site=1132364316'
    )
);
/*===================================================================
您可以使用Image captcha或HCaptcha或Recaptcha v2。
如果要使用在PHP中启用cURL所需的Recaptcha v2或HCaptcha。
**我们建议使用HCaptcha。**
验证码类型
    0）图片验证码
    1）HCaptcha
    2）ReCaptcha v2
    +2）禁用验证码。（不要这样做！）
对于图像验证码，不需要为captcha_key captcha_secret或captcha_language放置任何内容。
captcha_secret / captcha_secret
    要获取HCaptcha的密钥和秘密，请访问https://hCaptcha.com/?r=6d4f9117ba12
    要获取Recaptcha的密钥和秘密，请访问https://www.google.com/recaptcha

验证码语言
    https://docs.hcaptcha.com/languages
    https://developers.google.com/recaptcha/docs/language
=====================================================================
******在php.ini中取消注释扩展名= gd2 ******
=====================================================================*/
$config['captcha_type'] = 0;
$config['captcha_key'] = '';
$config['captcha_secret'] = '';
$config['captcha_language'] = 'en';
/*===================================================================
soap_for_register
    不要为AzerothCore / TrinityCore / SkyFire和AshamaneCore启用它。
    如果启用，则需要禁用更改密码功能。
    如果要启用双向验证（2FA），则无需启用此选项。
    对于两层身份验证（2FA），只需配置SOAP的其他部分。

SOAP功能需要在PHP中启用肥皂功能。

soap_host
    SOAP服务器地址
soap_port
    SOAP服务器端口。
soap_uri
    urn：TC for TrinityCore
    urn：AC for AzerothCore
    urn：MaNGOS for Mangos
soap_style
    SOAP风格
soap_username
    SOAP帐户用户名
soap_password
    SOAP帐号密码
soap_ca_command
    创建帐户命令
    您也可以这样使用它：“。account创建{USERNAME} {PASSWORD} {PASSWORD} {EMAIL}”
    在服务器中检查创建帐户命令！
soap_cp_command
    更改密码命令
    帐户设置密码{USERNAME} {PASSWORD} {PASSWORD}
    检查服务器中的更改密码命令
soap_asa_command
    如果使用soap_for_register，则需要设置此命令。
    此命令将在soap_ca_command之后运行。
    如果您不希望在soap_ca_command之后运行任何命令，可以将其设置为空，如下所示：''
    帐户集插件{USERNAME} {EXPANSION}
=====================================================================
******php.ini取消注释扩展 extension=soap ******
=====================================================================*/
$config['soap_for_register'] = false;
$config['soap_host'] = '127.0.0.1';
$config['soap_port'] = '7878';
$config['soap_uri'] = 'urn:MaNGOS';
$config['soap_style'] = 'SOAP_RPC';
$config['soap_username'] = 'admin_soap';
$config['soap_password'] = 'admin_soap';
$config['soap_ca_command'] = 'account create {USERNAME} {PASSWORD}';
$config['soap_cp_command'] = 'account set password {USERNAME} {PASSWORD} {PASSWORD}';
$config['soap_asa_command'] = 'account set addon {USERNAME} {EXPANSION}';
/*===================================================================
两要素认证（2FA）
您的核心必须支持2fa。
此功能仅适用于具有2fa命令的内核。
如果您的核心支持2fa但没有任何命令，则可以检查以下内容：https://github.com/masterking32/WoWSimpleRegistration/pull/20（支持某些核心，需要使用2fa进行注册。）

您也需要配置SOAP，但是不需要启用'soap_for_register'。
出于安全原因，我们使用电子邮件启用2fa，您需要启用SMTP配置。

2fa_support
    您可以启用或禁用它。（真假）
soap_2d_command
    禁用2fa的命令。
    关闭帐户2fa {USERNAME}
soap_2e_command
    启用2fa的命令。
    帐户集2fa {USERNAME} {SECRET}
=====================================================================*/
$config['2fa_support'] = false;
$config['soap_2d_command'] = 'account set 2fa {USERNAME} off';
$config['soap_2e_command'] = 'account set 2fa {USERNAME} {SECRET}';
/*===================================================================
您认证/ Realmd MySQL信息。
db_auth_host
    身份验证数据库主机
db_auth_port
    验证数据库端口
db_auth_user
    身份验证数据库用户名
db_auth_pass
    身份验证数据库密码
db_auth_dbname
    身份验证数据库DBName
=====================================================================*/
$config['db_auth_host'] = '152.67.197.104';
$config['db_auth_port'] = '3306';
$config['db_auth_user'] = 'root';
$config['db_auth_pass'] = 'sw63828';
$config['db_auth_dbname'] = 'auth';
/*===================================================================
角色的数据库。
如果您的服务器有很多领域，则可以检查文件底部的示例。
=====================================================================*/
$config['realmlists'] = array(
    "1" => array(
        'realmid' => 1, // 领域ID
        'realmname' => "Trinity", // 领域名称
        'db_host' => "152.67.195.237", // MySQL主机IP
        'db_port' => "3306", // MySQL主机端口
        'db_user' => "root", // MySQL用户名
        'db_pass' => 'sw63828', // MySQL密码
        'db_name' => "characters" // 字符数据库名称
    )
);

/*
 **********************************
 *超越一个领域的精彩绝伦*
 **********************************

$config['realmlists'] = array( // 在此处添加您的领域列表
    "1" => array(
        'realmid' => 1,
        'realmname' => "Realm 1",
        'db_host' => "127.0.0.1",
        'db_port' => "3306",
        'db_user' => "root",
        'db_pass' => "root",
        'db_name' => "rm1_chars"
    ),
    "2" => array(
        'realmid' => 2,
        'realmname' => "Realm 2",
        'db_host' => "127.0.0.1",
        'db_port' => "3306",
        'db_user' => "root",
        'db_pass' => "root",
        'db_name' => "rm2_chars"
    ),
    "3" => array(
        'realmid' => 3,
        'realmname' => "Realm 3",
        'db_host' => "127.0.0.1",
        'db_port' => "3306",
        'db_user' => "root",
        'db_pass' => "root",
        'db_name' => "rm3_chars"
    )
);
*/



$config['script_version'] = '2.0.0';
