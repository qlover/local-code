<%
Response.Charset = "utf-8"
Session.CodePage = "65001"
Dim site_dir,data_path,mssql_dataname,mssql_username,mssql_password,mssql_hostname,connstr,conn
site_dir = "/"'�������Ŀ¼���"/"�ĳ�"/abc/",����abcΪ����Ŀ¼��
mssql_dataname = "pcfinal_60"			'���ݿ�����
mssql_username = "sa"					'���ݿ��û���
mssql_password = "123"					'���ݿ�����
mssql_hostname = "127.0.0.1"			'���ݿ��ַ
connstr = "Provider = Sqloledb; User ID = "&mssql_username&"; Password = "&mssql_password&"; Initial Catalog = "&mssql_dataname&"; Data Source = "&mssql_hostname&";"
Set conn = Server.CreateObject("ADODB.Connection")
conn.Open connstr
%>
