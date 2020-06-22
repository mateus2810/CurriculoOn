AMBIENTE LINUX 

Download ferramenta de apache e Mysql utilizada - XAMPP
    Sistema 32 bits:
    wget https://ufpr.dl.sourceforge.net/project/xampp/XAMPP%20Linux/7.0.8/xampp-linux-7.0.8-0-installer.run -O xampp-installer.run

    Sistema 64 bits:
    wget "https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/7.4.7/xampp-linux-x64-7.4.7-0-installer.run/download" -O xampp-installer.run
    
    Após o download, torne o arquivo executável:
    chmod +x xampp-installer.run

    Inicie a instalação XAMPP:
    sudo ./xampp-installer.run

Agora entre na pasta htdocs do XAMPP
    cd /opt/lampp/htdocs

Clone o projeto "CurriculoOn" nesta pasta
    git clone https://github.com/mateus2810/CurriculoOn.git

Abra o terminal novamente e inicie o Apache e Mysql para rodar sua aplicação:
    sudo /opt/lampp/lampp start


CONFIGURANDO BD

http://localhost/phpmyadmin/
Crie um novo banco de dados com o nome "bancoweb" e importe o sql da pasta "/opt/lampp/htdocs/CurriculoOn/BD/bd.sql"


Entre em http://localhost/CurriculoOn/ e sua aplicação já vai esta funcionando!






INICIALIZANDO PROJETO PELO XAMPP, irá statar bd e apache

    sudo /opt/lampp/xampp start
