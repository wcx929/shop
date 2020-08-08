###安装步骤
<li>composer install</li>
<li>安装一下 Nodejs 依赖 先配置镜像加速<b>yarn config set registry https://registry.npm.taobao.org</b></li>
<li>然后使用 yarn 命令安装 Nodejs 依赖<b>SASS_BINARY_SITE=http://npm.taobao.org/mirrors/node-sass yarn</b></li>
<li>编译一下前端代码<b>yarn dev</b></li>
<li>配置 .env 文件<b>cp .env.example .env</b></li>
<li>生成 APP_KEY<b>php artisan key:generate</b></li>
<li>创建软链<b>php artisan storage:link</b></li>
<li>执行数据库迁移<b>php artisan migrate</b></li>
<li>导入管理后台数据<b>mysql laravel-shop < database/admin.sql</b> 管理后台初始账号：admin 密码：admin，后台地址为 http://你的域名/admin</li>
