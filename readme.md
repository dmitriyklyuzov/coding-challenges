# Coding challenges

A collection of my soultions of various coding challenges solved using PHP

## Usage

For earlier solutions that have values hardcoded:

```
$ php solution.php
```

For later solutions that require arguments to be passed:

```
$ php solution.php "Argument 1" "String 2"
```


Newer solutions use default values if no arugments are passed:

```php

$default = "default value";

// if args provided
if($argc>1){
	// use argv[1] as as function parameter
	doThis($argv[1]);
}
// otherwise
else{
	// use default value as function parameter
	echo "No input provided, using default value\n";
	doThis($default);
}

```

## SQL ZOO

For my solutions to [SQL ZOO](http://sqlzoo.net) coding challenges, see [this repository](https://github.com/dmitriyklyuzov/sqlzoo).