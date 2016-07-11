# SimplePHPMailSender
Small project to send emails using PHP and Swift Mailer

### Configure
With PHP and [composer](https://getcomposer.org/) already installed, run the following command to get the project dependencies:
```
composer install
```

Then, fill the configuration fields:
```
cp config/config_default.php config/config.php
vi config/config.php
```

| Field        | Type      | Sample                          |
| -------------|-----------| --------------------------------|
|**host**      | `string`  | smtp.gmail.com                  |
|**port**      | `integer` | 465                             |
|**security**  | `string`  | ssl                             |
|**name**      | `string`  | John Doe                        |
|**username**  | `string`  | john.doe@gmail.com              |
|**password**  | `string`  | myP4ssw0rd                      |
|**subject**   | `string`  | Email subject                   |
|**to**        | `array`   | john.doe@gmail.com => Jane Doe  |
|**html_file** | `file`    | /tmp/file.html                  |


### Send email
```
php index.php
```

## Copyright
Copyright (c) 2016 Bruno Lima brunolima.uece@gmail.com
