# Introdução ao PHP - Alura

## O que é PHP

-   linguagem de programação interpretada (não é compilada)
-   Tem propósito genérico (web, IOT, apps desktop, terminal...)
-   Feito pensado na web

**Instalando o PHP**

-   Temos a opção de compilar o PHP (habilitar somente as partes que serão executadas)
-   No windows

        -   https://www.php.net/downloads
        -   windows downloas > .zip
        -   adicionando uma variável de ambiente
        -   Variáveis de Ambiente > Path > Editar > Novo > caminho total até a pasta do PHP
        -   php -v para testar a instalação
        -   php.ini-development renomear para php.ini
        -   _php -a_ inicia um terminal interativo php e _quit_ sai

    **Código em PHP**

-   Utilizar SEMPRE ; no final de uma linha de comando
-   _<?php código php;_

### Variáveis e tipos

-   variáveis em php começam com $
-   Strings => aspas duplas e simples TEM DIFERENÇA
-   quebras de linha => **\n** (apenas em aspas duplas)

### Tomando decisões

-   comparações => **==**, **>=**, **!=**
-   operadores lógicos:
    -   OU => **||** ou **or**
    -   E => **&&** ou **and**
