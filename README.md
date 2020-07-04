uai mano
# AMBIENTE LINUX 

## INSTALAÇÃO FERRAMENTAS UTILIZADAS

1. Download ferramenta de apache e Mysql - XAMPP
    ##### Sistema 32 bits:
    ```
    wget https://ufpr.dl.sourceforge.net/project/xampp/XAMPP%20Linux/7.0.8/xampp-linux-7.0.8-0-installer.run -O xampp-installer.run
    ```
    ##### Sistema 64 bits:
    ```
    wget "https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/7.4.7/xampp-linux-x64-7.4.7-0-installer.run/download" -O xampp-installer.run
    ```
2. Após download, torne o arquivo executável:
```
chmod +x xampp-installer.run
```
3. Inicie a instalação XAMPP:
```
sudo ./xampp-installer.run
```
## INICIANDO APLICAÇÃO

1.Entre na pasta htdocs do XAMPP
```
cd /opt/lampp/htdocs
```
2. Clone o projeto "CurriculoOn" nesta pasta
```
git clone https://github.com/mateus2810/CurriculoOn.git
```
3. Abra o terminal novamente e inicie o Apache e Mysql para rodar sua aplicação:
```
sudo /opt/lampp/lampp start
``` 

## CONFIGURANDO BANCO DE DADOS

1. Acesse essa url:
```
http://localhost/phpmyadmin
``` 
2. Crie uma nova base de dados com o nome "bancoweb". Conforme demonstra na imagem

![alt text](https://github.com/mateus2810/CurriculoOn/blob/master/BD/criacaoBanco.png)

3. Importe o sql da pasta "/opt/lampp/htdocs/CurriculoOn/BD/bd.sql".

![alt text](https://github.com/mateus2810/CurriculoOn/blob/master/BD/importandoDados.png)

## INICIANDO A APLICAÇÃO

Entre em http://localhost/CurriculoOn/ e sua aplicação já vai esta funcionando!

