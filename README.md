# SImplOnPHP-Tutorial

An example application that uses SimplOnPHP as framework.

## Install

### Using Docker

#### For Windows

For non-linux systems, first start boot2docker

    boot2docker up
    boot2docker ssh -vnNTL 80:localhost:80
    
Then follow the instructions to set the generated environment variables. For example:
    
    set DOCKER_HOST=tcp://192.168.59.104:2376
    set DOCKER_CERT_PATH=C:\Users\dubrox\.boot2docker\certs\boot2docker-vm
    set DOCKER_TLS_VERIFY=1

Then execute

    docker build -t simplon-php-tutorial .
    docker run -it --rm --name tutorial simplon-php-tutorial
