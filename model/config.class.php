<?php
Class Config
{
    //info para transicao servidor
    const SITE_URL = "http://rodrigo";
    const SITE_PASTA = "";
    const SITE_NOME = "Loja Rodrigo - PHP7 MYSQLI MVC";
    const SITE_EMAIL_ADM = "rodrigo.blefari@gmail.com.br";

    //DB info
    const DB_HOST = "localhost",
          DB_USER = "root",
          DB_SENHA = "",
          DB_BANCO = "lojarodrigo",
          DB_PREFIX = "as_";

    //Email info
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "rodrigo.blefari@gmail.com";
    const EMAIL_NOME = "rodrigo";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "rodrigo.blefari@gmail.com";

}