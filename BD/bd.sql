CREATE TABLE `usuario` (
   `cpf` int primary key not null,
  `nome` varchar(255) NOT NULL,
  `estado_civil` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `objetivo` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  `conclusao` varchar(30) NOT NULL,
  `qual1` varchar(255) NOT NULL,
  `qual2` varchar(255) NOT NULL,
  `qual3` varchar(255) NOT NULL,
  `qual4` varchar(255) NOT NULL,
  `qual5` varchar(255) NOT NULL,
  `informacao` varchar(255) NOT NULL
)