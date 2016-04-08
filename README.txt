1- git checkout etape5
2- importer posts.sql dans la base de données frontcontroller
3- ajouter à la fin du fichier httpd-vhosts.conf (dans c:\xampp\apache\conf\extra) :
<VirtualHost fc:80>
    DocumentRoot "C:/xampp/htdocs/frontcontroller"
    ServerName fc
    ServerAlias www.fc
</VirtualHost>
4- relancer apache
5- editer avec le bloc-note en mode administrateur le fichier hosts (dans C:\Windows\System32\drivers\etc)
ajouter :
127.0.0.1		fc
127.0.0.1		www.fc
