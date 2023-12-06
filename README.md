<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/topo_home.png" width="800" alt="CodeCreators"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<br>

## 📚 Introdução ao Projeto de Tokenização do Tesouro Nacional

Neste mundo dinâmico e em constante evolução dos investimentos e tecnologias financeiras, temos o prazer de apresentar um projeto pioneiro que redefine o paradigma do investimento em títulos públicos: a "Solução para Tokenização do Tesouro Nacional". Esta proposta inovadora visa integrar a segurança e a estabilidade dos títulos públicos com a eficiência e a transparência da tecnologia blockchain.
<br><br>
Dirigido a investidores no território nacional com CPF, inclusive estrangeiros registrados, este projeto está no cerne do desafio de desenvolver tecnologias avançadas para a tokenização de títulos públicos. O foco principal é visar a massificação, adoção e utilização desses títulos por investidores tanto no Brasil quanto no exterior.
<br><br>
Nosso projeto é estruturado em torno de quatro pilares fundamentais: um Contrato Inteligente para a Criação e Gerenciamento do Token, uma Ferramenta Marketplace inovadora, uma Ferramenta de Auditoria para Rastreamento do Token e um Painel Administrativo completo para gerenciamento do Token. Cada um desses componentes foi cuidadosamente desenvolvido para atender às necessidades dos investidores modernos e no gerenciamento do token pelo Tesouro Nacional, oferecendo facilidade de acesso, usabilidade intuitiva e segurança impecável.
<br><br>
Com um diferencial marcante em tecnologia blockchain avançada e interfaces de usuário intuitivas, nosso projeto não apenas cumpre os requisitos do mercado atual, mas também estabelece novos padrões para o futuro dos investimentos em títulos públicos. É uma honra apresentar esta proposta, um testemunho do nosso compromisso com a inovação, segurança e excelência garantindo um salto significativo na forma como os títulos públicos são visualizados e negociados.
<br><br>

> Participar deste hackathon foi uma jornada<br>
> incrível de aprendizado e colaboração.<br>
> Agradecemos imensamente pela oportunidade<br>
> de crescer, inovar e compartilhar ideias<br>
> com mentes tão brilhantes.<br>
> Equipe "Code Creators"
<br>

## 🎯 Desafio das Redes 

Conforme item  10.15 do edital segue abaixo as 2 postagens para o "Desafio das Redes", segue comprovante para que seja computada para minha equipe os 0,5 ponto.
<br><br>
https://www.linkedin.com/posts/marcelo-jos%C3%A9-b20b8949_hackathonweb3stn-activity-7125452858631630849-sKz_<br>
https://www.linkedin.com/posts/marcelo-jos%C3%A9-b20b8949_hackathonweb3stn-activity-7125450332972736512-cNKB
<br><br>

## 🌐 Link do MVP
https://codecreators.com.br/
<br><br>

## 🌐 Link da Apresentação
<p align="left"><a href="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/apresentacao-code-creators.pptx">Download da Apresentação em PowerPoint</a](https://www.youtube.com/watch?v=fGzYUPVvNkI)></p>
<br><br>

## 🎞 Vídeos do MVP 

Preparamos uma série de vídeos para demonstrar a solução funcionando com nosso MVP.

| Descrição | Vídeo |
| ------ | ------ |
| Pitch CodeCreators | [video](https://www.youtube.com/watch?v=fGzYUPVvNkI) |

<br>

## 🚀 Tecnologias Utilizadas

Abaixo as ferramentas e tecnologias que foram utilizadas no nosso projeto.

<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=git,github,php,laravel,vscode,linux,nodejs,js,html,jquery,mysql" />
  </a>
</p>
<br>

## ⚙️ Contrato Inteligente 
O contrato inteligente para criação e gerenciamento do Token está na pasta "contrato-solidity" e está documentado.<br>

<p align="center"><a href="https://github.com/mjdos/tesouro_direto/blob/main/contrato-solidity/contracts/TesouroDireto.sol">https://github.com/mjdos/tesouro_direto/blob/main/contrato-solidity/contracts/TesouroDireto.sol</a></p>
<br>

O nosso contrato inteligente "Tesouro Direto" é baseado em blockchain, especificamente na rede BSC e utiliza a linguagem de programação Solidity. Este contrato implementa um sistema de emissão, gerenciamento e negociação de títulos digitais (tokens), com funcionalidades adicionais para gerenciar liquidez e transações seguras. Aqui está um resumo do seu funcionamento:
<br><br><b>a. Criação e Gerenciamento de Títulos Digitais:</b> O contrato permite a criação de títulos digitais, cada um identificado por um ID único e armazenado com detalhes específicos. Apenas o proprietário do contrato pode criar novos títulos. 
<br><br><b>b. Liquidez e Transferência de Fundos:</b> O contrato gerencia uma carteira de liquidez que deposita 2% de cada transação e permite transferências de fundos do contrato para a carteira do Owner e vice-versa. Há um mecanismo para verificar o saldo e movimentar fundos de forma segura, prevenindo reentrâncias.
<br><br><b>c. Emissão de Títulos para Investidores:</b> O contrato permite a emissão de títulos para detentores específicos. As carteiras autorizadas podem emitir títulos, e os detalhes de cada título são rastreados.
<br><br><b>d. Compra e Venda no Mercado Secundário:</b> O contrato facilita a compra e venda de títulos no mercado secundário. Os usuários podem depositar BNB para comprar títulos de outros detentores, com mecanismos para garantir transferências seguras e cobrança de taxas.
<br><br><b>e. Resgate de Títulos:</b> Os detentores de títulos podem resgatar seus títulos em troca de BNB. O contrato garante que o valor de resgate esteja disponível e gerencia a queima de tokens para concluir o resgate. 
<br><br><b>f. Segurança e Gestão de Acesso:</b> O contrato inclui recursos para adicionar ou remover carteiras de uma lista negra, prevenindo atividades mal-intencionadas e spam. Somente o proprietário do contrato e carteiras autorizadas podem realizar certas operações, garantindo controle e segurança.
<br><br>Em resumo, este contrato representa um ecossistema para a emissão, gerenciamento, compra, venda e resgate de títulos tokenizados, com mecanismos robustos para assegurar a liquidez, segurança e integridade das transações.
<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/codigo.png" width="900" alt="Painel Administrativo"></p>

Endereço do Contrato na BSC Testnet 0x4252947557f38cD7A9D5a52a0eB38C7AA3Bc3440.
<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/qrcode.png" width="270" alt="Token Selic 2026"></p>
<br>

## Marketplace

Desenvolvemos uma ferramenta de "Marketplace" para a compra e venda de títulos do Tesouro Direto representa uma revolução no acesso e gerenciamento de investimentos em títulos governamentais. Projetada para ser intuitiva e amigável, esta plataforma oferece uma série de recursos avançados e úteis para investidores de todos os níveis. Aqui estão os principais destaques:
<br><br>2.1 - Interface Amigável e Intuitiva: A plataforma foi projetada com um layout simples e fácil de navegar, tornando-a acessível mesmo para investidores novatos. O design limpo e a organização lógica dos elementos garantem uma experiência de usuário sem esforço.
<br><br>2.2 - Painel de Negociação em Tempo Real: Um dos recursos mais poderosos é o painel que exibe compras e vendas de títulos em tempo real. Este painel permite que os usuários vejam a atividade do mercado à medida que acontece, fornecendo insights valiosos sobre tendências e movimentos do mercado.
<br><br>2.3 - Gráficos Dinâmicos para Acompanhamento do Mercado: A plataforma inclui gráficos detalhados e dinâmicos que oferecem uma análise visual do mercado de títulos. Estes gráficos são uma ferramenta crucial para investidores acompanharem o desempenho dos títulos, histórico de preços, volumes de negociação e outras métricas importantes.
<br><br>2.4 - Compra de Títulos de Outros Detentores: Além de investir em novos títulos, os usuários podem comprar títulos diretamente de outros detentores. Este recurso adiciona uma camada de flexibilidade e dinamismo ao mercado, permitindo transações diretas entre investidores.
<br><br>2.5 - Facilidade de Acesso e Segurança: A segurança é uma prioridade, e a plataforma emprega tecnologias avançadas para proteger as informações e transações dos usuários. O acesso é otimizado para ser rápido e seguro, garantindo que os investidores possam operar com confiança e tranquilidade.
<br><br>Em resumo, nossa ferramenta de "Marketplace" para títulos do Tesouro Direto é mais do que uma plataforma de negociação; é um segundo ecossistema completo projetado para empoderar investidores, fornecendo as ferramentas e informações necessárias para tomar decisões informadas e estratégicas no mercado de títulos.
<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/mp3.png" width="900" alt="Marketplace"></p>      
<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/mp1.png" width="900" alt="Marketplace"></p>
<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/mp2.png" width="900" alt="Marketplace"></p>

## Ferramenta de Auditoria
Esta ferramenta é projetada especificamente para facilitar o rastreamento das movimentações de tokens entre carteiras de forma simplificada e eficiente. Com este recurso, os usuários podem agora ter uma visão clara e detalhada das transações de token, aumentando a transparência e a confiança no sistema.
         A ferramenta de auditoria oferece uma interface intuitiva, permitindo que mesmo usuários sem conhecimentos técnicos avançados possam facilmente compreender e monitorar o fluxo de tokens. Isso é essencial para garantir a segurança e a integridade do processo de transferência, proporcionando aos nossos usuários uma experiência confiável e segura.
<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/auditoria.png" width="900" alt="Auditoria"></p>

## Painel Administrativo para gerenciamento do Token
Em nosso MVP implementamos um inovador Painel Administrativo, uma solução completa para o gerenciamento de tokens. Este painel é uma peça central de nossa plataforma, oferecendo um conjunto robusto de ferramentas projetadas para otimizar e assegurar a gestão de tokens.
<br><br>4.1 Criação de Token: Uma interface intuitiva que permite a criação de tokens de maneira simplificada, sem a necessidade de conhecimentos profundos em programação ou contratos inteligentes.
<br><br>4.2 Emissão de Token: Ferramentas eficientes para emitir tokens, proporcionando flexibilidade e controle total sobre a quantidade e a distribuição dos tokens.
<br><br>4.3 Gerenciamento de Carteiras Autorizadas: Capacidade de adicionar e gerenciar carteiras autorizadas a interagir com o contrato inteligente. Isso oferece um controle mais rigoroso sobre quem pode gerenciar o token, aumentando a segurança e a eficiência operacional.
<br><br>4.4 Ferramenta de Blacklist: Um mecanismo proativo para adicionar carteiras à blacklist, prevenindo spam e ataques maliciosos. Essa funcionalidade é crucial para manter a integridade da plataforma e a segurança dos usuários.
<br><br>4.5 Ferramenta para depositar e sacar BNB: Ferramenta projetada para que o Owner e as carteiras autorizadas possam depositar ou sacar BNB do contrato.

<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/painel.png" width="900" alt="Painel Administrativo"></p>


## 🏆 Token

<p align="center"><img src="https://github.com/mjdos/tesouro_direto/blob/main/public/assets/imagens/github/token2.png" width="1000" alt="Token Selic 2026"></p>


## 📝 Licença

<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a><br>
