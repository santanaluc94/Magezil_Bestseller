# Produtos Mais Vendidos

## Instalação

Para baixar o módulo via composer, execute o código abaixo.

```sh
  composer require magezil/module-bestseller
```

### Requisitos do Sistema

> **Versão mínima:** 2.O
>
> **Versão desenvolvida:** 2.4.1
>
> **Versão do PHP:** ~7.1.3||~7.2.0||~7.3.0
>
> **Versão estável**: 1.0.0
>
> **Licença:** OSL-3.0/AFL-3.0

---

## Admin do Magento

Esse módulo adiciona um bloco na página de produtos, no qual busca na lista de Relatórios do Magento os produtos mais comprados. É possível exibir o bloco somente se o cliente estiver online, editar o perído que será filtrado, título e quantos produtos serão exibidos nesse bloco. Para habilitar o módulo siga os passos abaixo:
  - **Passo 1:** Magento admin --> Lojas --> Configurações --> Configuração
  - **Passo 2:** Tab _Magezil_ --> Seção _Produtos Mais Comprados_ --> Grupo _Configurações Gerais_
  - **Passo 3:** Habilitar Módulo = Sim

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/magezil-modulo.jpg)

### Configurações Gerais

Esse módulo fornece algumas configurações no admin:
  - **Exibir Usuário Logado:** Exibir bloco apenas quando o cliente estiver logado.
  - **Título:** Editar título do bloco.
  - **Exibir Qtd de Produtos:** Quantidade dos produtos que serão exibidos no frontend. Para não aplicar o filtro, apenas deixe vazio.

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/configuracoes-gerais.jpg)

### Configuração do Período

Esse módulo fornece algumas configurações para o período de filtragem do bloco:
  - **Período de Filtro:** Agrupar os produtos mais comprados por período (ano, mês ou dia).
  - **Data Inicial:** Data inicial do filtro.
  - **Data Final:** Data final do filtro.

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/configuracoes-periodo.jpg)

### Configuração dos Cartões

Esse módulo fornece algumas configurações para os cartões desse bloco:
  - **Listagem de Produtos do Magento:** Usar a listagem de produtos padrão do Magento ou uma listagem de personalizada com as próximas configurações (opcionais).
  - **Exibir Botão Lista de Compras:** Exibir botão de adicionar a lista de desejos no bloco dos produtos mais comprados personalizado.
  - **Exibir Botão Lista de Comparação:** Exibir botão de adicionar a lista de comparação no bloco dos produtos mais comprados personalizado.
  - **Exibir Qtd de Produtos:** Exibir quantidade dos produtos para adicionar ao carrinho no bloco dos produtos mais comprados personalizado.

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/configuracoes-cartao.jpg)

---

## Magento Storefront

#### Listagem de Produtos do Magento habilitada:

**Listagem de Produtos:**

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/magento-listagem.jpg)

**Cartão do Produto:**

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/magento-cartao.jpg)

#### Listagem de Produtos do Magento desabilitada:

**Listagem de Produtos personalizada:**

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/personalizavel-listagem.jpg)

**Cartão do Produto personalizado (com todas as configurações dos cartões habilitadas):**

![ScreenShot](https://github.com/santanaluc94/Magezil_Bestseller/blob/master/Readme/pt_BR/img/personalizavel-cartao.jpg)
