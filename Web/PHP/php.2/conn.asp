 
<%
Response.Charset = "utf-8"
Session.CodePage = "65001"
Dim site_dir,data_path,connstr,conn
site_dir = "/"'�������Ŀ¼���"/"�ĳ�"/abc/",����abcΪ����Ŀ¼��
data_path = ""&site_dir&"qiyun_data/#8.0.mdb"
connstr = "Provider = Microsoft.Jet.OLEDB.4.0; Data Source = "&Server.MapPath(data_path)&" "
Set conn = Server.CreateObject("ADODB.Connection")
conn.Open connstr
%>
 
 