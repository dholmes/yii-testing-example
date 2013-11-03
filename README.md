yii-testing-example
===================

Playground for unit testing a gii-generated Yii application.  Comes with a vagrant, puppet, composer setup to make
getting up and running with it as simple and safe as possible.

Why?
----
Yii (particularly code generated from gii) reliies on a few things that the library very easy to use, but are difficult
to unit test.  

Setup
-----

  * clone my project
  * vagrant up
  * vagrant provision

I really don't know why, but at least for me, things like composer didn't get installed durring the first vagrant up.

Running Unit Tests
------------------

  * vagrant ssh
  * cd /var/www/protected/tests
  * ../../vendor/phpunit/phpunit/phpunit.php
