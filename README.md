# Ignore files
[![Build Status](https://travis-ci.org/bruli/ignore-files.svg?branch=master)](https://travis-ci.org/bruli/ignore-files)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bruli/ignore-files/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bruli/ignore-files/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/bruli/ignore-files/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/bruli/ignore-files/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/bruli/ignore-files/v/stable.svg)](https://packagist.org/packages/bruli/ignore-files) [![Total Downloads](https://poser.pugx.org/bruli/ignore-files/downloads)](https://packagist.org/packages/bruli/ignore-files) [![Latest Unstable Version](https://poser.pugx.org/bruli/ignore-files/v/unstable.svg)](https://packagist.org/packages/bruli/ignore-files) [![License](https://poser.pugx.org/bruli/ignore-files/license.svg)](https://packagist.org/packages/bruli/ignore-files)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a88a81c4-a487-49a9-b869-ad07d1a9bf09/mini.png)](https://insight.sensiolabs.com/projects/a88a81c4-a487-49a9-b869-ad07d1a9bf09)

Library to ignore files from config file.

## Instalation.
```bash
$ composer require bruli/ignore-files
```
## Usage.
You must declare a "ignore.files" in your services file.
```xml
<service id="ignore.files" class="IgnoreFiles\IgnoreFiles">
```
```yaml
ignore.files:
    class: IgnoreFiles\IgnoreFiles
```
## Credits

* Pablo Braulio ([@brulics](https://twitter.com/brulics))
* [All contributors](https://github.com/bruli/ignore-files/graphs/contributors)

## License

Ignore-files is released under the MIT License. See the bundled LICENSE file for details.
