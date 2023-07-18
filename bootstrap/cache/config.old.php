<?php return array (
  'app' => 
  array (
    'name' => 'PTA',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:aYGwwc4A1oCU3dlK8oTY7J6EegF+PzAQYdSUGJfjNjs=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Yajra\\DataTables\\DataTablesServiceProvider',
      23 => 'Yajra\\DataTables\\ButtonsServiceProvider',
      24 => 'GoogleMaps\\ServiceProvider\\GoogleMapsServiceProvider',
      25 => 'App\\Providers\\AppServiceProvider',
      26 => 'App\\Providers\\AuthServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'DataTables' => 'Yajra\\DataTables\\Facades\\DataTables',
      'GoogleMaps' => 'GoogleMaps\\Facade\\GoogleMapsFacade',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'D:\\xampp\\htdocs\\kendal\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'pta_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'kendal',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'kendal',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'mysql2' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'forge',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'kendal',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'kendal',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'pta_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
  'datatables-buttons' => 
  array (
    'namespace' => 
    array (
      'base' => 'DataTables',
      'model' => '',
    ),
    'pdf_generator' => 'snappy',
    'snappy' => 
    array (
      'options' => 
      array (
        'no-outline' => true,
        'margin-left' => '0',
        'margin-right' => '0',
        'margin-top' => '10mm',
        'margin-bottom' => '10mm',
      ),
      'orientation' => 'landscape',
    ),
    'parameters' => 
    array (
      'dom' => 'Bfrtip',
      'order' => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 'desc',
        ),
      ),
      'buttons' => 
      array (
        0 => 'create',
        1 => 'export',
        2 => 'print',
        3 => 'reset',
        4 => 'reload',
      ),
    ),
    'generator' => 
    array (
      'columns' => 'id,add your columns,created_at,updated_at',
      'buttons' => 'create,export,print,reset,reload',
      'dom' => 'Bfrtip',
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\kendal\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\kendal\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'D:\\xampp\\htdocs\\kendal\\public\\storage' => 'D:\\xampp\\htdocs\\kendal\\storage\\app/public',
    ),
  ),
  'googlemaps' => 
  array (
    'key' => 'AIzaSyAUQaOBIQIBCIfWQb3r8-8Vv1-XWLH_aOk',
    'ssl_verify_peer' => false,
    'service' => 
    array (
      'geocoding' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/geocode/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'place_id',
        'param' => 
        array (
          'address' => NULL,
          'bounds' => NULL,
          'key' => NULL,
          'region' => NULL,
          'language' => NULL,
          'result_type' => NULL,
          'location_type' => NULL,
          'latlng' => NULL,
          'place_id' => NULL,
          'components' => 
          array (
            'route' => NULL,
            'locality' => NULL,
            'administrative_area' => NULL,
            'postal_code' => NULL,
            'country' => NULL,
          ),
        ),
      ),
      'directions' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/directions/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'geocoded_waypoints',
        'decodePolyline' => true,
        'param' => 
        array (
          'origin' => NULL,
          'destination' => NULL,
          'mode' => NULL,
          'waypoints' => NULL,
          'place_id' => NULL,
          'alternatives' => NULL,
          'avoid' => NULL,
          'language' => NULL,
          'units' => NULL,
          'region' => NULL,
          'departure_time' => NULL,
          'arrival_time' => NULL,
          'transit_mode' => NULL,
          'transit_routing_preference' => NULL,
        ),
      ),
      'distancematrix' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/distancematrix/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'origin_addresses',
        'param' => 
        array (
          'origins' => NULL,
          'destinations' => NULL,
          'key' => NULL,
          'mode' => NULL,
          'language' => NULL,
          'avoid' => NULL,
          'units' => NULL,
          'departure_time' => NULL,
          'arrival_time' => NULL,
          'transit_mode' => NULL,
          'transit_routing_preference' => NULL,
        ),
      ),
      'elevation' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/elevation/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'elevation',
        'param' => 
        array (
          'locations' => NULL,
          'path' => NULL,
          'samples' => NULL,
          'key' => NULL,
        ),
      ),
      'geolocate' => 
      array (
        'url' => 'https://www.googleapis.com/geolocation/v1/geolocate?',
        'type' => 'POST',
        'key' => NULL,
        'endpoint' => false,
        'responseDefaultKey' => 'location',
        'param' => 
        array (
          'homeMobileCountryCode' => NULL,
          'homeMobileNetworkCode' => NULL,
          'radioType' => NULL,
          'carrier' => NULL,
          'considerIp' => NULL,
          'cellTowers' => 
          array (
            'cellId' => NULL,
            'locationAreaCode' => NULL,
            'mobileCountryCode' => NULL,
            'mobileNetworkCode' => NULL,
            'age' => NULL,
            'signalStrength' => NULL,
            'timingAdvance' => NULL,
          ),
          'wifiAccessPoints' => 
          array (
            'macAddress' => NULL,
            'signalStrength' => NULL,
            'age' => NULL,
            'channel' => NULL,
            'signalToNoiseRatio' => NULL,
          ),
        ),
      ),
      'snapToRoads' => 
      array (
        'url' => 'https://roads.googleapis.com/v1/snapToRoads?',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => false,
        'responseDefaultKey' => 'snappedPoints',
        'param' => 
        array (
          'locations' => NULL,
          'path' => NULL,
          'samples' => NULL,
          'key' => NULL,
        ),
      ),
      'speedLimits' => 
      array (
        'url' => 'https://roads.googleapis.com/v1/speedLimits?',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => false,
        'responseDefaultKey' => 'speedLimits',
        'param' => 
        array (
          'path' => NULL,
          'placeId' => NULL,
          'units' => NULL,
          'key' => NULL,
        ),
      ),
      'timezone' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/timezone/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'dstOffset',
        'param' => 
        array (
          'location' => NULL,
          'timestamp' => NULL,
          'key' => NULL,
          'language' => NULL,
        ),
      ),
      'nearbysearch' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/nearbysearch/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'results',
        'param' => 
        array (
          'key' => NULL,
          'location' => NULL,
          'radius' => NULL,
          'keyword' => NULL,
          'language' => NULL,
          'minprice' => NULL,
          'maxprice' => NULL,
          'name' => NULL,
          'opennow' => NULL,
          'rankby' => NULL,
          'type' => NULL,
          'pagetoken' => NULL,
          'zagatselected' => NULL,
        ),
      ),
      'textsearch' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/textsearch/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'results',
        'param' => 
        array (
          'key' => NULL,
          'query' => NULL,
          'location' => NULL,
          'radius' => NULL,
          'language' => NULL,
          'minprice' => NULL,
          'maxprice' => NULL,
          'opennow' => NULL,
          'type' => NULL,
          'pagetoken' => NULL,
          'zagatselected' => NULL,
        ),
      ),
      'radarsearch' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/radarsearch/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'geometry',
        'param' => 
        array (
          'key' => NULL,
          'radius' => NULL,
          'location' => NULL,
          'keyword' => NULL,
          'minprice' => NULL,
          'maxprice' => NULL,
          'opennow' => NULL,
          'name' => NULL,
          'type' => NULL,
          'zagatselected' => NULL,
        ),
      ),
      'placedetails' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/details/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'result',
        'param' => 
        array (
          'key' => NULL,
          'placeid' => NULL,
          'extensions' => NULL,
          'language' => NULL,
        ),
      ),
      'placeadd' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/add/',
        'type' => 'POST',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'place_id',
        'param' => 
        array (
          'key' => NULL,
          'accuracy' => NULL,
          'address' => NULL,
          'language' => NULL,
          'location' => NULL,
          'name' => NULL,
          'phone_number' => NULL,
          'types' => NULL,
          'type' => NULL,
          'website' => NULL,
        ),
      ),
      'placedelete' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/delete/',
        'type' => 'POST',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'status',
        'param' => 
        array (
          'key' => NULL,
          'place_id' => NULL,
        ),
      ),
      'placephoto' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/photo?',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => false,
        'responseDefaultKey' => 'image',
        'param' => 
        array (
          'key' => NULL,
          'photoreference' => NULL,
          'maxheight' => NULL,
          'maxwidth' => NULL,
        ),
      ),
      'placeautocomplete' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/autocomplete/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'predictions',
        'param' => 
        array (
          'key' => NULL,
          'input' => NULL,
          'offset' => NULL,
          'location' => NULL,
          'radius' => NULL,
          'language' => NULL,
          'types' => NULL,
          'type' => NULL,
          'components' => NULL,
        ),
      ),
      'placequeryautocomplete' => 
      array (
        'url' => 'https://maps.googleapis.com/maps/api/place/queryautocomplete/',
        'type' => 'GET',
        'key' => NULL,
        'endpoint' => true,
        'responseDefaultKey' => 'predictions',
        'param' => 
        array (
          'key' => NULL,
          'input' => NULL,
          'offset' => NULL,
          'location' => NULL,
          'radius' => NULL,
          'language' => NULL,
        ),
      ),
    ),
    'endpoint' => 
    array (
      'xml' => 'xml?',
      'json' => 'json?',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\xampp\\htdocs\\kendal\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\xampp\\htdocs\\kendal\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'D:\\xampp\\htdocs\\kendal\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mailhog',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => 'PTA',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\xampp\\htdocs\\kendal\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => true,
    'encrypt' => false,
    'files' => 'D:\\xampp\\htdocs\\kendal\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'pta_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\xampp\\htdocs\\kendal\\resources\\views',
    ),
    'compiled' => 'D:\\xampp\\htdocs\\kendal\\storage\\framework\\views',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'D:\\xampp\\htdocs\\kendal\\storage\\framework/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'datatables-html' => 
  array (
    'namespace' => 'LaravelDataTables',
    'table' => 
    array (
      'class' => 'table',
      'id' => 'dataTableBuilder',
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
    'script' => 'datatables::script',
    'editor' => 'datatables::editor',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
