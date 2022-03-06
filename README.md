# Templates Api Rest

## Python

### Flask
<<<<<<< HEAD

```bash
    git clone git clone git@github.com:upgrade-php/api-rest-templates.git
    cp -rf api-rest-templates/basic/python/flask/ new_project
    cd new_project
```
Executando a container
```bash
    make up
```
Em outra aba no terminal, para entra na container
```bash
    make app
```
Para instalar as dependencias, caso precise
Obs: é para ser executado dentro da container
```bash
    make install
```
Rodando o test
````bash
python python tests/test_entrypoint.py -v

````


### Django
basic/python/django-rest

### FastApi
basic/python/fastapi

## PHP
### Slim
basic/php/slim
