-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jul-2021 às 04:34
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(13, 'Maxwell Caieira', 'max.souza413@gmail.com', '15649107769', '$2y$10$Vz7LIsmnnyETSSK4p3uP/ugw/GVQoLMDr3w5oBHVZtBJB2cESn/vu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` double(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `nome`, `descricao`, `quantidade`, `preco`) VALUES
(16, 'WHISKY JOHNNIE WALKER RED LABEL - 1L', 'Johnnie Walker Red Label é o blend pioneiro, que lançou o nosso whisky no mundo. Muito versátil e universalmente atraente, com sabor intenso e vigoroso que se destaca mesmo quando misturado. Johnnie Walker Red Label é o whisky escocês mais vendido no mundo. Perfeito para festas e encontros entre amigos, tanto em casa como fora.', 100, 84.90),
(14, 'COMBO WHISKY JOHNNIE WALKER RED LABEL 1L - 6 UNIDADES', 'Johnnie Walker Red Label é o blend pioneiro, que lançou o nosso whisky no mundo. Muito versátil e universalmente atraente, com sabor intenso e vigoroso que se destaca mesmo quando misturado. Johnnie Walker Red Label é o whisky escocês mais vendido no mundo. Perfeito para festas e encontros entre amigos, tanto em casa como fora. Combo com 06 unidades.', 100, 509.40),
(15, 'WHISKY OLD PARR - 1L', 'Criado em celebração à vida de Thomas Parr, um blend elegante e vibrante, com notas profundas e personalidade suave, porém marcante.', 100, 124.90),
(17, 'WHISKY JOHNNIE WALKER BLACK LABEL - 1L', 'Johnnie Walker Black Label é um verdadeiro ícone, reconhecido como uma inspiração para todas as outras marcas da categoria. Desenvolvido à partir de whiskies de, no mínimo, 12 anos vindos dos quatro cantos da Escócia, Johnnie Walker Black Label é um blend de caráter profundo, suave e complexo. Um whisky impressionante para compartilhar em qualquer ocasião, seja um encontro com amigos ou uma noite inesquecível.', 100, 146.90),
(18, 'WHISKY JOHNNIE WALKER BLONDE - 700ML', 'Um novo whisky leve, adocicado e com notas de baunilha que faz um drink perfeito para apreciar o pôr do sol.', 100, 84.90),
(19, 'WHISKY JOHNNIE WALKER GOLD LABEL 750 ML - EMBALAGEM COMEMORATIVA DE 200 ANOS', 'Whisky Johnnie Walker Gold Label Reserve em embalagem comemorativa de edição limitada para celebrar os 200 anos de história da marca Johnnie Walker (produto de edição limitada com apenas garrafa, sem cartucho). Johnnie Walker Gold Label Reserve é resultado de um costume centário da Johnnie Walker: o de convidar o Master Blender a fazer a sua seleção pessoal de ingredientes. Nesta edição, a escolha do Master Blender Jim Beveridge incluiu água dos montes Kildonan, onde em 1868 foi descoberto ouro. Johnnie Walker Gold Label Reserve convida à celebração - com um toque de estilo e ousadia, que torna esse momento memorável. É suave, cremoso, com camadas de frutas, baunilha e especiarias.', 100, 209.90),
(20, 'WHISKY JOHNNIE WALKER BLACK LABEL 1L - EMBALAGEM COMEMORATIVA DE 200 ANOS', 'O whisky Johnnie Walker Black Label em embalagem comemorativa de edição limitada para celebrar os 200 anos de história da marca Johnnie Walker. JOHNNIE WALKER BLACK LABEL é um verdadeiro ícone, reconhecido como uma inspiração para todas as outras marcas da categoria. Desenvolvido a partir de whiskies de, no mínimo, 12 anos vindos dos quatro cantos da Escócia, Johnnie Walker Black Label é um blend de caráter profundo, suave e complexo, com um sabor defumado. Um whisky impressionante para brindar em qualquer ocasião, podendo ser consumido puro, com gelo, ou como base de drinks clássicos como o Old Fashioned.', 100, 146.90),
(21, 'COMBO WHISKY JOHNNIE WALKER BLACK LABEL 1L - 6 UNIDADES', 'Johnnie Walker Black Label é um verdadeiro ícone, reconhecido como uma inspiração para todas as outras marcas da categoria. Desenvolvido à partir de whiskies de, no mínimo, 12 anos vindos dos quatro cantos da Escócia, Johnnie Walker Black Label é um blend de caráter profundo, suave e complexo. Um whisky impressionante para compartilhar em qualquer ocasião, seja um encontro com amigos ou uma noite inesquecível. Combo com 06 unidades.', 100, 881.40),
(22, 'COMBO 1 WHISKY JW BLACK LABEL 200 ANOS + 1 WHISKY JW GOLD LABEL 200 ANOS', 'Combo contém 2 unidades de whisky da família Johnnie Walker, edição especial comemorativa de 200 anos ,sendo : - 1 unidade do whisky JW Black Label 200 anos,1l, garrafa em edição especial comemorativa adesivada (líquido é o mesmo da garrafa regular). - 1 unidade do whisky JW Gold Label 200 anos,750ml, garrafa em edição especial comemorativa adesivada (líquido é o mesmo da garrafa regular).', 100, 349.80),
(23, 'COMBO 1 WHISKY JW RED LABEL 1L + 1 WHISKY JW BLACK LABEL 1L', 'Combo contém 2 unidades de whisky da família Johnnie Walker ,sendo : - 1 unidade do whisky JW Red Label 1l, garrafa regular em vidro. - 1 unidade do whisky JW Black Label 1l, garrafa regular em vidro.', 100, 220.80),
(24, 'WHISKY JOHNNIE WALKER RED LABEL - 750ML', 'Johnnie Walker Red Label é o blend pioneiro, que lançou o nosso whisky no mundo. Muito versátil e universalmente atraente, com sabor intenso e vigoroso que se destaca mesmo quando misturado. Johnnie Walker Red Label é o whisky escocês mais vendido no mundo. Perfeito para festas e encontros entre amigos, tanto em casa como fora. Johnnie Highball O Johnnie Walker Highball é a bebida perfeita para relaxar. Refrescante e fácil de beber, o Highball é uma introdução ideal para o mundo do whisky e pode ser decorado para realçar os sabores individuais de Johnnie Walker.', 100, 50.00),
(25, 'WHISKEY JACK DANIEL\'S - 1L', 'Os whiskeys da família Jack Daniel`s diferenciam-se pelo cuidadoso processo de elaboração. O envelhecimento em Barris de Carvalho novos, aliado ao clima muito especial do Tennessee, lhe confere um sabor suave e marcante. Permanecendo fiel a esta receita, as pessoas podem desfrutar do mesmo whiskey que ganhou sete medalhas de ouro internacionais, quando em 1904 foi homenageado como sendo \"o melhor whiskey do mundo\".', 100, 124.90);

-- --------------------------------------------------------

--
-- Estrutura da tabela `recados`
--

CREATE TABLE `recados` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `recado` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recados`
--

INSERT INTO `recados` (`id`, `nome`, `email`, `recado`, `created`) VALUES
(8, 'Maxwell Caieira', 'max.souza413@gmail.com', 'Um Ã³timo site.', '2021-06-25 00:35:00'),
(9, 'Luzia Caieira', 'lulucaieirafeliz@gmail.com', 'teste.', '2021-06-25 01:04:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(13, 'Maxwell Caieira', 'max.souza413@gmail.com', '15649107769', '$2y$10$Vz7LIsmnnyETSSK4p3uP/ugw/GVQoLMDr3w5oBHVZtBJB2cESn/vu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`);

--
-- Indexes for table `recados`
--
ALTER TABLE `recados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `recados`
--
ALTER TABLE `recados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
