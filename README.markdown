# Skelton PHP 5.3 Git Project

You can copy this project by simply running the `copy` shell script
from the command line inside the directory where you want to copy the
skeleton to.

Here is an example:

    $ mkdir MyNewProject
    $ cd MyNewProject
    $ /path/to/skeleton/copy MyNewProject

Now you have the new project ready to be developed. You can run the 
empty test suite:

    $ cd tests
    $ phpunit MyNewProject/Tests/AllTests.php

## Start Writing Classes

Now you can start writing classes in `MyNewProject/lib/MyNewProject`.
The skeleton comes with the `ClassLoader` implementation for loading
PHP 5.3 classes.

    <?php
    // lib/MyNewProject/TestClass.php
    
    namespace MyNewProject;

    class TestClass
    {
    }

## Load Classes

Now to load the above class we need to register the class loader:

    require_once 'lib/MyNewProject/ClassLoader.php';

    $classLoader = new \MyNewProject\ClassLoader('MyNewProject');
    $classLoader->register();

Now you can use the classes and they will be loaded:

    $test = new \MyNewProject\TestClass();