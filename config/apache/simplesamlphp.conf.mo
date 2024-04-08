<VirtualHost *:443>
    ServerName idp.example.com
    DocumentRoot /var/www/simplesamlphp
    Alias /simplesaml /var/www/simplesamlphp/www

    SSLEngine on
    SSLProxyEngine On
    SSLCertificateFile /etc/apache2/apache-selfsigned.crt
    SSLCertificateKeyFile /etc/apache2/apache-selfsigned.key

   <Directory /var/www/simplesamlphp>
        RewriteEngine On
        RewriteBase /
        RewriteRule ^$ www [L]
        RewriteRule ^/(.+)$ www/$1 [L]
    </Directory>

    <Directory /var/www/simplesamlphp/www>
        <IfModule !mod_authz_core.c>
        Require all granted
        </IfModule>
    </Directory>
</VirtualHost>

ServerName idp.example.com
