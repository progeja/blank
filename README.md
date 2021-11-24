# Blank

## Description 
First base structure.
Blank project folder structure for starting new PHP projects.


Includes:
- .gitignore/.gitattributes
- .editorconfig
- composer.json
- phpunit.xml

Gitignore file contains options for Composer and PHPStorm.
Editorconfig has default settings for PHP project files.

"docs/" folder for detailed Documenting new project.

"app.php" and "src/" folder for application code.

## Beginning new project

First install composer package

``composer create-project progeja/blank APP-FOLDER-NAME``

After this you can change project name and namespace in:
- ``composer.json`` ("name" and "Autoload">"psr-4")
- ``phpunit.xml`` ("testsuite" "name" value)

Open folder with PHPStorm and you're ready to go ...

