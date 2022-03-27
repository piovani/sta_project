# Resumo

Veja instruções de teste, instruções de envio e critérios de avaliação no briefing:

[Strider Technical Assessment Briefing - 2.0](https://www.notion.so/Strider-Technical-Assessment-Briefing-2-0-ecf69c8281e34c14ab1d29a46eeb5cdf)

- Informações específicas do teste

# Descrição do Projeto

## Visão geral

O gerente de projeto com quem você trabalha deseja criar um novo produto, um novo aplicativo de mídia social chamado Posterr. O Posterr é muito semelhante ao Twitter, mas tem muito menos recursos.

O Posterr tem apenas duas páginas, a página inicial e a página de perfil do usuário, que são descritas abaixo. Outros dados e ações também são detalhados a seguir.

### Páginas

**Pagina inicial**

- A página inicial, por padrão, mostrará um feed de postagens (incluindo republicações e postagens de citações), começando com as últimas 10 postagens. As postagens mais antigas são carregadas sob demanda em pedaços de 10 postagens sempre que a rolagem do usuário atinge a parte inferior da página.
- Existe um botão de alternância "Todos / seguindo" que permite alternar entre ver todas as postagens e apenas as postagens daqueles que você segue. Para ambas as visualizações, todos os tipos de postagens são esperados no feed (postagens regulares, republicações e postagem de cotação).
- Novos posts podem ser escritos a partir desta página.

**Página de perfil do usuário**

- Mostra dados sobre o usuário:
    - Nome do usuário
    - Data de ingresso no Posterr, formatada como: "25 de março de 2021"
    - Número de seguidores
    - Número seguinte
    - Contagem do número de postagens que o usuário fez (incluindo republicações e postagens de citação)
- Mostra um feed das postagens que o usuário fez (incluindo republicações e postagens de citações), começando com as últimas 5 postagens. As postagens mais antigas são carregadas sob demanda quando o usuário clica em um botão na parte inferior da página chamado "mostrar mais".
- Mostra se você segue o usuário ou não
- Seguir/deixar de seguir ações:
    - Você pode seguir o usuário clicando em "Seguir" em seu perfil
    - Você pode deixar de seguir o usuário clicando em "Parar de seguir" no perfil dele
- Novos posts podem ser escritos a partir desta página

### Mais detalhes

**Comercial**

- Apenas caracteres alfanuméricos podem ser usados ​​para nome de usuário
- Máximo de 14 caracteres para nome de usuário
- Não crie autenticação
- Não crie CRUD para usuários
- Quando/se necessário para fazer seu aplicativo funcionar, você pode codificar o usuário. Por exemplo, você pode precisar fazer isso para implementar a criação de novas postagens, seguir, etc.

**Postagens**

As postagens são o equivalente aos tweets do Twitter. Eles são apenas texto, conteúdo gerado pelo usuário. Os usuários podem escrever postagens originais e interagir com as postagens de outros usuários republicando ou postando citações. Para este projeto, você deve implementar todos os três – postagens originais, republicações e postagem de citações

- Um usuário não tem permissão para postar mais de 5 postagens em um dia (incluindo republicações e postagens de citações)
- As postagens podem ter no máximo 777 caracteres
- Os usuários não podem atualizar ou excluir suas postagens
- Repostagem: os usuários podem repostar as postagens de outros usuários (como o Twitter Retweet)
- Quote-post: Os usuários podem repassar as postagens de outros usuários e deixar um comentário junto com ela (como Twitter Quote Tweet)

**Seguindo**

- Os usuários devem poder seguir outros usuários
- Os usuários não podem seguir a si mesmos
- Seguir e deixar de seguir será feito apenas na página de perfil do usuário

### **recurso extra: Pesquisa**

Trabalhe neste recurso extra apenas se tiver tempo suficiente para concluir os recursos necessários e passar por todas as três fases da entrevista.

- Implemente um recurso de pesquisa que permita aos usuários pesquisar com eficiência todas as postagens
- Este recurso de pesquisa não deve retornar republicações
- Esse recurso de pesquisa deve retornar postagens com citações, mas somente se a pesquisa corresponder ao texto adicional adicionado (**não** retorne correspondências da postagem original que foi citada no topo)
- (Para a Fase 2) Este recurso de pesquisa deve retornar respostas às postagens

## Fase 1, codificação

Tempo estimado: 7 horas

- Crie uma API RESTful e um sistema de back-end correspondente para lidar com os recursos detalhados acima. Essa API RESTful se comunicaria com o aplicativo JS de página única. Essa API que você cria deve habilitar todos os recursos em ambas as páginas.
- Você deve implementar um banco de dados real, pronto para produção, e as consultas devem ter bom desempenho.
- Não implemente recursos adicionais além do explicado na visão geral.
- Escreva alguns testes automatizados para este projeto.
- Não construa um front-end.

## Fase 2, planejamento

Tempo estimado: 30 minutos

O Gerente de Produto quer implementar um novo recurso chamado "responder a postagem" (é muito parecido com o do Twitter. São postagens regulares que usam "@ menção" no início para indicar que é uma resposta direta a uma postagem. só devem ser exibidos em um novo feed secundário no perfil do usuário chamado "Postagens e respostas", onde todas as postagens originais e as postagens de resposta são exibidas. Elas não devem ser exibidas no feed da página inicial.

O que você precisa fazer:

- Anote as dúvidas que você tem para o Gerente de Produto sobre a implementação.
- Escreva sobre como você resolveria esse problema com o máximo de detalhes possível. Escreva sobre todas as alterações no banco de dados/front-end/api/etc que você espera. Você deve anotar quaisquer suposições que esteja fazendo a partir de quaisquer perguntas para o Gerente de Produto que você mencionou anteriormente.
- **Seja minucioso!**

Isso deve ser adicionado como uma seção chamada "Planejamento" no README.

## Fase 3, autocrítica e dimensionamento

Tempo estimado: 30 minutos

Em qualquer projeto, é sempre um desafio obter o código perfeitamente como você deseja. Aqui está o que você precisa fazer para esta seção:

- Reflita sobre este projeto e escreva o que você melhoraria se tivesse mais tempo.
- Escreva sobre dimensionamento. Se esse projeto crescesse e tivesse muitos usuários e postagens, quais partes você acha que falhariam primeiro? Em uma situação da vida real, quais etapas você tomaria para dimensionar este produto? Que outros tipos de tecnologia e infraestrutura você pode precisar usar?
- **Seja minucioso!**

Isso deve ser adicionado como uma seção chamada "Crítica" no README.


followers = seguidores
following = seguindo

## Requirements
- [X] List posts (re-posts sitacoes) with filter (all or follow), with 10 itens
- [X] Novos Posts (novas postagens, republicacoes, e sotações)
  - apenas 5 postagens por dia
  - postagens com no maximo 777 caractesres
  - sem atualização ou exlusao de postagens
  - pode repostar com um comentario
- [X] Inf. User
  - nome de usuarios (apenas caracteres alfanumericos)
  - date start Posterr "25 de março de 2021"
  - numeros de seguidores
  - numeros de seguindo
  - numero de postagens, incluindo: republicacoes, postagens de citacoes
  - nao se pode seguir a si msm
- [X] Listagem dos 5 ultimos posts do usuario, incluindo paginação
- [X] Mostrar se segue usuario ou não
- [ ] Seguir usuario
- [ ] Deseguir usuario
  - deve retornar postagens com sitacoes
- [ ] Testes automatizados
- Escreva no README em uma sessão `Planning` explicando todas as etapas para alterar o projeto:
      para o recurso resposta direta com detalhes
- Escreve no README a autocritica do projeto, dizendo o que pode ser melhorando se tivese mais tempo
- [ ] Pesquisa de posts
    - nao deve retornar republicacoes (add filttro para isso)
- 
