# server changes

In addition to .htaccess

If you are using URLs like this (REQUEST_URI) in your
assignment:

```
mydomain.com/about
mydomain.com/register
```

you need to execute these two commands on the server:

```bash
sudo a2enmod rewrite
sudo systemctl reload apache2
```

If you are using links like this:

mydomain.com/?p=about

You don't need to worry about it... but you might as well do it
because you'll need it for the next assignment.

```bash
sudo a2enmod rewrite
sudo systemctl reload apache2
```