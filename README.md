# Templates Api Rest

O objetivo é criar um template para cada framework no qual ja trabalhei para facilitar a criação de novos projetos e ter como principal referencia para não ter que ficar procurando na web ou na documentação.

Os templates devem seguir os principios do [Twekve Factors App](https://12factor.net/pt_br/)

### A estratégia
Vou dividir em 4 fases, a primeira vou implementar somente um metodo get retornando o Hello Workd, a segunda fazer vou implementar uma autenticação com jwt
a terceira fase seria configura o deploy para o ambiente de staging e production, a quarta fase vou criar um script, para criar o projeto partir dos templates.

### Lista de Templates
* PHP
    * [Slim](#slim) :white_check_mark:
    * Laravel
    * Symfony
* Python
    * [Flask](#flask) ✔️
    * [Django](#django) ✔️
    * [Fastapi](#fastapi) ✔️
* Nodejs
   * [Expressjs](#expressjs) ✔️

## Python

### Flask
Criando um novo projeto em flask a apartir do template criado

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
python tests/test_entrypoint.py -v
````
Os tests rodando corretamente, seu projeto está pronto


### Django
basic/python/django-rest

### FastApi
basic/python/fastapi

## PHP

### Slim
basic/php/slim

## Node Js

### ExpressJs
/basic/nodejs/express
