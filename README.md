# Dashboards

A Dashboard created from user databases

## Getting Started


### Prerequisites


```
xampp for locally hosting the website
```

### Installing


```
download xampp
```
[Download Xampp](https://www.apachefriends.org/index.html)  from Apache Friends. Choose the download with the version
of PHP that you need.
```
Enable Openssl.
```
Move to xampp/PHP/php.ini file. Open the php.ini-development file. Uncomment the line
extension=php_openssl.dll.Save the file.
Do the same for php.ini-production file too.
And repeat
```
Run Xampp.
```
Open Xampp control panel.
Click the “Start” buttons next to both “Apache” and &quot;MySQL&quot; in the Xampp console.

```
Create the Database.
```
Once Xampp is installed and run correctly open your web browser
http://localhost/phpmyadmin/.
Create a database with the name intern. Import Dashboards/database/intern.sql into this
database intern.

## Built With

* [Codeigniter](https://codeigniter.com/user_guide/) - The web framework used
* [Bootstrap](http://getbootstrap.com/) - frontend framework

## Authors

 *Initial work* - [thejus krishna](https://github.com/thejuskrishna)

See also the list of [contributors](https://github.com/thejuskrishna/Dashboards/graphs/contributors) who participated in this project.
