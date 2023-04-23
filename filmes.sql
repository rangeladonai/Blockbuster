CREATE DATABASE filmes;
USE filmes;

CREATE TABLE `buscarfilmes` (
  `id_filmes` int(11) NOT NULL,
  `nome_filme` varchar(100) NOT NULL,
  `genero_filme` varchar(100) NOT NULL,
  `imagem_filme` varchar(255) NOT NULL,
  `ano_filme` varchar(255) NOT NULL,
  `diretor_filme` varchar(255) NOT NULL,
  `atores_filmes` varchar(255) NOT NULL,
  `tempo_filmes` varchar(255) NOT NULL,
  `nota_filmes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `buscarfilmes`
--

INSERT INTO `buscarfilmes` (`id_filmes`, `nome_filme`, `genero_filme`, `imagem_filme`, `ano_filme`, `diretor_filme`, `atores_filmes`, `tempo_filmes`, `nota_filmes`) VALUES
(1, 'Avatar', 'Action, Adventure, Fantasy', 'https://m.media-amazon.com/images/M/MV5BZDA0OGQxNTItMDZkMC00N2UyLTg3MzMtYTJmNjg3Nzk5MzRiXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_SX300.jpg', '2009', ' James Cameron', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', '162 min', 7.9),
(2, 'King Lion', 'Animation, Short, Adventure, Comedy, Drama', 'N/A', '2013', ' William Shakespeare (after)', 'Taylor James Johnson', '4 min', 0),
(56, 'Avatar', 'Action, Adventure, Fantasy', 'https://m.media-amazon.com/images/M/MV5BZDA0OGQxNTItMDZkMC00N2UyLTg3MzMtYTJmNjg3Nzk5MzRiXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_SX300.jpg', '2009', ' James Cameron', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', '162 min', 7.9),
(57, '', '', '', '', ' ', '', '', 0),
(58, '', '', '', '', ' ', '', '', 0),
(59, 'Avatar', 'Action, Adventure, Fantasy', 'https://m.media-amazon.com/images/M/MV5BZDA0OGQxNTItMDZkMC00N2UyLTg3MzMtYTJmNjg3Nzk5MzRiXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_SX300.jpg', '2009', ' James Cameron', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', '162 min', 7.9),
(60, '', '', '', '', ' ', '', '', 0),
(61, 'King Lion', 'Animation, Short, Adventure, Comedy, Drama', 'N/A', '2013', ' William Shakespeare (after)', 'Taylor James Johnson', '4 min', 0),
(62, 'Avatar', 'Action, Adventure, Fantasy', 'https://m.media-amazon.com/images/M/MV5BZDA0OGQxNTItMDZkMC00N2UyLTg3MzMtYTJmNjg3Nzk5MzRiXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_SX300.jpg', '2009', ' James Cameron', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', '162 min', 7.9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(32) NOT NULL,
  `bairro` varchar(32) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `buscarfilmes`
--
ALTER TABLE `buscarfilmes`
  ADD PRIMARY KEY (`id_filmes`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `buscarfilmes`
--
ALTER TABLE `buscarfilmes`
  MODIFY `id_filmes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;