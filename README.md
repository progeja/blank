# Blank

## Description

First base structure. Blank project folder structure for starting new PHP projects.

Includes:

- .gitignore/.gitattributes
- .editorconfig
- composer.json
- phpunit.xml

Gitignore file contains options for Composer and PHPStorm. Editorconfig has default settings for PHP project files.

"docs/" folder for detailed Documenting new project.

"app.php" and "src/" folder for application code.

## Beginning new project

First install composer package

``composer create-project progeja/blank <APP-FOLDER-NAME>``

After this open your newly created app folder, and then you can change project name and namespace in:

- ``composer.json`` ("name" and "Autoload">"psr-4")
- ``phpunit.xml`` ("testsuite" "name" value)

Change the values of the remaining options in ``composer.json`` to suit your needs. And of course, don't forget to update composer after changes.

``composer update``

Now open folder with PHPStorm and you're ready to go ...

