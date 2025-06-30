<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1751283860,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.17',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80405,
  'projectConfig' => '{parameters: {disallowedFunctionCalls: [{function: \'apache_setenv()\', message: might overwrite existing variables}, {function: \'dl()\', message: \'removed from most SAPIs, might load untrusted code\'}, {function: \'eval()\', message: \'eval is evil, please write more code and do not use eval()\'}, {function: \'create_function()\', message: \'the function is about as evil as using eval()\', errorTip: \'create_function() has been deprecated as of PHP 7.2, and removed as of PHP 8.0\'}, {function: \'extract()\', message: \'do not use extract() and especially not on untrusted data\'}, {function: \'posix_getpwuid()\', message: might reveal system user information}, {function: \'posix_kill()\', message: do not send signals to processes from the script}, {function: \'posix_mkfifo()\', message: do not create named pipes in the script}, {function: \'posix_mknod()\', message: do not create special files in the script}, {function: \'highlight_file()\', message: might reveal source code or config files}, {function: \'show_source()\', message: \'might reveal source code or config files (alias of highlight_file())\'}, {function: \'pfsockopen()\', message: \'use fsockopen() to create non-persistent socket connections\'}, {function: \'print_r()\', message: use some logger instead, allowParamsAnywhere: {2: true}}, {function: \'proc_nice()\', message: changes the priority of the current process}, {function: \'putenv()\', message: might overwrite existing variables}, {function: \'socket_create_listen()\', message: do not accept new socket connections in the PHP script}, {function: \'socket_listen()\', message: do not accept new socket connections in the PHP script}, {function: \'var_dump()\', message: use some logger instead}, {function: \'var_export()\', message: use some logger instead, allowParamsAnywhere: {2: true}}, {function: \'phpinfo()\', message: might reveal session id or other tokens in cookies, errorTip: see https://www.michalspacek.com/stealing-session-ids-with-phpinfo-and-how-to-stop-it and use e.g. spaze/phpinfo instead}, {function: \'exec()\'}, {function: \'passthru()\'}, {function: \'proc_open()\'}, {function: \'shell_exec()\'}, {function: \'system()\'}, {function: \'pcntl_exec()\'}, {function: \'popen()\'}, {function: \'md5()\', message: \'use hash() with at least SHA-256 for secure hash, or password_hash() for passwords\'}, {function: \'sha1()\', message: \'use hash() with at least SHA-256 for secure hash, or password_hash() for passwords\'}, {function: \'md5_file()\', message: \'use hash_file() with at least SHA-256 for secure hash\'}, {function: \'sha1_file()\', message: \'use hash_file() with at least SHA-256 for secure hash\'}, {function: \'hash()\', message: \'use hash() with at least SHA-256 for secure hash, or password_hash() for passwords\', allowExceptCaseInsensitiveParams: {1: md5}}, {function: \'hash()\', message: \'use hash() with at least SHA-256 for secure hash, or password_hash() for passwords\', allowExceptCaseInsensitiveParams: {1: sha1}}, {function: \'hash_file()\', message: \'use hash_file() with at least SHA-256 for secure hash, or password_hash() for passwords\', allowExceptCaseInsensitiveParams: {1: md5}}, {function: \'hash_file()\', message: \'use hash_file() with at least SHA-256 for secure hash, or password_hash() for passwords\', allowExceptCaseInsensitiveParams: {1: sha1}}, {function: \'hash_init()\', message: \'use hash_init() with at least SHA-256 for secure hash, or password_hash() for passwords\', allowExceptCaseInsensitiveParams: {1: md5}}, {function: \'hash_init()\', message: \'use hash_init() with at least SHA-256 for secure hash, or password_hash() for passwords\', allowExceptCaseInsensitiveParams: {1: sha1}}, {function: \'rand()\', message: \'it is not a cryptographically secure generator, use random_int() instead\'}, {function: \'mt_rand()\', message: \'it is not a cryptographically secure generator, use random_int() instead\'}, {function: \'lcg_value()\', message: \'it is not a cryptographically secure generator, use random_int() instead\'}, {function: \'uniqid()\', message: \'it is not a cryptographically secure generator, use random_bytes() instead\'}, {function: \'mysql_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'mysql_unbuffered_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'mysqli_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'mysqli_multi_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'mysqli_real_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'in_array()\', message: set the third parameter $strict to `true` to also check the types to prevent type juggling bugs, allowParamsAnywhere: {3: true}}, {function: \'htmlspecialchars()\', message: set the $flags parameter to `ENT_QUOTES` to also convert single quotes to entities to prevent some HTML injection bugs, allowParamFlagsAnywhere: {2: 3}}], disallowedMethodCalls: [{function: \'mysqli::query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'mysqli::multi_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}, {function: \'mysqli::real_query()\', message: \'use PDO::prepare() with variable binding/parametrized queries to prevent SQL Injection vulnerability\'}], featureToggles: {bleedingEdge: true, checkParameterCastableToNumberFunctions: true, skipCheckGenericClasses: {_prevent_merging: true}, stricterFunctionMap: true, reportPreciseLineForUnusedFunctionParameter: true, internalTag: true, newStaticInAbstractClassStaticMethod: true}, type_coverage: {return: 100, param: 100, property: 100, constant: 100}, type_perfect: {null_over_false: true, no_mixed_property: true, no_mixed_caller: true, narrow_param: true, narrow_return: true}, strictRules: {allRules: false, disallowedLooseComparison: true, booleansInConditions: true, uselessCast: true, requireParentConstructorCall: true, disallowedBacktick: true, disallowedEmpty: true, disallowedImplicitArrayCreation: true, disallowedShortTernary: true, overwriteVariablesWithLoop: true, closureUsesThis: true, matchingInheritedMethodNames: true, numericOperandsInArithmeticOperators: true, strictFunctionCalls: true, dynamicCallOnStaticMethod: true, switchConditionsMatchingType: true, noVariableVariables: true, strictArrayFilter: true, illegalConstructorMethodCall: true}, treatPhpDocTypesAsCertain: true, paths: [src, build], level: 8, tmpDir: storage/framework/cache/phpstan}, rules: [Airlst\\PhpstanConfig\\Phpstan\\DisallowedLaravelDieDumpFunctionsRule, Airlst\\PhpstanConfig\\Phpstan\\DisallowMutableDatetimeRule]}',
  'analysedPaths' => 
  array (
    0 => 'src',
    1 => 'build',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/composer.lock' => '3ff286262e11d24a355e77c7322d39b082ca9f26',
  ),
  'composerInstalled' => 
  array (
    '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'airlst/php-cs-fixer-config' => 
        array (
          'pretty_version' => '3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'c31337061d69c8c163577972b6ff3b59f8931347',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../airlst/php-cs-fixer-config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'airlst/phpstan-config' => 
        array (
          'pretty_version' => 'dev-master',
          'version' => 'dev-master',
          'reference' => '7ccab87d4ebbaff821984032314b2f998dfbf885',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../airlst/phpstan-config',
          'aliases' => 
          array (
            0 => '9999999-dev',
          ),
          'dev_requirement' => true,
        ),
        'airlst/rector-config' => 
        array (
          'pretty_version' => 'dev-master',
          'version' => 'dev-master',
          'reference' => '3b9c36dcd6abd7e5f5932f152496814ecfe387d7',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../airlst/rector-config',
          'aliases' => 
          array (
            0 => '9999999-dev',
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.12.3',
          'version' => '0.12.3.0',
          'reference' => '866551da34e9a618e64a819ee1e01c20d8a588ba',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cebe/php-openapi' => 
        array (
          'pretty_version' => '1.8.0',
          'version' => '1.8.0.0',
          'reference' => '893ab104be1f5dfe5a39766703f583584e43c6e1',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../cebe/php-openapi',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'clue/ndjson-react' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '392dc165fce93b5bb5c637b67e59619223c931b0',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../clue/ndjson-react',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.3',
          'version' => '3.4.3.0',
          'reference' => '4313d26ada5e0c4edfbd1dc481a92ff7bff91f12',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'crescat-io/saloon-sdk-generator' => 
        array (
          'pretty_version' => 'v1.10.0',
          'version' => '1.10.0.0',
          'reference' => 'f375999f00bb0b07fe85f2d2fefc961fb05657c6',
          'type' => 'project',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../crescat-io/saloon-sdk-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '5817d0659c5b50c9b950feb9af7b9668e2c436bc',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'driftingly/rector-laravel' => 
        array (
          'pretty_version' => '2.0.5',
          'version' => '2.0.5.0',
          'reference' => 'ac61de4f267c23249d175d7fc9149fd01528567d',
          'type' => 'rector-extension',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../driftingly/rector-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/composer-normalize' => 
        array (
          'pretty_version' => '2.47.0',
          'version' => '2.47.0.0',
          'reference' => 'ed24b9f8901f8fbafeca98f662eaca39427f0544',
          'type' => 'composer-plugin',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ergebnis/composer-normalize',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/json' => 
        array (
          'pretty_version' => '1.4.0',
          'version' => '1.4.0.0',
          'reference' => '7656ac2aa6c2ca4408f96f599e9a17a22c464f69',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ergebnis/json',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/json-normalizer' => 
        array (
          'pretty_version' => '4.9.0',
          'version' => '4.9.0.0',
          'reference' => 'cc4dcf3890448572a2d9bea97133c4d860e59fb1',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ergebnis/json-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/json-pointer' => 
        array (
          'pretty_version' => '3.6.0',
          'version' => '3.6.0.0',
          'reference' => '4fc85d8edb74466d282119d8d9541ec7cffc0798',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ergebnis/json-pointer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/json-printer' => 
        array (
          'pretty_version' => '3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'ced41fce7854152f0e8f38793c2ffe59513cdd82',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ergebnis/json-printer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/json-schema-validator' => 
        array (
          'pretty_version' => '4.4.0',
          'version' => '4.4.0.0',
          'reference' => '85f90c81f718aebba1d738800af83eeb447dc7ec',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ergebnis/json-schema-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'evenement/evenement' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '0a16b0d71ab13284339abb99d9d2bd813640efbc',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../evenement/evenement',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => '8520451a140d3f46ac33042715115e290cf5785f',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.3',
          'version' => '2.18.3.0',
          'reference' => '59a123a3d459c5a23055802237cb317f609867e5',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.75.0',
          'version' => '3.75.0.0',
          'reference' => '399a128ff2fdaf4281e4e79b755693286cdf325c',
          'type' => 'application',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.9.3',
          'version' => '7.9.3.0',
          'reference' => '7b2f29fe81dc4da0ca0ea7d42107a0845946ea77',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '7c69f28996b0a6920945dd20b3857e499d9ca96c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'reference' => 'c2270caaabe631b3b44c85f99e5a04bbb8060d16',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.4',
          'version' => '1.0.4.0',
          'reference' => '30e286560c137526eccd4ce21b2de477ab0676d2',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v10.48.29',
          ),
        ),
        'justinrainbow/json-schema' => 
        array (
          'pretty_version' => '6.4.2',
          'version' => '6.4.2.0',
          'reference' => 'ce1fd2d47799bb60668643bc6220f6278a4c1d02',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../justinrainbow/json-schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel-zero/phar-updater' => 
        array (
          'pretty_version' => 'v1.4.2',
          'version' => '1.4.2.0',
          'reference' => '131bc5e7477c9233fab8087f7d0bbb234616b417',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../laravel-zero/phar-updater',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v10.48.29',
          'version' => '10.48.29.0',
          'reference' => '8f7f9247cb8aad1a769d6b9815a6623d89b46b47',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.1.25',
          'version' => '0.1.25.0',
          'reference' => '7b4029a84c37cb2725fc7f011586e2997040bc95',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.7',
          'version' => '1.3.7.0',
          'reference' => '4f48ade902b94323ca3be7646db16209ec76be3d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.7.0',
          'version' => '2.7.0.0',
          'reference' => '6fbb36d44824ed4091adbcf4c7d4a3923cdb3405',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.0',
          'version' => '3.30.0.0',
          'reference' => '2203e3151755d874bb2943649dae1eb8533ac93e',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.0',
          'version' => '3.30.0.0',
          'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'localheinz/diff' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'ec413943c2b518464865673fd5b38f7df867a010',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../localheinz/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'marc-mabe/php-enum' => 
        array (
          'pretty_version' => 'v4.7.1',
          'version' => '4.7.1.0',
          'reference' => '7159809e5cfa041dca28e61f7f7ae58063aae8ed',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../marc-mabe/php-enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.1',
          'version' => '1.13.1.0',
          'reference' => '1720ddd719e16cf0db4eb1c6eca108031636d46c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.73.0',
          'version' => '2.73.0.0',
          'reference' => '9228ce90e1035ff2f0db84b40ec2e023ed802075',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nette/php-generator' => 
        array (
          'pretty_version' => 'v4.1.8',
          'version' => '4.1.8.0',
          'reference' => '42806049a7774a2bd316c958f5dcf01c6b5c56fa',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nette/php-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.7',
          'version' => '4.0.7.0',
          'reference' => 'e67c4061eb40b9c113b218214e42cb5a0dda28f2',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.5.0',
          'version' => '5.5.0.0',
          'reference' => 'ae59794362fe85e051a58ad36b289443f57be7a9',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v7.12.0',
          'version' => '7.12.0.0',
          'reference' => '995245421d3d7593a6960822063bdba4f5d7cf1a',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.17.0',
          'version' => '1.17.0.0',
          'reference' => '5369ef84d8142c1d87e4ec278711d4ece3cbf301',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas' => 
        array (
          'pretty_version' => 'v8.12.0',
          'version' => '8.12.0.0',
          'reference' => '76385dfcf96efae5f8533a4d522d14c3c946ac5a',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../orchestra/canvas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas-core' => 
        array (
          'pretty_version' => 'v8.10.2',
          'version' => '8.10.2.0',
          'reference' => '3af8fb6b1ebd85903ba5d0e6df1c81aedacfedfc',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../orchestra/canvas-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/sidekick' => 
        array (
          'pretty_version' => 'v1.2.13',
          'version' => '1.2.13.0',
          'reference' => 'aa41994f872cc49a420da42f50886605c0d85f15',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../orchestra/sidekick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v8.36.0',
          'version' => '8.36.0.0',
          'reference' => '1e765c32c37ceb1acdf189c2804fa1ed738f451c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v8.38.0',
          'version' => '8.38.0.0',
          'reference' => 'dc71c91df375b192f7e4b1ea35656a6a9d1f1531',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/workbench' => 
        array (
          'pretty_version' => 'v8.17.5',
          'version' => '8.17.5.0',
          'reference' => '15a753d0c5c63a54c282765310dbb590ffd61348',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../orchestra/workbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.3',
          'version' => '1.9.3.0',
          'reference' => 'e3fac8b24f56113f7cb96af14958c0dd16330f54',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/extension-installer' => 
        array (
          'pretty_version' => '1.4.3',
          'version' => '1.4.3.0',
          'reference' => '85e90b3942d06b2326fba0403ec24fe912372936',
          'type' => 'composer-plugin',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpstan/extension-installer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.17',
          'version' => '2.1.17.0',
          'reference' => '89b5ef665716fa2a52ecd2633f21007a6a349053',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-deprecation-rules' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '468e02c9176891cc901143da118f09dc9505fc2f',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpstan/phpstan-deprecation-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-strict-rules' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '3e139cbe67fafa3588e1dbe27ca50f31fdb6236a',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpstan/phpstan-strict-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.16',
          'version' => '10.1.16.0',
          'reference' => '7e308268858ed6baedc8704a304727d20bc07c77',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'a95037b6d9e608ba092da1b23931e537cadc3c3c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '0c7b06ff49e3d5072f057eb1fa59258bf287a748',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.5.47',
          'version' => '10.5.47.0',
          'reference' => '3637b3e50d32ab3a0d1a33b3b6177169ec3d95a3',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.9',
          'version' => '0.12.9.0',
          'reference' => '1b801844becfe648985372cb4b12ad6840245ace',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.0',
          'version' => '4.9.0.0',
          'reference' => '4e0e23cc785f0724a0e838279a9eb03f28b092a0',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/cache' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd47c472b64aa5608225f47965a484b75c7817d5b',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/child-process' => 
        array (
          'pretty_version' => 'v0.6.6',
          'version' => '0.6.6.0',
          'reference' => '1721e2b93d89b745664353b9cfc8f155ba8a6159',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/child-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/dns' => 
        array (
          'pretty_version' => 'v1.13.0',
          'version' => '1.13.0.0',
          'reference' => 'eb8ae001b5a455665c89c1df97f6fb682f8fb0f5',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/event-loop' => 
        array (
          'pretty_version' => 'v1.5.0',
          'version' => '1.5.0.0',
          'reference' => 'bbe0bd8c51ffc05ee43f1729087ed3bdf7d53354',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '8a164643313c71354582dc850b42b33fa12a4b63',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/socket' => 
        array (
          'pretty_version' => 'v1.16.0',
          'version' => '1.16.0.0',
          'reference' => '23e4ff33ea3e160d2d1f59a0e6050e4b0fb0eac1',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/stream' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '1e5b0acb8fe55143b5b426817155190eb6f5b18d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../react/stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rector/rector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'd513dea45a94394b660e15c155d1fa27826f8e30',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../rector/rector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rector/swiss-knife' => 
        array (
          'pretty_version' => '2.3.1',
          'version' => '2.3.1.0',
          'reference' => '2e9df169ee5cc5b5f996907cc4f83fdf7c9356b5',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../rector/swiss-knife',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rector/type-perfect' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '098eea3fe0e884fe281d939e5e4142151ab67368',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../rector/type-perfect',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '4.9.0',
          ),
        ),
        'saloonphp/laravel-plugin' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '29f653b3568359bbb867823b83b5efba3c26873c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../saloonphp/laravel-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'saloonphp/saloon' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'b36be6b45e2170e1325cf034bc378e31318afe11',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../saloonphp/saloon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'c34583b87e7b7a8055bf6c450c2c77ce32a24084',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => 'a18251eb0b7a2dcd2f7aa3d6078b18545ef0558e',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '68ff824baeae169ec9f2137158ee529584553799',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => 'c41e007b4b62af48218231d6c2275e4c9b975b2e',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.1.0',
          'version' => '6.1.0.0',
          'reference' => '8074dbcd93529b357029f5cc5058fd3e43666984',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.1.2',
          'version' => '5.1.2.0',
          'reference' => '955288482d97c19a372d3f31006ab3f37da47adf',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '987bafff24ecc4c9ac418cab1145b96dd6e9cbd9',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '856e7f6a75a84e339195d48c556f23be2ebf75d0',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spaze/phpstan-disallowed-calls' => 
        array (
          'pretty_version' => 'v4.5.0',
          'version' => '4.5.0.0',
          'reference' => '1c5e6996bd75a1460f5e2683fc4294665b37bee2',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../spaze/phpstan-disallowed-calls',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => '9056771b8eca08d026cd3280deeec3cfd99c4d93',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => 'b088e0b175c30b4e06d8085200fa465b586f44fa',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => '497f73ac996a598c92409b44ac43b6690c4f666d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => 'b8dce482de9d7c9fe2891155035a7248ab5c7fdb',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.4.17',
          'version' => '6.4.17.0',
          'reference' => '1d0e8266248c5d9ab6a87e3789e6dc482af3c9c7',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => '452d19f945ee41345fd8a50c18b60783546b7bd3',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => '2bb2cba685aabd859f22cf6946554e8e7f3c329a',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => 'a480322ddf8e54de262c9bca31fdcbe26b553de5',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.4.21',
          'version' => '6.4.21.0',
          'reference' => 'fec8aa5231f3904754955fad33c2db50594d22d1',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => 'afb9a8038025e5dbc657378bfab9198d75f10fca',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.32.0',
          'version' => '1.32.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.4.20',
          'version' => '6.4.20.0',
          'reference' => 'e2a61c16af36c9a07e5c9906498b73e091949a20',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.4.22',
          'version' => '6.4.22.0',
          'reference' => '1f5234e8457164a3a0038a4c0a4ba27876a9c670',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'f021b05a130d35510bd6b25fe9053c2a8a15d5d4',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => '5a49289e2b308214c8b9c2fda4ea454d8b8ad7cd',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => 'f3570b8c61ca887a9e2938e85cb6458515d2b125',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => 'de8afa521e04a5220e9e58a1dc99971ab7cac643',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'df210c7a2573f1913b2d17cc95f90f53a73d8f7d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => '9c8592da78d7ee6af52011eef593350d87e814c0',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => 'd55b1834cdbfcc31bc2cd7e095ba5ed9a88f6600',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v6.4.23',
          'version' => '6.4.23.0',
          'reference' => '93e29e0deb5f1b2e360adfb389a20d25eb81a27b',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tomasvotruba/type-coverage' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'd033429580f2c18bda538fa44f2939236a990e0c',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../tomasvotruba/type-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar:///Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/jantinnerezo/Projects/AirLST/Packages/sdk-php/sdk-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'herd',
    25 => 'iconv',
    26 => 'igbinary',
    27 => 'imagick',
    28 => 'imap',
    29 => 'intl',
    30 => 'json',
    31 => 'ldap',
    32 => 'libxml',
    33 => 'mbstring',
    34 => 'mongodb',
    35 => 'mysqli',
    36 => 'mysqlnd',
    37 => 'openssl',
    38 => 'pcntl',
    39 => 'pcre',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'random',
    47 => 'readline',
    48 => 'redis',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tokenizer',
    61 => 'xml',
    62 => 'xmlreader',
    63 => 'xmlwriter',
    64 => 'xsl',
    65 => 'zip',
    66 => 'zlib',
    67 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'build/Requests/Guests/GetGuests.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function array_filter() requires parameter #2 to be passed to avoid loose comparison semantics.',
       'file' => 'build/Requests/Guests/GetGuests.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => 'build/Requests/Guests/GetGuests.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'arrayFilter.strict',
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
  'src/Commands/BuildCommand.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $filename of function file_get_contents expects string, array|bool|string|null given.',
       'file' => 'src/Commands/BuildCommand.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => 'src/Commands/BuildCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Mixed variable in a `\\Illuminate\\Support\\Arr::first($file->getNamespaces())->...()` can skip important errors. Make sure the type is known',
       'file' => 'src/Commands/BuildCommand.php',
       'line' => 110,
       'canBeIgnored' => true,
       'filePath' => 'src/Commands/BuildCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 110,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'typePerfect.noMixedMethodCaller',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Mixed variable in a `\\Illuminate\\Support\\Arr::first($file->getClasses())->...()` can skip important errors. Make sure the type is known',
       'file' => 'src/Commands/BuildCommand.php',
       'line' => 111,
       'canBeIgnored' => true,
       'filePath' => 'src/Commands/BuildCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 111,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'typePerfect.noMixedMethodCaller',
       'metadata' => 
      array (
      ),
    )),
  ),
  'src/CoreApi.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Mixed variable in a `str($this->baseUrl)->...()` can skip important errors. Make sure the type is known',
       'file' => 'src/CoreApi.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'src/CoreApi.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'typePerfect.noMixedMethodCaller',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Mixed variable in a `str($this->baseUrl)->...()` can skip important errors. Make sure the type is known',
       'file' => 'src/CoreApi.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => 'src/CoreApi.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'typePerfect.noMixedMethodCaller',
       'metadata' => 
      array (
      ),
    )),
  ),
  'src/Generators/ConnectorGenerator.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $value of static method Crescat\\SaloonSdkGenerator\\Helpers\\NameHelper::connectorClassName() expects string, string|null given.',
       'file' => 'src/Generators/ConnectorGenerator.php',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => 'src/Generators/ConnectorGenerator.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 66,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  'src/Generators/ResourceGenerator.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $value of static method Crescat\\SaloonSdkGenerator\\Helpers\\NameHelper::resourceClassName() expects string, string|null given.',
       'file' => 'src/Generators/ResourceGenerator.php',
       'line' => 117,
       'canBeIgnored' => true,
       'filePath' => 'src/Generators/ResourceGenerator.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 116,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'linesToIgnore' => array (
  'src/Commands/BuildCommand.php' => 
  array (
    'src/Commands/BuildCommand.php' => 
    array (
      47 => NULL,
      110 => NULL,
      111 => NULL,
    ),
  ),
  'src/CoreApi.php' => 
  array (
    'src/CoreApi.php' => 
    array (
      35 => NULL,
      46 => NULL,
    ),
  ),
  'src/Generators/ConnectorGenerator.php' => 
  array (
    'src/Generators/ConnectorGenerator.php' => 
    array (
      66 => NULL,
    ),
  ),
  'src/Generators/ResourceGenerator.php' => 
  array (
    'src/Generators/ResourceGenerator.php' => 
    array (
      117 => NULL,
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'build/AirLST.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\AirLST',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\AirLST',
        1 => 'resolveBaseUrl',
        2 => 'AirLST\\SdkPhp\\Client\\AirLST',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      5 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      6 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      7 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      8 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/BookableGroups/DeleteBookablesReservation.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 3,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/BookableGroups/GetAvailabilities.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 3,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/BookableGroups/ListBookableGroups.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/BookableGroups/ListBookablesForGroup.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/BookableGroups/StoreBookablesReservations.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Company/GetCompanyEvents.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Company\\GetCompanyEvents',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Requests\\Company\\GetCompanyEvents',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Client\\Requests\\Company\\GetCompanyEvents',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Contacts/GetContactDetails.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactDetails',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Contacts/GetContactEvents.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactEvents',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Contacts/ValidateContactCode.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Documents/GetEventDocuments.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetEventDocuments',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Documents/GetGuestsDocumentsUrls.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetGuestsDocumentsUrls',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Emails/GetEmailTemplates.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Emails\\GetEmailTemplates',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Events/GetEvent.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetEvent',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Events/GetSignedStorageUrl.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetSignedStorageUrl',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Events/SendEmailTemplate.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\SendEmailTemplate',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/ArchiveGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/CheckinGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/CreateCompanionGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/CreateGuests.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/CreateRecommendedGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/CreateTemporaryUpload.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/DeleteGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/GetGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/GetGuestAttachmentDownloadUrl.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 3,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/GetGuestAttachments.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/GetGuests.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 7,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/RestoreGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/UpdateGuest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/UpdateGuestEmailOptInStatus.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Requests/Guests/ValidateGuestCode.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Client\\Resource',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/BookableGroups.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
        1 => 'getAvailabilities',
        2 => 'mixed|mixed|mixed',
        3 => 22,
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
        1 => 'deleteBookablesReservation',
        2 => 'mixed|mixed|mixed',
        3 => 32,
      ),
      2 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
        1 => 'listBookableGroups',
        2 => 'mixed',
        3 => 40,
      ),
      3 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
        1 => 'listBookablesForGroup',
        2 => 'mixed|mixed',
        3 => 49,
      ),
      4 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
        1 => 'storeBookablesReservations',
        2 => 'mixed|mixed',
        3 => 58,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
      ),
      2 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
      ),
      3 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
      ),
      4 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 3,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/Company.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Company\\GetCompanyEvents',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/Contacts.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Contacts',
        1 => 'getContactEvents',
        2 => 'mixed',
        3 => 18,
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Contacts',
        1 => 'getContactDetails',
        2 => 'mixed',
        3 => 26,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactEvents',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactDetails',
      ),
      2 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/Documents.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Documents',
        1 => 'getGuestsDocumentsUrls',
        2 => 'mixed|mixed',
        3 => 18,
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Documents',
        1 => 'getEventDocuments',
        2 => 'mixed',
        3 => 26,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetGuestsDocumentsUrls',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetEventDocuments',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/Emails.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Emails',
        1 => 'getEmailTemplates',
        2 => 'mixed',
        3 => 16,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Emails\\GetEmailTemplates',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/Events.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Events',
        1 => 'sendEmailTemplate',
        2 => 'mixed|mixed',
        3 => 19,
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Events',
        1 => 'getSignedStorageUrl',
        2 => 'mixed',
        3 => 27,
      ),
      2 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Events',
        1 => 'getEvent',
        2 => 'mixed',
        3 => 35,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\SendEmailTemplate',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetSignedStorageUrl',
      ),
      2 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetEvent',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'build/Resource/Guests.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'archiveGuest',
        2 => 'mixed|mixed',
        3 => 31,
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'checkinGuest',
        2 => 'mixed|mixed',
        3 => 40,
      ),
      2 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'getGuest',
        2 => 'mixed|mixed',
        3 => 49,
      ),
      3 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'updateGuest',
        2 => 'mixed|mixed',
        3 => 58,
      ),
      4 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'deleteGuest',
        2 => 'mixed|mixed',
        3 => 67,
      ),
      5 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'getGuestAttachmentDownloadUrl',
        2 => 'mixed|mixed|mixed',
        3 => 77,
      ),
      6 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'getGuestAttachments',
        2 => 'mixed|mixed',
        3 => 86,
      ),
      7 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'getGuests',
        2 => 'mixed|int|null|int|null|null|string|null|string|null|string|int|null',
        3 => 100,
      ),
      8 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'createGuests',
        2 => 'mixed',
        3 => 115,
      ),
      9 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'restoreGuest',
        2 => 'mixed|mixed',
        3 => 124,
      ),
      10 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'createCompanionGuest',
        2 => 'mixed|mixed',
        3 => 133,
      ),
      11 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'createRecommendedGuest',
        2 => 'mixed|mixed',
        3 => 142,
      ),
      12 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'updateGuestEmailOptInStatus',
        2 => 'mixed|mixed',
        3 => 151,
      ),
      13 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'validateGuestCode',
        2 => 'mixed',
        3 => 159,
      ),
      14 => 
      array (
        0 => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
        1 => 'createTemporaryUpload',
        2 => 'mixed|mixed',
        3 => 168,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
      ),
      2 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
      ),
      3 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
      ),
      4 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
      ),
      5 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
      ),
      6 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
      ),
      7 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
      ),
      8 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
      ),
      9 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
      ),
      10 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
      ),
      11 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
      ),
      12 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
      ),
      13 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
      ),
      14 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => 
        array (
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      7 => 
      array (
        0 => 7,
        1 => 
        array (
        ),
      ),
      8 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      9 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      11 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      13 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      5 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      6 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      7 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      8 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      9 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      10 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      11 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      12 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      13 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      14 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Commands/BuildCommand.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::option',
        1 => 'string|null',
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::argument',
        1 => 'string|null',
      ),
      2 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::error',
        1 => 'string',
      ),
      3 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::argument',
        1 => 'string|null',
      ),
      4 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::error',
        1 => 'string',
      ),
      5 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::error',
        1 => 'string',
      ),
      6 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::dumpGeneratedFiles',
        1 => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\GeneratedCode',
      ),
      7 => 
      array (
        0 => 'Crescat\\SaloonSdkGenerator\\CodeGenerator::run',
        1 => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
      ),
      8 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::info',
        1 => 'string',
      ),
      9 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::info',
        1 => 'string',
      ),
      10 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::dumpToFile',
        1 => 'Nette\\PhpGenerator\\PhpFile',
      ),
      11 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::info',
        1 => 'string',
      ),
      12 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::dumpToFile',
        1 => 'Nette\\PhpGenerator\\PhpFile',
      ),
      13 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::info',
        1 => 'string',
      ),
      14 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::dumpToFile',
        1 => 'Nette\\PhpGenerator\\PhpFile',
      ),
      15 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::info',
        1 => 'string',
      ),
      16 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::dumpToFile',
        1 => 'Nette\\PhpGenerator\\PhpFile',
      ),
      17 => 
      array (
        0 => 'Illuminate\\Support\\Stringable::replace',
        1 => 'string|string',
      ),
      18 => 
      array (
        0 => 'Illuminate\\Support\\Stringable::replace',
        1 => 'string|string',
      ),
      19 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::error',
        1 => 'unknown_types',
      ),
      20 => 
      array (
        0 => 'AirLST\\SdkPhp\\Commands\\BuildCommand::line',
        1 => 'unknown_types',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Contracts/EmailResourceContract.php' => 
  array (
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Contracts/EventResourceContract.php' => 
  array (
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Contracts/GuestResourceContract.php' => 
  array (
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/CoreApi.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\CoreApi',
    ),
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\CoreApi',
        1 => 'setBaseUrl',
        2 => 'string',
        3 => 23,
      ),
      1 => 
      array (
        0 => 'AirLST\\SdkPhp\\CoreApi',
        1 => 'guest',
        2 => 'string',
        3 => 33,
      ),
      2 => 
      array (
        0 => 'AirLST\\SdkPhp\\CoreApi',
        1 => 'email',
        2 => 'string',
        3 => 44,
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      5 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Generators/ConnectorGenerator.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\ClassType',
        ),
        1 => 'setExtends',
        2 => 29,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\ClassLike',
        ),
        1 => 'addComment',
        2 => 32,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\ClassLike',
        ),
        1 => 'addComment',
        2 => 36,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PhpFile',
        ),
        1 => 'setStrictTypes',
        2 => 40,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PromotedParameter',
        ),
        1 => 'setReadOnly',
        2 => 43,
      ),
      5 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\Method',
        ),
        1 => 'setBody',
        2 => 52,
      ),
      6 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\Method',
        ),
        1 => 'setBody',
        2 => 56,
      ),
      7 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PhpNamespace',
        ),
        1 => 'addUse',
        2 => 75,
      ),
      8 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\Method',
        ),
        1 => 'setBody',
        2 => 80,
      ),
      9 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PhpNamespace',
        ),
        1 => 'add',
        2 => 86,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ConnectorGenerator::generateConnectorClass',
        1 => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
      ),
      1 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::setExtends',
        1 => 'string',
      ),
      2 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addComment',
        1 => 'unknown_types',
      ),
      3 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addComment',
        1 => 'unknown_types',
      ),
      4 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addMethod',
        1 => 'string',
      ),
      5 => 
      array (
        0 => 'Nette\\PhpGenerator\\PromotedParameter::setType',
        1 => 'string',
      ),
      6 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::addPromotedParameter',
        1 => 'string',
      ),
      7 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setBody',
        1 => 'unknown_types',
      ),
      8 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setReturnType',
        1 => 'string',
      ),
      9 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addMethod',
        1 => 'string',
      ),
      10 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setBody',
        1 => 'string',
      ),
      11 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setReturnType',
        1 => 'string',
      ),
      12 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addMethod',
        1 => 'string',
      ),
      13 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::addUse',
        1 => 'string',
      ),
      14 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpFile::addNamespace',
        1 => 'string',
      ),
      15 => 
      array (
        0 => 'Illuminate\\Support\\Collection::map',
        1 => 'callable',
      ),
      16 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::addUse',
        1 => 'unknown_types',
      ),
      17 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setBody',
        1 => 'unknown_types',
      ),
      18 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setReturnType',
        1 => 'unknown_types',
      ),
      19 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addMethod',
        1 => 'string',
      ),
      20 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::add',
        1 => 'Nette\\PhpGenerator\\ClassType',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Generators/ResourceGenerator.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'dump',
        1 => 68,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\ClassType',
        ),
        1 => 'setExtends',
        2 => 36,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PhpFile',
        ),
        1 => 'setStrictTypes',
        2 => 39,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PhpNamespace',
        ),
        1 => 'addUse',
        2 => 53,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\Method',
        ),
        1 => 'setReturnType',
        2 => 75,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\Method',
        ),
        1 => 'setBody',
        2 => 101,
      ),
      5 => 
      array (
        0 => 
        array (
          0 => 'Nette\\PhpGenerator\\PhpNamespace',
        ),
        1 => 'add',
        2 => 104,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\ClassMethod\\PublicClassMethodParamTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator',
        1 => 'generateResourceClass',
        2 => 'string|array',
        3 => 32,
      ),
    ),
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator::generateResourceClasses',
        1 => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
      ),
      1 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::setExtends',
        1 => 'unknown_types',
      ),
      2 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::addUse',
        1 => 'unknown_types',
      ),
      3 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpFile::addNamespace',
        1 => 'unknown_types',
      ),
      4 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::addUse',
        1 => 'unknown_types',
      ),
      5 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::addUse',
        1 => 'string',
      ),
      6 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addMethod',
        1 => 'string',
      ),
      7 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::addComment',
        1 => 'string',
      ),
      8 => 
      array (
        0 => 'Nette\\PhpGenerator\\ClassType::addMethod',
        1 => 'string',
      ),
      9 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setReturnType',
        1 => 'string',
      ),
      10 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator::addPropertyToMethod',
        1 => 'Nette\\PhpGenerator\\Method|Crescat\\SaloonSdkGenerator\\Data\\Generator\\Parameter',
      ),
      11 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator::addPropertyToMethod',
        1 => 'Nette\\PhpGenerator\\Method|Crescat\\SaloonSdkGenerator\\Data\\Generator\\Parameter',
      ),
      12 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator::addPropertyToMethod',
        1 => 'Nette\\PhpGenerator\\Method|Crescat\\SaloonSdkGenerator\\Data\\Generator\\Parameter',
      ),
      13 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::setBody',
        1 => 'unknown_types',
      ),
      14 => 
      array (
        0 => 'Nette\\PhpGenerator\\PhpNamespace::add',
        1 => 'Nette\\PhpGenerator\\ClassType',
      ),
      15 => 
      array (
        0 => 'Illuminate\\Support\\Collection::groupBy',
        1 => 'callable',
      ),
      16 => 
      array (
        0 => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator::generateResourceClass',
        1 => 'unknown_types',
      ),
      17 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::addParameter',
        1 => 'string',
      ),
      18 => 
      array (
        0 => 'Nette\\PhpGenerator\\Method::addComment',
        1 => 'string',
      ),
      19 => 
      array (
        0 => 'Nette\\PhpGenerator\\Parameter::setType',
        1 => 'string',
      ),
      20 => 
      array (
        0 => 'Nette\\PhpGenerator\\Parameter::setDefaultValue',
        1 => 'null',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Email/ListRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Requests\\Email\\ListRequest',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Requests\\Email\\ListRequest',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Email/SendRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Email\\SendRequest',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Event/GetRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Event\\GetRequest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Event/ListRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Requests\\Event\\ListRequest',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Requests\\Event\\ListRequest',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Guest/CreateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Guest\\CreateRequest',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Requests\\Guest\\CreateRequest',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Requests\\Guest\\CreateRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Guest/GetRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Guest\\GetRequest',
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Guest/ListRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Guest\\ListRequest',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Requests\\Guest\\ListRequest',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Requests\\Guest\\ListRequest',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Guest/UpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Guest\\UpdateRequest',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Requests/Guest/ValidateCodeRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'AirLST\\SdkPhp\\Requests\\Guest\\ValidateCodeRequest',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'AirLST\\SdkPhp\\Requests\\Guest\\ValidateCodeRequest',
        1 => 'resolveEndpoint',
        2 => 'AirLST\\SdkPhp\\Requests\\Guest\\ValidateCodeRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Resources/EmailResource.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Email\\ListRequest',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Email\\SendRequest',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Resources/EventResource.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Event\\ListRequest',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Event\\GetRequest',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
  'src/Resources/GuestResource.php' => 
  array (
    'Rector\\TypePerfect\\Collector\\MethodCall\\MethodCallArgTypesCollector' => 
    array (
      0 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Guest\\ValidateCodeRequest',
      ),
      1 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Guest\\ListRequest',
      ),
      2 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Guest\\GetRequest',
      ),
      3 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Guest\\CreateRequest',
      ),
      4 => 
      array (
        0 => 'Saloon\\Http\\Connector::send',
        1 => 'AirLST\\SdkPhp\\Requests\\Guest\\UpdateRequest',
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ConstantTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\DeclareCollector' => 
    array (
      0 => true,
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ParamTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\PropertyTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 
        array (
        ),
      ),
    ),
    'TomasVotruba\\TypeCoverage\\Collectors\\ReturnTypeDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 1,
        1 => 
        array (
        ),
      ),
    ),
  ),
); },
	'dependencies' => array (
  'build/AirLST.php' => 
  array (
    'fileHash' => '6f65bdd62e29e284bcbc0aa6cc8c03526ff8c6e3',
    'dependentFiles' => 
    array (
    ),
  ),
  'build/Requests/BookableGroups/DeleteBookablesReservation.php' => 
  array (
    'fileHash' => 'e92a77c3744a27efc7fe3062f5621f5fca7eb409',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/BookableGroups.php',
    ),
  ),
  'build/Requests/BookableGroups/GetAvailabilities.php' => 
  array (
    'fileHash' => '379780ecddeed5bf19c7f66065c4e726fab0805f',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/BookableGroups.php',
    ),
  ),
  'build/Requests/BookableGroups/ListBookableGroups.php' => 
  array (
    'fileHash' => '23dcc2adb2fb6697199c67d1ea8562a8c3f228aa',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/BookableGroups.php',
    ),
  ),
  'build/Requests/BookableGroups/ListBookablesForGroup.php' => 
  array (
    'fileHash' => '391568c4855afe6fe977a017c69db3da879c1322',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/BookableGroups.php',
    ),
  ),
  'build/Requests/BookableGroups/StoreBookablesReservations.php' => 
  array (
    'fileHash' => '1ec5c02b6b11aaf247fd90027622176dc38e8e7b',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/BookableGroups.php',
    ),
  ),
  'build/Requests/Company/GetCompanyEvents.php' => 
  array (
    'fileHash' => '21e60868b829696697d5edf6bab1288d0cfaac70',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Company.php',
    ),
  ),
  'build/Requests/Contacts/GetContactDetails.php' => 
  array (
    'fileHash' => 'b4209fb18d3180665032071d153dcd16a07c700d',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Contacts.php',
    ),
  ),
  'build/Requests/Contacts/GetContactEvents.php' => 
  array (
    'fileHash' => 'cc7729faba728e88a653d855e64417da320ccba7',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Contacts.php',
    ),
  ),
  'build/Requests/Contacts/ValidateContactCode.php' => 
  array (
    'fileHash' => 'c4814d4fe1d78dc4d2ebef6ab0563b223f188deb',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Contacts.php',
    ),
  ),
  'build/Requests/Documents/GetEventDocuments.php' => 
  array (
    'fileHash' => '65787c38241c336880d29f36bfec2d33ff4682d7',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Documents.php',
    ),
  ),
  'build/Requests/Documents/GetGuestsDocumentsUrls.php' => 
  array (
    'fileHash' => '3ba1ac76c2dea69149fbea6748ce2069367143ad',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Documents.php',
    ),
  ),
  'build/Requests/Emails/GetEmailTemplates.php' => 
  array (
    'fileHash' => '1e5cd9f62475eec48056b1aa7391a16f355a72cd',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Emails.php',
    ),
  ),
  'build/Requests/Events/GetEvent.php' => 
  array (
    'fileHash' => '7784e47c01289e2586a5d7afe81848a1af28f6d2',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Events.php',
    ),
  ),
  'build/Requests/Events/GetSignedStorageUrl.php' => 
  array (
    'fileHash' => 'c614f07bd6c30bfbc838ad02628ea34a6f7fa41c',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Events.php',
    ),
  ),
  'build/Requests/Events/SendEmailTemplate.php' => 
  array (
    'fileHash' => '9aa5102478a4008f8f4b93d28b7db7993763ecae',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Events.php',
    ),
  ),
  'build/Requests/Guests/ArchiveGuest.php' => 
  array (
    'fileHash' => '5c37f7f6ee6cee214bbc58754d61ff4c5924e01c',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/CheckinGuest.php' => 
  array (
    'fileHash' => 'f14cc41ff758a5792d4cba3cab5254af09e040df',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/CreateCompanionGuest.php' => 
  array (
    'fileHash' => '8de4f822ebe2ff1202fa5b46c448c6a59707aa9b',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/CreateGuests.php' => 
  array (
    'fileHash' => '6e9c5e49a4c7cf1ab46abb78d5730466725edde6',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/CreateRecommendedGuest.php' => 
  array (
    'fileHash' => '7366729605295bd518341dae24b50be7cc7e781f',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/CreateTemporaryUpload.php' => 
  array (
    'fileHash' => 'b5b4b8544f841058c5ecc79b5cbed5bd36f585fd',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/DeleteGuest.php' => 
  array (
    'fileHash' => '637073e90055f43bd96083994f858eb7285c6c1e',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/GetGuest.php' => 
  array (
    'fileHash' => 'e3f75631660eea6d68dbabb744b9dd5f5765e446',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/GetGuestAttachmentDownloadUrl.php' => 
  array (
    'fileHash' => 'e9119b45136b189862b5a510f79d57a6b110ac65',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/GetGuestAttachments.php' => 
  array (
    'fileHash' => '5c0a229791d2e1078f86822853dfbc9b095bce85',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/GetGuests.php' => 
  array (
    'fileHash' => 'a90c8752061cbae1646853335d6e0f27a47e2d14',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/RestoreGuest.php' => 
  array (
    'fileHash' => 'd9352ad4da667fcad30524df90d61cb678d7eb2e',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/UpdateGuest.php' => 
  array (
    'fileHash' => '42a3cef7c18aeb3d14bb2cd59b781e820d7c1b36',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/UpdateGuestEmailOptInStatus.php' => 
  array (
    'fileHash' => '8c85dec5ecf25377ba57abc61da3872722b188b8',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Requests/Guests/ValidateGuestCode.php' => 
  array (
    'fileHash' => 'fb9a04a17f387b052cf17799dbb80b337da62e0a',
    'dependentFiles' => 
    array (
      0 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Resource.php' => 
  array (
    'fileHash' => 'cab819576907dd598bc9f0960a12a4a98ad8e70c',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
      1 => 'build/Resource/BookableGroups.php',
      2 => 'build/Resource/Company.php',
      3 => 'build/Resource/Contacts.php',
      4 => 'build/Resource/Documents.php',
      5 => 'build/Resource/Emails.php',
      6 => 'build/Resource/Events.php',
      7 => 'build/Resource/Guests.php',
    ),
  ),
  'build/Resource/BookableGroups.php' => 
  array (
    'fileHash' => '0b956df89d541e84bc4ed583d946d5633f7e09a6',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'build/Resource/Company.php' => 
  array (
    'fileHash' => 'b3a6f131d07a67a3c6038a6156cd4a097f5b69b9',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'build/Resource/Contacts.php' => 
  array (
    'fileHash' => '8b80232f937be39938a320ef0156b2780fe3967b',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'build/Resource/Documents.php' => 
  array (
    'fileHash' => 'b8ed6a3ddd060f9d8518ec65a32aef5582e94185',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'build/Resource/Emails.php' => 
  array (
    'fileHash' => '6a9618f18668d45a39e2ccbedf3ca222ac96caa2',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'build/Resource/Events.php' => 
  array (
    'fileHash' => 'b782a7958bf50acd1510142483f85b32120b5d03',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'build/Resource/Guests.php' => 
  array (
    'fileHash' => 'f4446b634e328299aad4986f11d163adba9787b9',
    'dependentFiles' => 
    array (
      0 => 'build/AirLST.php',
    ),
  ),
  'src/Commands/BuildCommand.php' => 
  array (
    'fileHash' => '35d35493727b32347f7b1e2e319aa3cc2af7ce87',
    'dependentFiles' => 
    array (
    ),
  ),
  'src/Contracts/EmailResourceContract.php' => 
  array (
    'fileHash' => '4d1cda2a8a6b3404155bfdb3b8c1c4b560ac3e63',
    'dependentFiles' => 
    array (
      0 => 'src/CoreApi.php',
      1 => 'src/Resources/EmailResource.php',
    ),
  ),
  'src/Contracts/EventResourceContract.php' => 
  array (
    'fileHash' => '07dac8e6e4433b99b3dde0af0ef8057af97bbc6c',
    'dependentFiles' => 
    array (
      0 => 'src/CoreApi.php',
      1 => 'src/Resources/EventResource.php',
    ),
  ),
  'src/Contracts/GuestResourceContract.php' => 
  array (
    'fileHash' => 'c5486a5656f52301dd40657d23fcb46a32985687',
    'dependentFiles' => 
    array (
      0 => 'src/CoreApi.php',
      1 => 'src/Resources/GuestResource.php',
    ),
  ),
  'src/CoreApi.php' => 
  array (
    'fileHash' => 'df5838a446dd5529a013c95cc7fad29919884059',
    'dependentFiles' => 
    array (
    ),
  ),
  'src/Generators/ConnectorGenerator.php' => 
  array (
    'fileHash' => 'eaff0437054c647e87458ea71f00ce7e4c4b1e85',
    'dependentFiles' => 
    array (
      0 => 'src/Commands/BuildCommand.php',
    ),
  ),
  'src/Generators/ResourceGenerator.php' => 
  array (
    'fileHash' => '782a396594e7fafcf1cce967caeccc03d84ec392',
    'dependentFiles' => 
    array (
      0 => 'src/Commands/BuildCommand.php',
    ),
  ),
  'src/Requests/Email/ListRequest.php' => 
  array (
    'fileHash' => 'f4190bfb3c3954b1cc3b5a1ecbd1bea47ee2376e',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/EmailResource.php',
    ),
  ),
  'src/Requests/Email/SendRequest.php' => 
  array (
    'fileHash' => 'f55da205fdaa02d0e504f61ec7a9bc1ba026f361',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/EmailResource.php',
    ),
  ),
  'src/Requests/Event/GetRequest.php' => 
  array (
    'fileHash' => '0f36fbd3f26fb02039a9e0374f2ac75ee6eddd8b',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/EventResource.php',
    ),
  ),
  'src/Requests/Event/ListRequest.php' => 
  array (
    'fileHash' => '1786e7635d78c828e00172e0536ad36eecd48660',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/EventResource.php',
    ),
  ),
  'src/Requests/Guest/CreateRequest.php' => 
  array (
    'fileHash' => 'd12e40136ebb2a160e98ae1bb2e3138798921e3f',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/GuestResource.php',
    ),
  ),
  'src/Requests/Guest/GetRequest.php' => 
  array (
    'fileHash' => '0b1f41e52cc26c26b57e96e3b11510bf270c19a9',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/GuestResource.php',
    ),
  ),
  'src/Requests/Guest/ListRequest.php' => 
  array (
    'fileHash' => '9a232b9160f4a7168b30fd7633ad547e2381d0fb',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/GuestResource.php',
    ),
  ),
  'src/Requests/Guest/UpdateRequest.php' => 
  array (
    'fileHash' => '229447f9a4e62b6a14779c724be2d974c40beddd',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/GuestResource.php',
    ),
  ),
  'src/Requests/Guest/ValidateCodeRequest.php' => 
  array (
    'fileHash' => '2f27349f3accb60dac7f4230604ec0516095225a',
    'dependentFiles' => 
    array (
      0 => 'src/Resources/GuestResource.php',
    ),
  ),
  'src/Resources/EmailResource.php' => 
  array (
    'fileHash' => 'f6a26bc7441b7f2f1e449afe12b8be7e36fb3786',
    'dependentFiles' => 
    array (
      0 => 'src/CoreApi.php',
    ),
  ),
  'src/Resources/EventResource.php' => 
  array (
    'fileHash' => '064745f1e691af2baa306c1783fac14390ee1206',
    'dependentFiles' => 
    array (
      0 => 'src/CoreApi.php',
    ),
  ),
  'src/Resources/GuestResource.php' => 
  array (
    'fileHash' => '50e939735ff416365651cd78ba7750dc6c766238',
    'dependentFiles' => 
    array (
      0 => 'src/CoreApi.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'build/AirLST.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\AirLST',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * AirLST API.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client',
         'uses' => 
        array (
          'bookablegroups' => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
          'company' => 'AirLST\\SdkPhp\\Client\\Resource\\Company',
          'contacts' => 'AirLST\\SdkPhp\\Client\\Resource\\Contacts',
          'documents' => 'AirLST\\SdkPhp\\Client\\Resource\\Documents',
          'emails' => 'AirLST\\SdkPhp\\Client\\Resource\\Emails',
          'events' => 'AirLST\\SdkPhp\\Client\\Resource\\Events',
          'guests' => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
          'connector' => 'Saloon\\Http\\Connector',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Connector',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveBaseUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bookableGroups',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'company',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\Company',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'contacts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\Contacts',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'documents',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\Documents',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'emails',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\Emails',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'events',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\Events',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'guests',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultHeaders',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/BookableGroups/DeleteBookablesReservation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * deleteBookablesReservation.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid       Event UUID
     * @param mixed $guestCode       Guest code
     * @param mixed $reservationUuid Reservation UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reservationUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/BookableGroups/GetAvailabilities.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getAvailabilities.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     * @param mixed $bookableUuid      Bookable object UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableGroupUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/BookableGroups/ListBookableGroups.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * listBookableGroups.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/BookableGroups/ListBookablesForGroup.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * listBookablesForGroup.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableGroupUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/BookableGroups/StoreBookablesReservations.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * storeBookablesReservations.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableGroupUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Company/GetCompanyEvents.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Company\\GetCompanyEvents',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getCompanyEvents.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Company',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Contacts/GetContactDetails.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactDetails',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getContactDetails.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $contactCode Contact code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Contacts/GetContactEvents.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactEvents',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getContactEvents.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $contactCode Contact code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Contacts/ValidateContactCode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * validateContactCode.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Documents/GetEventDocuments.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetEventDocuments',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getEventDocuments.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Documents/GetGuestsDocumentsUrls.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetGuestsDocumentsUrls',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getGuestsDocumentsUrls.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid    Event UUID
     * @param mixed $documentUuid Document UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'documentUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Emails/GetEmailTemplates.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Emails\\GetEmailTemplates',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getEmailTemplates.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Emails',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Emails',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Events/GetEvent.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetEvent',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getEvent.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Events',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Events',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Events/GetSignedStorageUrl.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetSignedStorageUrl',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getSignedStorageUrl.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Events',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Events',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Events/SendEmailTemplate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\SendEmailTemplate',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * sendEmailTemplate.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Events',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $emailTemplateUuid Email Template UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Events',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'emailTemplateUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/ArchiveGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * archiveGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/CheckinGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * checkinGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/CreateCompanionGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * createCompanionGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mainGuestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/CreateGuests.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * createGuests.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/CreateRecommendedGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * createRecommendedGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mainGuestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/CreateTemporaryUpload.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * createTemporaryUpload.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/DeleteGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * deleteGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/GetGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/GetGuestAttachmentDownloadUrl.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getGuestAttachmentDownloadUrl.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid      Event UUID
     * @param mixed $guestCode      Guest code
     * @param mixed $attachmentUuid Guest attachment UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attachmentUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/GetGuestAttachments.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getGuestAttachments.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/GetGuests.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * getGuests.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed       $eventUuid       Event UUID
     * @param int|null    $perPage         Number of items per page
     * @param int|null    $page            Page number
     * @param string|null $search          Quick search
     * @param string|null $filtersStatuseq Filter field operator. Template: filters(field*operator)=value. One of: eq (equal), neq (not equal), like, gt (greater than), gte (greater than or equal), lt (less than), lte (less than or equal). If operator is not provided eq will be used as default. If you want to filter by nested fields, use the : separator to indicate nesting levels. For example: filters(contact:sex*eq)=male targets the sex field inside contact. filters(booking:extended_fields->team_name*eq)=Dev targets the team_name field inside the extended_fields object (represented with ->), which is inside booking.
     * @param string|null $sortsRole0      Sorts array. Template: sorts(field*order)=desc
     * @param int|null    $since           Timestamp to get guests updated/deleted since
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'page',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'search',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filtersStatuseq',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sortsRole0',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'since',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultQuery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/RestoreGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * restoreGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/UpdateGuest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * updateGuest.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/UpdateGuestEmailOptInStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * updateGuestEmailOptInStatus.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Requests/Guests/ValidateGuestCode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * validateGuestCode.
 */',
         'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
         'uses' => 
        array (
          'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
          'method' => 'Saloon\\Enums\\Method',
          'request' => 'Saloon\\Http\\Request',
          'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'connector',
               'type' => 'Saloon\\Http\\Connector',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/BookableGroups.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\BookableGroups',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAvailabilities',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     * @param mixed $bookableUuid      Bookable object UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'deletebookablesreservation' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
              'getavailabilities' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
              'listbookablegroups' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
              'listbookablesforgroup' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
              'storebookablesreservations' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableGroupUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteBookablesReservation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid       Event UUID
     * @param mixed $guestCode       Guest code
     * @param mixed $reservationUuid Reservation UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'deletebookablesreservation' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
              'getavailabilities' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
              'listbookablegroups' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
              'listbookablesforgroup' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
              'storebookablesreservations' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reservationUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'listBookableGroups',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'deletebookablesreservation' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
              'getavailabilities' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
              'listbookablegroups' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
              'listbookablesforgroup' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
              'storebookablesreservations' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'listBookablesForGroup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'deletebookablesreservation' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
              'getavailabilities' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
              'listbookablegroups' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
              'listbookablesforgroup' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
              'storebookablesreservations' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableGroupUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeBookablesReservations',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'deletebookablesreservation' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\DeleteBookablesReservation',
              'getavailabilities' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\GetAvailabilities',
              'listbookablegroups' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookableGroups',
              'listbookablesforgroup' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\ListBookablesForGroup',
              'storebookablesreservations' => 'AirLST\\SdkPhp\\Client\\Requests\\BookableGroups\\StoreBookablesReservations',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookableGroupUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/Company.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\Company',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCompanyEvents',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/Contacts.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\Contacts',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getContactEvents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $contactCode Contact code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'getcontactdetails' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactDetails',
              'getcontactevents' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactEvents',
              'validatecontactcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getContactDetails',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $contactCode Contact code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'getcontactdetails' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactDetails',
              'getcontactevents' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\GetContactEvents',
              'validatecontactcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Contacts\\ValidateContactCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validateContactCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/Documents.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\Documents',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGuestsDocumentsUrls',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid    Event UUID
     * @param mixed $documentUuid Document UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'geteventdocuments' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetEventDocuments',
              'getguestsdocumentsurls' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetGuestsDocumentsUrls',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'documentUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEventDocuments',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'geteventdocuments' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetEventDocuments',
              'getguestsdocumentsurls' => 'AirLST\\SdkPhp\\Client\\Requests\\Documents\\GetGuestsDocumentsUrls',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/Emails.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\Emails',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEmailTemplates',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'getemailtemplates' => 'AirLST\\SdkPhp\\Client\\Requests\\Emails\\GetEmailTemplates',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/Events.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\Events',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendEmailTemplate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $emailTemplateUuid Email Template UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'getevent' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetEvent',
              'getsignedstorageurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetSignedStorageUrl',
              'sendemailtemplate' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\SendEmailTemplate',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'emailTemplateUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSignedStorageUrl',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'getevent' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetEvent',
              'getsignedstorageurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetSignedStorageUrl',
              'sendemailtemplate' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\SendEmailTemplate',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEvent',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'getevent' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetEvent',
              'getsignedstorageurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\GetSignedStorageUrl',
              'sendemailtemplate' => 'AirLST\\SdkPhp\\Client\\Requests\\Events\\SendEmailTemplate',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'build/Resource/Guests.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Client\\Resource\\Guests',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'AirLST\\SdkPhp\\Client\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archiveGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkinGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGuestAttachmentDownloadUrl',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid      Event UUID
     * @param mixed $guestCode      Guest code
     * @param mixed $attachmentUuid Guest attachment UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attachmentUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGuestAttachments',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGuests',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed  $eventUuid       Event UUID
     * @param int    $perPage         Number of items per page
     * @param int    $page            Page number
     * @param string $search          Quick search
     * @param string $filtersStatuseq Filter field operator. Template: filters(field*operator)=value. One of: eq (equal), neq (not equal), like, gt (greater than), gte (greater than or equal), lt (less than), lte (less than or equal). If operator is not provided eq will be used as default. If you want to filter by nested fields, use the : separator to indicate nesting levels. For example: filters(contact:sex*eq)=male targets the sex field inside contact. filters(booking:extended_fields->team_name*eq)=Dev targets the team_name field inside the extended_fields object (represented with ->), which is inside booking.
     * @param string $sortsRole0      Sorts array. Template: sorts(field*order)=desc
     * @param int    $since           Timestamp to get guests updated/deleted since
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'page',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'search',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filtersStatuseq',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sortsRole0',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'since',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createGuests',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restoreGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createCompanionGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mainGuestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createRecommendedGuest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mainGuestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateGuestEmailOptInStatus',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validateGuestCode',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createTemporaryUpload',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */',
             'namespace' => 'AirLST\\SdkPhp\\Client\\Resource',
             'uses' => 
            array (
              'archiveguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ArchiveGuest',
              'checkinguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CheckinGuest',
              'createcompanionguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateCompanionGuest',
              'createguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateGuests',
              'createrecommendedguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateRecommendedGuest',
              'createtemporaryupload' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\CreateTemporaryUpload',
              'deleteguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\DeleteGuest',
              'getguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuest',
              'getguestattachmentdownloadurl' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachmentDownloadUrl',
              'getguestattachments' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuestAttachments',
              'getguests' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\GetGuests',
              'restoreguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\RestoreGuest',
              'updateguest' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuest',
              'updateguestemailoptinstatus' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\UpdateGuestEmailOptInStatus',
              'validateguestcode' => 'AirLST\\SdkPhp\\Client\\Requests\\Guests\\ValidateGuestCode',
              'resource' => 'AirLST\\SdkPhp\\Client\\Resource',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventUuid',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guestCode',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Commands/BuildCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Commands\\BuildCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'NAMESPACE',
               'value' => '\'AirLST\\SdkPhp\\Client\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => false,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE',
               'value' => '\'openapi\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => false,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dumpGeneratedFiles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'result',
               'type' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\GeneratedCode',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dumpToFile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'file',
               'type' => 'Nette\\PhpGenerator\\PhpFile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Contracts/EmailResourceContract.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Contracts\\EmailResourceContract',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string> $body
     */',
             'namespace' => 'AirLST\\SdkPhp\\Contracts',
             'uses' => 
            array (
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'uuid',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'src/Contracts/EventResourceContract.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Contracts\\EventResourceContract',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'src/Contracts/GuestResourceContract.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Contracts\\GuestResourceContract',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $query
     */',
             'namespace' => 'AirLST\\SdkPhp\\Contracts',
             'uses' => 
            array (
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validateCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     */',
             'namespace' => 'AirLST\\SdkPhp\\Contracts',
             'uses' => 
            array (
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     */',
             'namespace' => 'AirLST\\SdkPhp\\Contracts',
             'uses' => 
            array (
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'src/CoreApi.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\CoreApi',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Connector',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'baseUrl',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveBaseUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setBaseUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'baseUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'event',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Resources\\EventResource',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'guest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Resources\\GuestResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'email',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'AirLST\\SdkPhp\\Resources\\EmailResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultHeaders',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Generators/ConnectorGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Generators\\ConnectorGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Crescat\\SaloonSdkGenerator\\Generator',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Nette\\PhpGenerator\\PhpFile|array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'specification',
               'type' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateConnectorClass',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Nette\\PhpGenerator\\PhpFile',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'specification',
               'type' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Generators/ResourceGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Generators\\ResourceGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Crescat\\SaloonSdkGenerator\\Generator',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Nette\\PhpGenerator\\PhpFile|array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'specification',
               'type' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateResourceClass',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array|Endpoint[] $endpoints
     */',
             'namespace' => 'AirLST\\SdkPhp\\Generators',
             'uses' => 
            array (
              'apispecification' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
              'endpoint' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\Endpoint',
              'parameter' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\Parameter',
              'generator' => 'Crescat\\SaloonSdkGenerator\\Generator',
              'namehelper' => 'Crescat\\SaloonSdkGenerator\\Helpers\\NameHelper',
              'invalidstateexception' => 'Nette\\InvalidStateException',
              'classtype' => 'Nette\\PhpGenerator\\ClassType',
              'literal' => 'Nette\\PhpGenerator\\Literal',
              'method' => 'Nette\\PhpGenerator\\Method',
              'phpfile' => 'Nette\\PhpGenerator\\PhpFile',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Nette\\PhpGenerator\\PhpFile',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'resourceName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'endpoints',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateResourceClasses',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array|PhpFile[]
     */',
             'namespace' => 'AirLST\\SdkPhp\\Generators',
             'uses' => 
            array (
              'apispecification' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
              'endpoint' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\Endpoint',
              'parameter' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\Parameter',
              'generator' => 'Crescat\\SaloonSdkGenerator\\Generator',
              'namehelper' => 'Crescat\\SaloonSdkGenerator\\Helpers\\NameHelper',
              'invalidstateexception' => 'Nette\\InvalidStateException',
              'classtype' => 'Nette\\PhpGenerator\\ClassType',
              'literal' => 'Nette\\PhpGenerator\\Literal',
              'method' => 'Nette\\PhpGenerator\\Method',
              'phpfile' => 'Nette\\PhpGenerator\\PhpFile',
              'response' => 'Saloon\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'specification',
               'type' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\ApiSpecification',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addPropertyToMethod',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Nette\\PhpGenerator\\Method',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'Nette\\PhpGenerator\\Method',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameter',
               'type' => 'Crescat\\SaloonSdkGenerator\\Data\\Generator\\Parameter',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Email/ListRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Email\\ListRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Email/SendRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Email\\SendRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Email',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'uuid',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultBody',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Email',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Event/GetRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Event\\GetRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Event/ListRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Event\\ListRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Guest/CreateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Guest\\CreateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Guest',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultBody',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Guest',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Guest/GetRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Guest\\GetRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Guest/ListRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Guest\\ListRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $additionalQuery
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Guest',
             'uses' => 
            array (
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'additionalQuery',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultQuery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Guest/UpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Guest\\UpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Guest',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultBody',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Guest',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Requests/Guest/ValidateCodeRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Requests\\Guest\\ValidateCodeRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\Request',
       'implements' => 
      array (
        0 => 'Saloon\\Contracts\\Body\\HasBody',
      ),
       'usedTraits' => 
      array (
        0 => 'Saloon\\Traits\\Body\\HasJsonBody',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'method',
          ),
           'phpDoc' => NULL,
           'type' => 'Saloon\\Enums\\Method',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveEndpoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultBody',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, string>
     */',
             'namespace' => 'AirLST\\SdkPhp\\Requests\\Guest',
             'uses' => 
            array (
              'hasbody' => 'Saloon\\Contracts\\Body\\HasBody',
              'method' => 'Saloon\\Enums\\Method',
              'request' => 'Saloon\\Http\\Request',
              'hasjsonbody' => 'Saloon\\Traits\\Body\\HasJsonBody',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Resources/EmailResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Resources\\EmailResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\BaseResource',
       'implements' => 
      array (
        0 => 'AirLST\\SdkPhp\\Contracts\\EmailResourceContract',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'uuid',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Resources/EventResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Resources\\EventResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\BaseResource',
       'implements' => 
      array (
        0 => 'AirLST\\SdkPhp\\Contracts\\EventResourceContract',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'src/Resources/GuestResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AirLST\\SdkPhp\\Resources\\GuestResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Saloon\\Http\\BaseResource',
       'implements' => 
      array (
        0 => 'AirLST\\SdkPhp\\Contracts\\GuestResourceContract',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validateCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Saloon\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
