# What is this?

Example repository to provide example for specified issue.

## Table of Contents

* [What is this?](#what-is-this)
  * [Table of Contents](#table-of-contents)
  * [Issue](#issue)
    * [Main problem](#main-problem)
    * [Solution](#solution)
  * [Authors](#authors)
  * [License](#license)

## Issue

One person was asking following question on Symfony Slack workspace;

```
xxx zzz  18:50
Could please someone help me solve the following problem with conversion from 
ArrayObect to array: https://3v4l.org/BePPC
```

After we discussed about that issue for a while, I just created this repository
to show how that could be done.

### Main problem

You cannot get `protected` nor `private` properties like that, there is multiple
"hacks" to access those, but I don't recommend you to use those.

### Solution

Just simple usage of [The Serializer Component](https://symfony.com/doc/current/components/serializer.html).

## Authors

* [Tarmo Leppänen](https://github.com/tarlepp)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2020 Tarmo Leppänen
