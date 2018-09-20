<%
Response.Charset = "utf-8"
Session.CodePage = "65001"
Dim site_dir,data_path,mssql_dataname,mssql_username,mssql_password,mssql_hostname,connstr,conn
site_dir = "/"'如放在子目录请把"/"改成"/abc/",其中abc为二级目录名
mssql_dataname = "pcfinal_60"			'数据库名称
mssql_username = "sa"					'数据库用户名
mssql_password = "123"					'数据库密码
mssql_hostname = "127.0.0.1"			'数据库地址
connstr = "Provider = Sqloledb; User ID = "&mssql_username&"; Password = "&mssql_password&"; Initial Catalog = "&mssql_dataname&"; Data Source = "&mssql_hostname&";"
Set conn = Server.CreateObject("ADODB.Connection")
conn.Open connstr
%>
