# Agent Component
![version](https://img.shields.io/badge/version-1.1.0-brightgreen.svg?style=flat-square "Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/flextype-components/agent/blob/master/LICENSE)

Agent component provides a simple way to detect the kind of device that made the request.

### Installation

```
composer require flextype-components/agent
```

### Usage

```php
use Flextype\Component\Agent\Agent;
```

Returns true if the user agent that made the request is identified as a mobile device.
```php
if (Agent::isMobile()) {
    // Do something...
}  
```

Returns true if the user agent that made the request is identified as a robot/crawler.
```php
if (Agent::isRobot()) {
    // Do something...
}  
```

Returns TRUE if the string you're looking for exists in the user agent string and FALSE if not.
```php
if (Agent::is('iphone')) {
     // Do something...
}

if (Agent::is(array('iphone', 'ipod'))) {
    // Do something...
}
```

## License
See [LICENSE](https://github.com/force-components/agent/blob/master/LICENSE)
