# Abricos Person

Assembling Abricos Platform for personal and team needs


## Automated tasks

Provides a set of util tasks to work with [Abricos Platform](http://github.com/abricos/abricos) project.


### Setup

1. Install [NodeJS](http://nodejs.org/download/), if you don't have it yet.


2. Install global dependencies:

    ```
[sudo] npm install -g grunt-cli multik
    ```

3. Install local dependencies:

    ```
npm install
    ```

4. Install project dependencies:

    ```
mk install
    ```

5. Initialize project dependencies:

    ```
mk-grunt init
    ```

### Build

* Build core, modules, vendors and over dependencies:

    ```
mk-grunt build
    ```

### Watch

* Watch and build for any changes:

    ```
grunt watch
    ```

* Watch and build for any single module changes:

    ```
mk-grunt watch --filter=abricos-module-name
    ```

