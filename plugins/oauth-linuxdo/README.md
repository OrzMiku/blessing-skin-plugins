# 使用 LinuxDO 登录

当您想使用 LinuxDO 登录皮肤站时，可以使用本插件能让现有用户进行这样的操作。

## 使用方法

本插件没有配置页面，所有配置通过修改 `.env` 来进行。

1. 在 `https://connect.linux.do/` 创建 OAuth 2 应用
2. 增加三条配置项，`LINUXDO_CLIENT_ID`、 `LINUXDO_CLIENT_SECRET`、 `LINUXDO_CALLBACK_URL`
3. 将 `客户端 ID`、`客户端 Secret`、`回调 URL` 分别填入  `LINUXDO_CLIENT_ID`、 `LINUXDO_CLIENT_SECRET`、 `LINUXDO_CALLBACK_URL`

## 示例

```plaintext
LINUXDO_CLIENT_ID=客户端ID
LINUXDO_CLIENT_SECRET=客户端密钥
LINUXDO_CALLBACK_URL=https://皮肤站url/auth/login/linuxdo/callback
```
