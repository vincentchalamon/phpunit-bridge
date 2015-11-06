Symfony Standard Edition + PHPUnit Bridge
=========================================

This application has been created from [Symfony Standard Edition][1] to implement [PHPUnit Bridge][2].

A deprecated method is used in [DefaultController][3] and in [FooManager][4], but only those on controller is detected
by PHPUnit Bridge. Maybe because of WebTestCase usage ?

Following command will show you the deprecated method usage on DefaultController:

```
phpunit -c app
```

If you comment the deprecated method call on DefaultController and run `phpunit -c app` command again, the warning
disappear, but the deprecated method is still present in FooManager.

[1]:  https://github.com/symfony/symfony-standard
[2]:  https://github.com/symfony/phpunit-bridge
[3]:  https://github.com/vincentchalamon/phpunit-bridge/blob/2.8/src/AppBundle/Controller/DefaultController.php#L16
[4]:  https://github.com/vincentchalamon/phpunit-bridge/blob/2.8/src/AppBundle/Manager/FooManager.php#L11
